<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocVideoContentPivotTable extends Migration
{
    public function up()
    {
        Schema::create('doc_video_content', function (Blueprint $table) {
            $table->unsignedBigInteger('video_content_id');
            $table->foreign('video_content_id', 'video_content_id_fk_2332684')->references('id')->on('video_contents')->onDelete('cascade');
            $table->unsignedBigInteger('doc_id');
            $table->foreign('doc_id', 'doc_id_fk_2332684')->references('id')->on('docs')->onDelete('cascade');
        });
    }
}
