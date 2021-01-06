<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsVideoContentPivotTable extends Migration
{
    public function up()
    {
        Schema::create('news_video_content', function (Blueprint $table) {
            $table->unsignedBigInteger('video_content_id');
            $table->foreign('video_content_id', 'video_content_id_fk_2332686')->references('id')->on('video_contents')->onDelete('cascade');
            $table->unsignedBigInteger('news_id');
            $table->foreign('news_id', 'news_id_fk_2332686')->references('id')->on('news')->onDelete('cascade');
        });
    }
}
