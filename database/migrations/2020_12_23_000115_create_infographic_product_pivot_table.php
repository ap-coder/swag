<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfographicProductPivotTable extends Migration
{
    public function up()
    {
        Schema::create('infographic_product', function (Blueprint $table) {
            $table->unsignedBigInteger('infographic_id');
            $table->foreign('infographic_id', 'infographic_id_fk_2332542')->references('id')->on('infographics')->onDelete('cascade');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id', 'product_id_fk_2332542')->references('id')->on('products')->onDelete('cascade');
        });
    }
}
