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
    $table->id('iddocumentos');
    $table->string('Documento', 45)->nullable();
    $table->string('compromisoDeAprendiz', 45)->nullable();
    $table->string('tratamientoDeMenores', 45)->nullable();
    $table->string('certificadoEPS', 45)->nullable();
    $table->string('registroCivil', 45)->nullable();
    $table->string('url', 255)->nullable();
    $table->string('estado', 45)->nullable();

    $table->unsignedBigInteger('tiposdocumentos_idtiposdocumentos');
    $table->unsignedBigInteger('matriculas_fichas_idmatriculas_fichas');

    $table->foreign('tiposdocumentos_idtiposdocumentos')->references('idtiposdocumentos')->on('tiposdocumentos');
    $table->foreign('matriculas_fichas_idmatriculas_fichas')->references('idmatriculas_fichas')->on('matriculas_fichas');

    $table->timestamps();
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
