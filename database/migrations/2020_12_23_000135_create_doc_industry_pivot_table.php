<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocIndustryPivotTable extends Migration
{
    public function up()
    {
        Schema::create('doc_industry', function (Blueprint $table) {
            $table->unsignedBigInteger('doc_id');
            $table->foreign('doc_id', 'doc_id_fk_2332154')->references('id')->on('docs')->onDelete('cascade');
            $table->unsignedBigInteger('industry_id');
            $table->foreign('industry_id', 'industry_id_fk_2332154')->references('id')->on('industries')->onDelete('cascade');
        });
    }
}
