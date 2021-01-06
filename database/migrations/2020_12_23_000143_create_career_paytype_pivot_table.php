<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareerPaytypePivotTable extends Migration
{
    public function up()
    {
        Schema::create('career_paytype', function (Blueprint $table) {
            $table->unsignedBigInteger('career_id');
            $table->foreign('career_id', 'career_id_fk_2332402')->references('id')->on('careers')->onDelete('cascade');
            $table->unsignedBigInteger('paytype_id');
            $table->foreign('paytype_id', 'paytype_id_fk_2332402')->references('id')->on('paytypes')->onDelete('cascade');
        });
    }
}
