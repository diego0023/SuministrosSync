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
        Schema::create('historial_orden_almacenamientos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_orden_almacenamientos')->reference('id')->on('orden_almacenamientos')->onDelete('cascade');
            $table->string('descripcion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historial_orden_almacenamientos');
    }
};
