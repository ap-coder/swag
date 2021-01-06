<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsProductPivotTable extends Migration
{
    public function up()
    {
        Schema::create('news_product', function (Blueprint $table) {
            $table->unsignedBigInteger('news_id');
            $table->foreign('news_id', 'news_id_fk_2332308')->references('id')->on('news')->onDelete('cascade');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id', 'product_id_fk_2332308')->references('id')->on('products')->onDelete('cascade');
        });
    }
}
