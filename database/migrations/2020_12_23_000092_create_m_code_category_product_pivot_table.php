<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMCodeCategoryProductPivotTable extends Migration
{
    public function up()
    {
        Schema::create('m_code_category_product', function (Blueprint $table) {
            $table->unsignedBigInteger('m_code_category_id');
            $table->foreign('m_code_category_id', 'm_code_category_id_fk_2759714')->references('id')->on('m_code_categories')->onDelete('cascade');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id', 'product_id_fk_2759714')->references('id')->on('products')->onDelete('cascade');
        });
    }
}
