<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeaturesTable extends Migration
{
    public function up()
    {
        Schema::create('features', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('info');
            $table->string('icon_class')->nullable();
            $table->boolean('published')->default(0)->nullable();
            $table->string('slug')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
