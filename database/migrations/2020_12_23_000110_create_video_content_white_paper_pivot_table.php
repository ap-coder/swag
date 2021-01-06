<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideoContentWhitePaperPivotTable extends Migration
{
    public function up()
    {
        Schema::create('video_content_white_paper', function (Blueprint $table) {
            $table->unsignedBigInteger('video_content_id');
            $table->foreign('video_content_id', 'video_content_id_fk_2332691')->references('id')->on('video_contents')->onDelete('cascade');
            $table->unsignedBigInteger('white_paper_id');
            $table->foreign('white_paper_id', 'white_paper_id_fk_2332691')->references('id')->on('white_papers')->onDelete('cascade');
        });
    }
}
