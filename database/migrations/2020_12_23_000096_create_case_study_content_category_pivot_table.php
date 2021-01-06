<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaseStudyContentCategoryPivotTable extends Migration
{
    public function up()
    {
        Schema::create('case_study_content_category', function (Blueprint $table) {
            $table->unsignedBigInteger('case_study_id');
            $table->foreign('case_study_id', 'case_study_id_fk_2332511')->references('id')->on('case_studies')->onDelete('cascade');
            $table->unsignedBigInteger('content_category_id');
            $table->foreign('content_category_id', 'content_category_id_fk_2332511')->references('id')->on('content_categories')->onDelete('cascade');
        });
    }
}
