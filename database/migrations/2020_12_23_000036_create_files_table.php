<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('published')->default(0)->nullable();
            $table->string('slug')->nullable();
            $table->string('version')->nullable();
            $table->longText('description')->nullable();
            $table->string('name')->unique();
            $table->date('expiration_date')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
