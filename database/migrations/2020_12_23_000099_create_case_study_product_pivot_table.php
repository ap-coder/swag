<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaseStudyProductPivotTable extends Migration
{
    public function up()
    {
        Schema::create('case_study_product', function (Blueprint $table) {
            $table->unsignedBigInteger('case_study_id');
            $table->foreign('case_study_id', 'case_study_id_fk_2332513')->references('id')->on('case_studies')->onDelete('cascade');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id', 'product_id_fk_2332513')->references('id')->on('products')->onDelete('cascade');
        });
    }
}
