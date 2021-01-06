<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCategorySoftwarePivotTable extends Migration
{
    public function up()
    {
        Schema::create('product_category_software', function (Blueprint $table) {
            $table->unsignedBigInteger('software_id');
            $table->foreign('software_id', 'software_id_fk_2332323')->references('id')->on('software')->onDelete('cascade');
            $table->unsignedBigInteger('product_category_id');
            $table->foreign('product_category_id', 'product_category_id_fk_2332323')->references('id')->on('product_categories')->onDelete('cascade');
        });
    }
}
