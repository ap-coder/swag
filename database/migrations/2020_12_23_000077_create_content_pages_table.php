<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentPagesTable extends Migration
{
    public function up()
    {
        Schema::create('content_pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->longText('page_text')->nullable();
            $table->longText('excerpt')->nullable();
            $table->string('facebook_title')->nullable();
            $table->string('facebook_description')->nullable();
            $table->string('twitter_title')->nullable();
            $table->string('twitter_description')->nullable();
            $table->string('slug')->nullable();
            $table->boolean('published')->default(0)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
