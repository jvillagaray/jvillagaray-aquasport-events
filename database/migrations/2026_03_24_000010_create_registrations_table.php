<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// TIPO: Transaccional — núcleo del sistema.
// Una inscripción une: evento + participante + distancia + categoría + modalidad + precio.
// Mejoras vs. propuesta original:
//   - event_price_id → trazabilidad del precio aplicado (no se pierde si cambia la fase)
//   - registration_number → código único legible (ej: AQS-2026-0001)
//   - team_id → para modalidades de relevo
//   - amount_paid → registra cuánto se pagó efectivamente (puede diferir del precio de tabla)
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('registration_number', 30)->unique(); // Ej: AQS-2026-0001

            // Relaciones principales
            $table->foreignId('event_id')->constrained()->restrictOnDelete();
            $table->foreignId('participant_id')->constrained()->restrictOnDelete();
            $table->foreignId('event_distance_id')->constrained('event_distances')->restrictOnDelete();
            $table->foreignId('event_category_id')->constrained('event_categories')->restrictOnDelete();
            $table->foreignId('event_mode_id')->constrained('event_modes')->restrictOnDelete();
            $table->foreignId('event_price_id')->constrained('event_prices')->restrictOnDelete();
            $table->foreignId('team_id')->nullable()->constrained('teams')->nullOnDelete();

            // Estado del flujo de inscripción
            $table->enum('status', [
                'pending',    // Formulario enviado, pendiente de pago
                'reviewing',  // Pago subido, pendiente de validación admin
                'approved',   // Pago validado, inscripción confirmada
                'rejected',   // Pago rechazado o datos inválidos
                'cancelled',  // Cancelada por el participante o admin
            ])->default('pending');

            $table->decimal('amount_paid', 8, 2)->nullable(); // Monto real pagado
            $table->text('notes')->nullable();                // Notas internas del admin
            $table->dateTime('confirmed_at')->nullable();     // Fecha de aprobación

            $table->timestamps();
            $table->softDeletes();

            // Un participante solo puede registrarse una vez por evento
            $table->unique(['event_id', 'participant_id'], 'uq_one_registration_per_event');

            $table->index(['event_id', 'status']);
            $table->index(['participant_id', 'status']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
