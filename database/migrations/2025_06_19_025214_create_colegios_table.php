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
      Schema::create('colegios', function (Blueprint $table) {
    $table->id('idcolegios');
    $table->string('nombre', 45);
    $table->string('departamento', 45);
    $table->string('ciudad', 45);
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colegios');
    }
};
