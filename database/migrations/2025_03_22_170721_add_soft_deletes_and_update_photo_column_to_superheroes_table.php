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
        Schema::table('superheroes', function (Blueprint $table) {
            $table->string('foto_url')->nullable()->change(); // Permitir valores nulos
            $table->softDeletes(); // Agregar columna deleted_at para borrado suave
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('superheroes', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
};
