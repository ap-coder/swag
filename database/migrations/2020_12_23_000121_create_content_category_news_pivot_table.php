<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentCategoryNewsPivotTable extends Migration
{
    public function up()
    {
        Schema::create('content_category_news', function (Blueprint $table) {
            $table->unsignedBigInteger('news_id');
            $table->foreign('news_id', 'news_id_fk_2332289')->references('id')->on('news')->onDelete('cascade');
            $table->unsignedBigInteger('content_category_id');
            $table->foreign('content_category_id', 'content_category_id_fk_2332289')->references('id')->on('content_categories')->onDelete('cascade');
        });
    }
}
