<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMCodeCategoryMCodeFeaturePivotTable extends Migration
{
    public function up()
    {
        Schema::create('m_code_category_m_code_feature', function (Blueprint $table) {
            $table->unsignedBigInteger('m_code_feature_id');
            $table->foreign('m_code_feature_id', 'm_code_feature_id_fk_2759786')->references('id')->on('m_code_features')->onDelete('cascade');
            $table->unsignedBigInteger('m_code_category_id');
            $table->foreign('m_code_category_id', 'm_code_category_id_fk_2759786')->references('id')->on('m_code_categories')->onDelete('cascade');
        });
    }
}
