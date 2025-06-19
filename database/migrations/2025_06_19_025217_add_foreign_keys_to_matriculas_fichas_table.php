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
        Schema::table('matriculas_fichas', function (Blueprint $table) {
            $table->foreign(['aprendices_idaprendices'], 'fk_matriculas_fichas_aprendices1')->references(['idaprendices'])->on('aprendices')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['fichas_idfichas'], 'fk_matriculas_fichas_fichas1')->references(['idfichas'])->on('fichas')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('matriculas_fichas', function (Blueprint $table) {
            $table->dropForeign('fk_matriculas_fichas_aprendices1');
            $table->dropForeign('fk_matriculas_fichas_fichas1');
        });
    }
};
