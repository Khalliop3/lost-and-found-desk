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
        Schema::create('cache', function (Blueprint $tabla) {
            $tabla->string('key')->primary();
            $tabla->mediumText('value');
            $tabla->bigInteger('expiration')->index();
        });

        Schema::create('cache_locks', function (Blueprint $tabla) {
            $tabla->string('key')->primary();
            $tabla->string('owner');
            $tabla->bigInteger('expiration')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cache');
        Schema::dropIfExists('cache_locks');
    }
};
