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
        Schema::table('documentos', function (Blueprint $table) {
            $table->foreign(['matriculas_fichas_idmatriculas_fichas'], 'fk_documentos_matriculas_fichas1')->references(['idmatriculas_fichas'])->on('matriculas_fichas')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['tiposdocumentos_idtiposdocumentos'], 'fk_documentos_tiposdocumentos1')->references(['idtiposdocumentos'])->on('tiposdocumentos')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('documentos', function (Blueprint $table) {
            $table->dropForeign('fk_documentos_matriculas_fichas1');
            $table->dropForeign('fk_documentos_tiposdocumentos1');
        });
    }
};
