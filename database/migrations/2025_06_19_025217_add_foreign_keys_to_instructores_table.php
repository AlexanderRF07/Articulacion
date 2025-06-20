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
        Schema::table('instructores', function (Blueprint $table) {
            $table->foreign(['roluser_iduser'], 'fk_instructores_user1')->references(['iduser'])->on('roluser')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('instructores', function (Blueprint $table) {
            $table->dropForeign('fk_instructores_user1');
        });
    }
};
