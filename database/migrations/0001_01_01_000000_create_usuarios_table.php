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
        Schema::create('usuarios', function (Blueprint $tabla) {
            $tabla->id();
            $tabla->string('nombre');
            $tabla->string('email')->unique();
            $tabla->timestamp('email_verificacion_at')->nullable();
            $tabla->string('contraseña');
            $tabla->rememberToken();
            $tabla->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $tabla) {
            $tabla->string('email')->primary();
            $tabla->string('token');
            $tabla->timestamp('created_at')->nullable();
        });

        Schema::create('sesiones', function (Blueprint $tabla) {
            $tabla->string('id')->primary();
            $tabla->foreignId('usuario_id')->nullable()->index();
            $tabla->string('ip_address', 45)->nullable();
            $tabla->text('usuario_agent')->nullable();
            $tabla->longText('payload');
            $tabla->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Usuarios');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sesiones');
    }
};
