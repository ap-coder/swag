<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductVideoContentPivotTable extends Migration
{
    public function up()
    {
        Schema::create('product_video_content', function (Blueprint $table) {
            $table->unsignedBigInteger('video_content_id');
            $table->foreign('video_content_id', 'video_content_id_fk_2332683')->references('id')->on('video_contents')->onDelete('cascade');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id', 'product_id_fk_2332683')->references('id')->on('products')->onDelete('cascade');
        });
    }
}
