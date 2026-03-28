<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// TIPO: Transaccional — resultados cronométricos por participante.
// Mejoras vs. propuesta original:
//   - Tiempos en segundos (unsignedInteger) → permite ORDER BY y cálculos exactos sin parsear strings
//   - chip_code → código del chip de cronometraje
//   - dns / dnf / dsq → flags estándar en cronometraje deportivo internacional
//   - t2_time_seconds → transición 2 (solo triatlón)
//   - run_time_seconds → segmento de carrera (triatlón/acuatlón/duatlón)
//   - Posiciones separadas para: general, por modalidad, por categoría, por género
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('race_results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('registration_id')->unique()->constrained()->cascadeOnDelete();

            // Datos de largada
            $table->string('bib_number', 10)->nullable();      // Número de dorsal
            $table->string('chip_code', 30)->nullable();       // Código chip de cronometraje

            // Tiempos en segundos (NULL = segmento no aplica para ese tipo de evento)
            $table->unsignedInteger('swim_time_seconds')->nullable();
            $table->unsignedInteger('t1_time_seconds')->nullable();  // Transición natación → bici
            $table->unsignedInteger('bike_time_seconds')->nullable();
            $table->unsignedInteger('t2_time_seconds')->nullable();  // Transición bici → carrera
            $table->unsignedInteger('run_time_seconds')->nullable();
            $table->unsignedInteger('total_time_seconds')->nullable();

            // Posiciones (NULL = no calculado / no aplica)
            $table->unsignedSmallInteger('position_overall')->nullable();   // General absoluto
            $table->unsignedSmallInteger('position_gender')->nullable();    // Por género
            $table->unsignedSmallInteger('position_category')->nullable();  // Por categoría
            $table->unsignedSmallInteger('position_mode')->nullable();      // Por modalidad

            // Flags estándar de cronometraje
            $table->boolean('dns')->default(false); // Did Not Start
            $table->boolean('dnf')->default(false); // Did Not Finish
            $table->boolean('dsq')->default(false); // Disqualified

            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('race_results');
    }
};
