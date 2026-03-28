<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// TIPO: Catálogo del evento — las distancias son propias de cada evento.
// Ej: "1.5 km – Olímpica", "750 m – Sprint", "3 km – Larga distancia"
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('event_distances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')->constrained()->cascadeOnDelete();
            $table->string('name', 100);              // Ej: "Olímpica"
            $table->unsignedInteger('distance_meters');// Ej: 1500
            $table->text('description')->nullable();
            $table->unsignedSmallInteger('max_participants')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();

            $table->index(['event_id', 'status']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('event_distances');
    }
};
