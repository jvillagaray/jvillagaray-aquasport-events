<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// TIPO: Transaccional — documento de exoneración de responsabilidad (waiver).
// Una inscripción tiene exactamente un waiver (relación 1-1).
// Mejora: `accepted_at` registra cuando el participante aceptó digitalmente en el formulario;
//         `physical_delivered_at` para cuando entrega el documento físico en el evento.
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('waivers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('registration_id')->unique()->constrained()->cascadeOnDelete();

            $table->boolean('accepted_digitally')->default(false); // Aceptación en formulario web
            $table->dateTime('accepted_at')->nullable();            // Fecha de aceptación digital
            $table->string('signed_document_path')->nullable();     // PDF firmado (si aplica)
            $table->dateTime('physical_delivered_at')->nullable();  // Entrega física en el evento
            $table->string('ip_address', 45)->nullable();          // IP de aceptación (auditoría)
            $table->text('notes')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('waivers');
    }
};
