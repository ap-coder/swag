<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromosTable extends Migration
{
    public function up()
    {
        Schema::create('promos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->unique();
            $table->boolean('published')->default(0)->nullable();
            $table->longText('promo_text')->nullable();
            $table->longText('excerpt')->nullable();
            $table->string('slug')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('facebook_title')->nullable();
            $table->string('facebook_desc')->nullable();
            $table->string('twitter_post_description')->nullable();
            $table->string('twitter_post_title')->nullable();
            $table->string('drip_form')->nullable();
            $table->string('button_text')->nullable();
            $table->string('button_icon_class')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
