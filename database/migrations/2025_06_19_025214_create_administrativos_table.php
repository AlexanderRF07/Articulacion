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
        Schema::create('administrativos', function (Blueprint $table) {
            $table->id('idadministrativos');
            $table->string('nombres', 45)->nullable();
            $table->string('apellidos', 45)->nullable();
          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administrativos');
    }
};
