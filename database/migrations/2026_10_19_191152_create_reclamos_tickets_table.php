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
        Schema::create('reclamos_tickets', function (Blueprint $tabla) {
            $tabla->id();
            $tabla->foreignId('articulo_id')->constrained()->onDelete('cascade');
            $tabla->foreignId('usuario_id')->constrained()->onDelete('cascade');
            $tabla->text('descripcion_prueba'); // Marcas particulares o pruebas de propiedad
            $tabla->enum('estado', ['enviado', 'aprobado', 'rechazado'])->default('enviado');
            $tabla->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reclamos_tickets');
    }
};
