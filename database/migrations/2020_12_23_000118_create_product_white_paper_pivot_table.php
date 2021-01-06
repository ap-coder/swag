<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductWhitePaperPivotTable extends Migration
{
    public function up()
    {
        Schema::create('product_white_paper', function (Blueprint $table) {
            $table->unsignedBigInteger('white_paper_id');
            $table->foreign('white_paper_id', 'white_paper_id_fk_2332486')->references('id')->on('white_papers')->onDelete('cascade');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id', 'product_id_fk_2332486')->references('id')->on('products')->onDelete('cascade');
        });
    }
}
