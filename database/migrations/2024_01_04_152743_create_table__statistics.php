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
        Schema::create('Statistics', function (Blueprint $table) {
            $table->id('id');
            $table->timestamps();
            $table->integer('User_ID');
            $table->integer('Game_time');
            $table->integer('Longest_round');
            $table->string('Hardest_word');
            $table->string('Rating_points');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Statistics');
    }
};
