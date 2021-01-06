<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirmwareVideoContentPivotTable extends Migration
{
    public function up()
    {
        Schema::create('firmware_video_content', function (Blueprint $table) {
            $table->unsignedBigInteger('video_content_id');
            $table->foreign('video_content_id', 'video_content_id_fk_2332689')->references('id')->on('video_contents')->onDelete('cascade');
            $table->unsignedBigInteger('firmware_id');
            $table->foreign('firmware_id', 'firmware_id_fk_2332689')->references('id')->on('firmware')->onDelete('cascade');
        });
    }
}
