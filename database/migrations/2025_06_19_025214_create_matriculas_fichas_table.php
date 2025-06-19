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
        Schema::create('matriculas_fichas', function (Blueprint $table) {
            $table->integer('idmatriculas_fichas')->primary();
            $table->integer('fichas_idfichas')->index('fk_matriculas_fichas_fichas1_idx');
            $table->integer('aprendices_idaprendices')->index('fk_matriculas_fichas_aprendices1_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matriculas_fichas');
    }
};
