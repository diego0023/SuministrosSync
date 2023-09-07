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
        Schema::create('requisicions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_materia_prima')->reference('id')->on('materia_primas')->onDelete('cascade');
            $table->foreignId('id_usuario')->reference('id')->on('users')->onDelete('cascade');
            $table->dateTime('fecha_pedido');
            $table->dateTime('fecha_entrega');
            $table->float('cantidad');
            $table->boolean('evaluada');
            $table->boolean('denegada');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requisicions');
    }
};
