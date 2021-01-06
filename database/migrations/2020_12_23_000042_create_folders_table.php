<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoldersTable extends Migration
{
    public function up()
    {
        Schema::create('folders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('published')->default(0)->nullable();
            $table->string('name')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
