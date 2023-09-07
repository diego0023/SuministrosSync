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
        Schema::create('caracteristica_materia_primas', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->float('valor_min');
            $table->float('valor_max');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('caracteristica_materia_primas');
    }
};
