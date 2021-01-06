<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffVideoContentPivotTable extends Migration
{
    public function up()
    {
        Schema::create('staff_video_content', function (Blueprint $table) {
            $table->unsignedBigInteger('video_content_id');
            $table->foreign('video_content_id', 'video_content_id_fk_2332682')->references('id')->on('video_contents')->onDelete('cascade');
            $table->unsignedBigInteger('staff_id');
            $table->foreign('staff_id', 'staff_id_fk_2332682')->references('id')->on('staff')->onDelete('cascade');
        });
    }
}
