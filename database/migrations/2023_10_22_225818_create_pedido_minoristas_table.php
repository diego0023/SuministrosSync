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
        Schema::create('pedido_minoristas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_producto')->reference('id')->on('productos')->onDelete('cascade');
            $table->integer('cantidad');
            $table->float('total');
            $table->string('tienda');
            $table->string('fecha');
            $table->boolean('procesado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedido_minoristas');
    }
};