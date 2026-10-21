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
        Schema::create('articulos', function (Blueprint $tabla) {
            $tabla->id();
            $tabla->foreignId('usuario_id')->constrained('usuarios')->onDelete('cascade');
            $tabla->foreignId('categoria_id')->constrained('categorias')->onDelete('cascade');
            $tabla->foreignId('ubicacion_id')->constrained('ubicaciones')->onDelete('cascade');
            $tabla->string('titulo');
            $tabla->text('descripcion');
            $tabla->string('foto_url')->nullable();
            $tabla->enum('estado', ['pendiente', 'en_custodia', 'encontrado', 'reclamado', 'devuelto', 'descartado'])->default('pendiente');
            $tabla->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articulos');
    }
};
