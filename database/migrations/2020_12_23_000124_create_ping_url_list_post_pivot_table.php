<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePingUrlListPostPivotTable extends Migration
{
    public function up()
    {
        Schema::create('ping_url_list_post', function (Blueprint $table) {
            $table->unsignedBigInteger('post_id');
            $table->foreign('post_id', 'post_id_fk_2758829')->references('id')->on('posts')->onDelete('cascade');
            $table->unsignedBigInteger('ping_url_list_id');
            $table->foreign('ping_url_list_id', 'ping_url_list_id_fk_2758829')->references('id')->on('ping_url_lists')->onDelete('cascade');
        });
    }
}
