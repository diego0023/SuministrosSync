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
        Schema::create('orden_almacenamientos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_materia_prima')->reference('id')->on('materia_primas')->onDelete('cascade');
            $table->foreignId('id_usuario')->reference('id')->on('users')->onDelete('cascade');
            $table->dateTime('fecha_recepcion');
            $table->float('cantidad');
            $table->boolean('evaluada');
            $table->boolean('aprobada');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orden_almacenamientos');
    }
};
