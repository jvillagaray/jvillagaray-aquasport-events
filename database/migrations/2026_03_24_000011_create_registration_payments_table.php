<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// TIPO: Transaccional — historial de pagos de una inscripción.
// Una inscripción puede tener múltiples intentos de pago (ej: voucher rechazado y reenvío).
// reviewed_by → FK al modelo User (administrador que validó el pago).
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('registration_payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('registration_id')->constrained()->cascadeOnDelete();

            $table->decimal('amount', 8, 2);
            $table->enum('payment_method', ['bank_transfer', 'yape', 'plin', 'cash', 'other'])
                  ->default('bank_transfer');
            $table->string('operation_number', 80)->nullable(); // Nro. operación bancaria
            $table->string('voucher_path')->nullable();          // Ruta del comprobante subido
            $table->date('payment_date')->nullable();            // Fecha declarada del pago

            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');

            // Auditoría de revisión
            $table->foreignId('reviewed_by')->nullable()
                  ->constrained('users')->nullOnDelete();
            $table->dateTime('reviewed_at')->nullable();
            $table->text('rejection_reason')->nullable();

            $table->timestamps();

            $table->index(['registration_id', 'status']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('registration_payments');
    }
};
