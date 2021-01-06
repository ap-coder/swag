<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareerJobSkillPivotTable extends Migration
{
    public function up()
    {
        Schema::create('career_job_skill', function (Blueprint $table) {
            $table->unsignedBigInteger('career_id');
            $table->foreign('career_id', 'career_id_fk_2332397')->references('id')->on('careers')->onDelete('cascade');
            $table->unsignedBigInteger('job_skill_id');
            $table->foreign('job_skill_id', 'job_skill_id_fk_2332397')->references('id')->on('job_skills')->onDelete('cascade');
        });
    }
}
