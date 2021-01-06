<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductSoftwarePivotTable extends Migration
{
    public function up()
    {
        Schema::create('product_software', function (Blueprint $table) {
            $table->unsignedBigInteger('software_id');
            $table->foreign('software_id', 'software_id_fk_2332316')->references('id')->on('software')->onDelete('cascade');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id', 'product_id_fk_2332316')->references('id')->on('products')->onDelete('cascade');
        });
    }
}
