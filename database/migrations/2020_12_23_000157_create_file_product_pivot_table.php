<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFileProductPivotTable extends Migration
{
    public function up()
    {
        Schema::create('file_product', function (Blueprint $table) {
            $table->unsignedBigInteger('file_id');
            $table->foreign('file_id', 'file_id_fk_2815073')->references('id')->on('files')->onDelete('cascade');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id', 'product_id_fk_2815073')->references('id')->on('products')->onDelete('cascade');
        });
    }
}
