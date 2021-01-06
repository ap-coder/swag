<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareerLocationPivotTable extends Migration
{
    public function up()
    {
        Schema::create('career_location', function (Blueprint $table) {
            $table->unsignedBigInteger('career_id');
            $table->foreign('career_id', 'career_id_fk_2332399')->references('id')->on('careers')->onDelete('cascade');
            $table->unsignedBigInteger('location_id');
            $table->foreign('location_id', 'location_id_fk_2332399')->references('id')->on('locations')->onDelete('cascade');
        });
    }
}
