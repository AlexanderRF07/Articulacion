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
    $table->id('idmatriculas_fichas');
    $table->unsignedBigInteger('fichas_idfichas');
    $table->unsignedBigInteger('aprendices_idaprendices');

    $table->foreign('fichas_idfichas')->references('idfichas')->on('fichas');
    $table->foreign('aprendices_idaprendices')->references('idaprendices')->on('aprendices');

    $table->timestamps();
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
