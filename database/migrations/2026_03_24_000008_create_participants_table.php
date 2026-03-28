<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// TIPO: Transaccional/Maestro — un participante es una persona real que puede
// inscribirse en múltiples eventos y ediciones. Se normaliza para evitar duplicar
// datos personales por cada inscripción.
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('club_id')->nullable()->constrained('clubs')->nullOnDelete();

            // Datos personales
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->enum('document_type', ['DNI', 'CE', 'PASSPORT'])->default('DNI');
            $table->string('document_number', 20);
            $table->date('birthdate');
            $table->enum('gender', ['M', 'F']);
            $table->string('email', 150);
            $table->string('phone', 20)->nullable();
            $table->string('nationality', 60)->nullable()->default('Peruana');

            // Contacto de emergencia
            $table->string('emergency_contact_name', 150)->nullable();
            $table->string('emergency_contact_phone', 20)->nullable();

            // Foto de perfil opcional
            $table->string('photo_path')->nullable();

            $table->timestamps();
            $table->softDeletes();

            // Un tipo de documento + número es único a nivel global
            $table->unique(['document_type', 'document_number']);
            $table->index(['last_name', 'first_name']);
            $table->index('email');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('participants');
    }
};
