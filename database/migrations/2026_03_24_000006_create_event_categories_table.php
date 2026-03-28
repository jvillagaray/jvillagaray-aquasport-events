<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// TIPO: Catálogo del evento — rangos de edad por evento, género y nombre de categoría.
// Mejora: min_age / max_age permite calcular categoría dinámicamente en base a birthdate.
// NULL en min_age o max_age = "sin límite" (ej: categoría abierta o master general).
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('event_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')->constrained()->cascadeOnDelete();
            $table->string('name', 100);                // Ej: "Juvenil A", "Master 40+"
            $table->enum('gender', ['M', 'F', 'X']);    // M=Masculino, F=Femenino, X=Mixto/Abierto
            $table->unsignedTinyInteger('min_age')->nullable();
            $table->unsignedTinyInteger('max_age')->nullable();
            $table->text('description')->nullable();
            $table->unsignedTinyInteger('order')->default(1);
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();

            $table->index(['event_id', 'gender', 'status']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('event_categories');
    }
};
