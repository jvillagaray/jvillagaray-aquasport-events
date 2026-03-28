<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// TIPO: Transaccional — cada fase define un periodo de precios diferenciados.
// Nueva entidad clave: permite implementar "precio Early Bird", "precio normal", "precio tardío"
// sin duplicar distancias ni modalidades. El precio vive en event_prices (tabla pivot enriquecida).
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('event_phases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')->constrained()->cascadeOnDelete();
            $table->string('name', 100);            // Ej: "Early Bird", "Normal", "Tardía"
            $table->unsignedTinyInteger('order')->default(1);
            $table->dateTime('starts_at');
            $table->dateTime('ends_at');
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            $table->index(['event_id', 'is_active']);
            $table->index(['starts_at', 'ends_at']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('event_phases');
    }
};
