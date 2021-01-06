<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaseStudyVideoContentPivotTable extends Migration
{
    public function up()
    {
        Schema::create('case_study_video_content', function (Blueprint $table) {
            $table->unsignedBigInteger('video_content_id');
            $table->foreign('video_content_id', 'video_content_id_fk_2332690')->references('id')->on('video_contents')->onDelete('cascade');
            $table->unsignedBigInteger('case_study_id');
            $table->foreign('case_study_id', 'case_study_id_fk_2332690')->references('id')->on('case_studies')->onDelete('cascade');
        });
    }
}
