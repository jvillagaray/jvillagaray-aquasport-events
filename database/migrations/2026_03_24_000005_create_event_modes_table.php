<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// TIPO: Catálogo del evento — las modalidades son propias de cada evento.
// team_size = 1 → individual | team_size > 1 → relevo/equipo
// Ej: "Individual" (1), "Relay Mixto" (4), "Relay Damas" (4)
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('event_modes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')->constrained()->cascadeOnDelete();
            $table->string('name', 100);              // Ej: "Individual", "Relay Mixto"
            $table->string('code', 30);               // Ej: "IND", "REL-MIX"
            $table->unsignedTinyInteger('team_size')->default(1);
            $table->text('description')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();

            $table->unique(['event_id', 'code']);
            $table->index(['event_id', 'status']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('event_modes');
    }
};
