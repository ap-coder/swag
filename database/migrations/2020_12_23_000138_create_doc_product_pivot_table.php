<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocProductPivotTable extends Migration
{
    public function up()
    {
        Schema::create('doc_product', function (Blueprint $table) {
            $table->unsignedBigInteger('doc_id');
            $table->foreign('doc_id', 'doc_id_fk_2332145')->references('id')->on('docs')->onDelete('cascade');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id', 'product_id_fk_2332145')->references('id')->on('products')->onDelete('cascade');
        });
    }
}
