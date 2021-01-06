<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffStaffVideoPivotTable extends Migration
{
    public function up()
    {
        Schema::create('staff_staff_video', function (Blueprint $table) {
            $table->unsignedBigInteger('staff_id');
            $table->foreign('staff_id', 'staff_id_fk_2332201')->references('id')->on('staff')->onDelete('cascade');
            $table->unsignedBigInteger('staff_video_id');
            $table->foreign('staff_video_id', 'staff_video_id_fk_2332201')->references('id')->on('staff_videos')->onDelete('cascade');
        });
    }
}
