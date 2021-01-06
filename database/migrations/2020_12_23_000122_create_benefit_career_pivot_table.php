<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBenefitCareerPivotTable extends Migration
{
    public function up()
    {
        Schema::create('benefit_career', function (Blueprint $table) {
            $table->unsignedBigInteger('career_id');
            $table->foreign('career_id', 'career_id_fk_2332403')->references('id')->on('careers')->onDelete('cascade');
            $table->unsignedBigInteger('benefit_id');
            $table->foreign('benefit_id', 'benefit_id_fk_2332403')->references('id')->on('benefits')->onDelete('cascade');
        });
    }
}
