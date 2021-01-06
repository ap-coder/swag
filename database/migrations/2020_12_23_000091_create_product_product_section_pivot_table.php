<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductProductSectionPivotTable extends Migration
{
    public function up()
    {
        Schema::create('product_product_section', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id', 'product_id_fk_2332096')->references('id')->on('products')->onDelete('cascade');
            $table->unsignedBigInteger('product_section_id');
            $table->foreign('product_section_id', 'product_section_id_fk_2332096')->references('id')->on('product_sections')->onDelete('cascade');
        });
    }
}
