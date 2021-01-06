<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocsTable extends Migration
{
    public function up()
    {
        Schema::create('docs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('set_name')->unique();
            $table->boolean('published')->default(0)->nullable();
            $table->string('slug')->nullable();
            $table->string('config_catalog_filter')->nullable();
            $table->string('version')->nullable();
            $table->longText('description')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
