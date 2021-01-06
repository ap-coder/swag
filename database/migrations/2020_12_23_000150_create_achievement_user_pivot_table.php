<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAchievementUserPivotTable extends Migration
{
    public function up()
    {
        Schema::create('achievement_user', function (Blueprint $table) {
            $table->unsignedBigInteger('achievement_id');
            $table->foreign('achievement_id', 'achievement_id_fk_2763836')->references('id')->on('achievements')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id', 'user_id_fk_2763836')->references('id')->on('users')->onDelete('cascade');
        });
    }
}
