<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductSectionsTable extends Migration
{
    public function up()
    {
        Schema::create('product_sections', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('section_title');
            $table->longText('section')->nullable();
            $table->integer('order')->nullable();
            $table->boolean('published')->default(0)->nullable();
            $table->string('type')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
