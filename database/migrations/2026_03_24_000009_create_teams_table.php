<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// TIPO: Transaccional — equipos para modalidades con team_size > 1 (relevos).
// Un equipo pertenece a un evento + modalidad. Los participantes del equipo
// se enlazan a través de registrations.team_id.
// Para modalidad individual, registrations.team_id = NULL.
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')->constrained()->cascadeOnDelete();
            $table->foreignId('event_mode_id')->constrained('event_modes')->cascadeOnDelete();
            $table->foreignId('club_id')->nullable()->constrained('clubs')->nullOnDelete();
            $table->string('name', 150);
            $table->string('captain_name', 150)->nullable(); // Nombre del representante del equipo
            $table->timestamps();

            // Nombre de equipo único por evento + modalidad
            $table->unique(['event_id', 'event_mode_id', 'name'], 'uq_team_name_per_event_mode');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
