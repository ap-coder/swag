<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepliesTable extends Migration
{
    public function up()
    {
        Schema::create('replies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('content_area')->nullable();
            $table->boolean('published')->default(0)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
