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
        Schema::table('fichas', function (Blueprint $table) {
            $table->foreign(['anios escolares_idanios escolares'], 'fk_fichas_anios escolares1')->references(['idanios escolares'])->on('anios escolares')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['aprendices_idaprendices'], 'fk_fichas_aprendices1')->references(['idaprendices'])->on('aprendices')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['colegios_idcolegios'], 'fk_fichas_colegios1')->references(['idcolegios'])->on('colegios')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['instructores_idinstructores'], 'fk_fichas_instructores1')->references(['idinstructores'])->on('instructores')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['programas_idprogramas'], 'fk_fichas_programas1')->references(['idprogramas'])->on('programas')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('fichas', function (Blueprint $table) {
            $table->dropForeign('fk_fichas_anios escolares1');
            $table->dropForeign('fk_fichas_aprendices1');
            $table->dropForeign('fk_fichas_colegios1');
            $table->dropForeign('fk_fichas_instructores1');
            $table->dropForeign('fk_fichas_programas1');
        });
    }
};
