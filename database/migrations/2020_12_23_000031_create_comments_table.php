<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('author_email')->nullable();
            $table->string('author_link')->nullable();
            $table->longText('content')->nullable();
            $table->boolean('approved')->default(0)->nullable();
            $table->integer('parent')->nullable();
            $table->integer('karma')->nullable();
            $table->string('author_ip')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
