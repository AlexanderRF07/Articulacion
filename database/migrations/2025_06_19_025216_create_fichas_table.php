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
    $table->id('idfichas');
    $table->string('codigo', 45);
    $table->string('fecha_inicio', 45);
    $table->string('cupos', 45);
    
    $table->unsignedBigInteger('anios_escolares_idanios_escolares');
    $table->unsignedBigInteger('colegios_idcolegios');
    $table->unsignedBigInteger('programas_idprogramas');
    $table->unsignedBigInteger('instructores_idinstructores');

    $table->foreign('anios_escolares_idanios_escolares')->references('idanios_escolares')->on('anios_escolares');
    $table->foreign('colegios_idcolegios')->references('idcolegios')->on('colegios');
    $table->foreign('programas_idprogramas')->references('idprogramas')->on('programas');
    $table->foreign('instructores_idinstructores')->references('idinstructores')->on('instructores');

    $table->timestamps();
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
