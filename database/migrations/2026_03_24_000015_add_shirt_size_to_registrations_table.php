<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Agrega shirt_size_id a registrations y voucher_path (comprobante de pago).
return new class extends Migration
{
    public function up(): void
    {
        Schema::table('registrations', function (Blueprint $table) {
            $table->foreignId('shirt_size_id')
                  ->nullable()
                  ->after('team_id')
                  ->constrained('shirt_sizes')
                  ->nullOnDelete();

            // Ruta del comprobante de pago subido en el formulario de inscripción
            $table->string('voucher_path')->nullable()->after('shirt_size_id');
        });
    }

    public function down(): void
    {
        Schema::table('registrations', function (Blueprint $table) {
            $table->dropForeign(['shirt_size_id']);
            $table->dropColumn(['shirt_size_id', 'voucher_path']);
        });
    }
};
