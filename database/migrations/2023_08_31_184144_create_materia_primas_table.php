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
        Schema::create('materia_primas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->float('precio_unidad');
            $table->string('lugar_almacenamiento');
            $table->string('descripcion');
            $table->foreignId('id_proveedor')->reference('id')->on('proveedors')->onDelete('cascade');
            $table->foreignId('id_tipo')->reference('id')->on('tipo_materia_primas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materia_primas');
    }
};
