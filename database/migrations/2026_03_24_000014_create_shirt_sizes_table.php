<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

// TIPO: Catálogo — tallas de camiseta reutilizables entre eventos.
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('shirt_sizes', function (Blueprint $table) {
            $table->id();
            $table->string('code', 10)->unique(); // S, M, L, XL, XXL
            $table->string('label', 30);           // Small, Medium, Large...
            $table->unsignedTinyInteger('order')->default(1);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // Datos iniciales del catálogo
        DB::table('shirt_sizes')->insert([
            ['code' => 'XS',  'label' => 'Extra Small (XS)', 'order' => 1, 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
            ['code' => 'S',   'label' => 'Small (S)',         'order' => 2, 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
            ['code' => 'M',   'label' => 'Medium (M)',        'order' => 3, 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
            ['code' => 'L',   'label' => 'Large (L)',         'order' => 4, 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
            ['code' => 'XL',  'label' => 'Extra Large (XL)',  'order' => 5, 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
            ['code' => 'XXL', 'label' => 'Double XL (XXL)',   'order' => 6, 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('shirt_sizes');
    }
};
