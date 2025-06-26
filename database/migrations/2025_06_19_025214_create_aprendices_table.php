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
       Schema::create('aprendices', function (Blueprint $table) {
    $table->id('idaprendices');
    $table->string('nombre', 45);
    $table->string('apellidos', 45);
    $table->timestamps();
});
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aprendices');
    }
};
