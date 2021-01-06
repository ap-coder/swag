<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostVideoContentPivotTable extends Migration
{
    public function up()
    {
        Schema::create('post_video_content', function (Blueprint $table) {
            $table->unsignedBigInteger('video_content_id');
            $table->foreign('video_content_id', 'video_content_id_fk_2332685')->references('id')->on('video_contents')->onDelete('cascade');
            $table->unsignedBigInteger('post_id');
            $table->foreign('post_id', 'post_id_fk_2332685')->references('id')->on('posts')->onDelete('cascade');
        });
    }
}
