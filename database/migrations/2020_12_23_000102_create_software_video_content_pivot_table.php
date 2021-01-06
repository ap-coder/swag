<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoftwareVideoContentPivotTable extends Migration
{
    public function up()
    {
        Schema::create('software_video_content', function (Blueprint $table) {
            $table->unsignedBigInteger('video_content_id');
            $table->foreign('video_content_id', 'video_content_id_fk_2332688')->references('id')->on('video_contents')->onDelete('cascade');
            $table->unsignedBigInteger('software_id');
            $table->foreign('software_id', 'software_id_fk_2332688')->references('id')->on('software')->onDelete('cascade');
        });
    }
}
