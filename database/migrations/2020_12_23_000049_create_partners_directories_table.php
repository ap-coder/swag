<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnersDirectoriesTable extends Migration
{
    public function up()
    {
        Schema::create('partners_directories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('url')->unique();
            $table->boolean('published')->default(0)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
