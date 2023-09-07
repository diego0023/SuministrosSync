<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('caracteristica_materias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_caracteristica')->reference('id')->on('caracteristica_materia_primas')->onDelete('cascade');
            $table->foreignId('id_materiaprima')->reference('id')->on('materia_primas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('caracteristica_materias');
    }
};
