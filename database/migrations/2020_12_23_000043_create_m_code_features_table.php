<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMCodeFeaturesTable extends Migration
{
    public function up()
    {
        Schema::create('m_code_features', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('published')->default(0)->nullable();
            $table->string('name')->nullable();
            $table->longText('description')->nullable();
            $table->string('value')->nullable();
            $table->integer('order')->nullable();
            $table->string('feature_code')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
