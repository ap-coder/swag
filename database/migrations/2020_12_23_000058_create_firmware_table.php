<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirmwareTable extends Migration
{
    public function up()
    {
        Schema::create('firmware', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->longText('description')->nullable();
            $table->string('firmware_version')->nullable();
            $table->boolean('published')->default(0)->nullable();
            $table->string('slug')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
