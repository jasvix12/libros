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
        Schema::create('usuario_ejemplar', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuario_codigo');
            $table->unsignedBigInteger('ejemplar_codigo');
            $table->timestamps();

            $table->foreign('usuario_codigo')->references('codigo')->on('usuarios')->onDelete('cascade');
            $table->foreign('ejemplar_codigo')->references('codigo')->on('ejemplares')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario_ejemplar');
    }
};
