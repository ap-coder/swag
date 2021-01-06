<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentTagWhitePaperPivotTable extends Migration
{
    public function up()
    {
        Schema::create('content_tag_white_paper', function (Blueprint $table) {
            $table->unsignedBigInteger('white_paper_id');
            $table->foreign('white_paper_id', 'white_paper_id_fk_2332485')->references('id')->on('white_papers')->onDelete('cascade');
            $table->unsignedBigInteger('content_tag_id');
            $table->foreign('content_tag_id', 'content_tag_id_fk_2332485')->references('id')->on('content_tags')->onDelete('cascade');
        });
    }
}
