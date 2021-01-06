<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscussionsTable extends Migration
{
    public function up()
    {
        Schema::create('discussions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->longText('content_area')->nullable();
            $table->string('slug')->nullable();
            $table->boolean('published')->default(0)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
