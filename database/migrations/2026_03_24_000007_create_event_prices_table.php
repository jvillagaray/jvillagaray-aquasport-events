<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// TIPO: Tabla pivot enriquecida — núcleo del sistema de precios.
// Precio = fase + distancia + modalidad.
// Ejemplo: Early Bird + Olímpica + Individual = S/. 80.00
//          Normal     + Olímpica + Individual = S/. 100.00
//          Normal     + Olímpica + Relay Mixto = S/. 90.00/persona
// Mejora vs. precio en event_distances: evita duplicar filas de distancia por precio.
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('event_prices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_phase_id')
                  ->constrained('event_phases')->cascadeOnDelete();
            $table->foreignId('event_distance_id')
                  ->constrained('event_distances')->cascadeOnDelete();
            $table->foreignId('event_mode_id')
                  ->constrained('event_modes')->cascadeOnDelete();
            $table->decimal('price', 8, 2);
            $table->timestamps();

            // Una combinación fase+distancia+modalidad es única → evita precios duplicados
            $table->unique(
                ['event_phase_id', 'event_distance_id', 'event_mode_id'],
                'uq_event_price_combination'
            );
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('event_prices');
    }
};
