<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimonialsTable extends Migration
{
    public function up()
    {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->longText('body');
            $table->string('website')->nullable();
            $table->integer('rating');
            $table->boolean('published')->default(0)->nullable();
            $table->string('signiture')->nullable();
            $table->string('signiture_company')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
