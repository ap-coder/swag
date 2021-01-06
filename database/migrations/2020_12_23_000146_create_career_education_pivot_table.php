<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareerEducationPivotTable extends Migration
{
    public function up()
    {
        Schema::create('career_education', function (Blueprint $table) {
            $table->unsignedBigInteger('career_id');
            $table->foreign('career_id', 'career_id_fk_2332398')->references('id')->on('careers')->onDelete('cascade');
            $table->unsignedBigInteger('education_id');
            $table->foreign('education_id', 'education_id_fk_2332398')->references('id')->on('education')->onDelete('cascade');
        });
    }
}
