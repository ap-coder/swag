<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndustryProductPivotTable extends Migration
{
    public function up()
    {
        Schema::create('industry_product', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id', 'product_id_fk_2332103')->references('id')->on('products')->onDelete('cascade');
            $table->unsignedBigInteger('industry_id');
            $table->foreign('industry_id', 'industry_id_fk_2332103')->references('id')->on('industries')->onDelete('cascade');
        });
    }
}
