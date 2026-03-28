<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// TIPO: Transaccional/Catálogo — cada edición de evento es una entidad independiente.
// Mejora: `slug` para URLs amigables, `type` para diferenciar natación/triatlón/acuatlón,
//         `registration_opens_at` / `registration_closes_at` para gestionar periodos automáticamente.
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name', 200);
            $table->string('slug', 200)->unique();
            $table->string('edition', 30)->nullable();            // Ej: "IV Edición"
            $table->enum('type', ['open_water', 'triathlon', 'aquathlon', 'duathlon', 'other'])
                  ->default('open_water');
            $table->text('description')->nullable();
            $table->string('location', 200)->nullable();           // Ej: "Laguna de Paca"
            $table->string('venue', 200)->nullable();              // Nombre del lugar/complejo
            $table->date('start_date');
            $table->date('end_date');
            $table->dateTime('registration_opens_at')->nullable(); // Apertura de inscripciones
            $table->dateTime('registration_closes_at')->nullable();// Cierre de inscripciones
            $table->unsignedSmallInteger('max_participants')->nullable();
            $table->string('banner_path')->nullable();
            $table->string('regulations_path')->nullable();        // PDF reglamento
            $table->enum('status', ['draft', 'published', 'closed', 'finished'])->default('draft');
            $table->timestamps();
            $table->softDeletes();

            $table->index(['status', 'start_date']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
