<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffVideosTable extends Migration
{
    public function up()
    {
        Schema::create('staff_videos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('video_link')->nullable();
            $table->longText('video_desc')->nullable();
            $table->boolean('published')->default(0)->nullable();
            $table->string('slug')->nullable();
            $table->integer('view_count')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
