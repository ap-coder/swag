<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAchievementsTable extends Migration
{
    public function up()
    {
        Schema::create('achievements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('published')->default(0)->nullable();
            $table->string('name')->unique();
            $table->longText('description')->nullable();
            $table->string('icon_class')->nullable();
            $table->string('link')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
