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
        Schema::create('documentos', function (Blueprint $table) {
            $table->integer('iddocumentos')->primary();
            $table->string('Documento', 45)->nullable();
            $table->string('compromisoDeAprendiz', 45)->nullable();
            $table->string('tratamientoDeMenores', 45)->nullable();
            $table->string('certificadoEPS', 45)->nullable();
            $table->string('registroCivil', 45)->nullable();
            $table->string('url', 45)->nullable();
            $table->string('estado', 45)->nullable();
            $table->integer('tiposdocumentos_idtiposdocumentos')->index('fk_documentos_tiposdocumentos1_idx');
            $table->integer('matriculas_fichas_idmatriculas_fichas')->index('fk_documentos_matriculas_fichas1_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documentos');
    }
};
