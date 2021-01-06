<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupportCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('support_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->boolean('published')->default(0)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
