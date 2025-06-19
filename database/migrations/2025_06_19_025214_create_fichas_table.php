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
        Schema::create('fichas', function (Blueprint $table) {
            $table->integer('idfichas')->primary();
            $table->string('codigo', 45)->nullable();
            $table->string('fecha_inicio', 45)->nullable();
            $table->string('cupos', 45)->nullable();
            $table->integer('anios escolares_idanios escolares')->index('fk_fichas_anios escolares1_idx');
            $table->integer('aprendices_idaprendices')->index('fk_fichas_aprendices1_idx');
            $table->integer('colegios_idcolegios')->index('fk_fichas_colegios1_idx');
            $table->integer('programas_idprogramas')->index('fk_fichas_programas1_idx');
            $table->integer('instructores_idinstructores')->index('fk_fichas_instructores1_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fichas');
    }
};
