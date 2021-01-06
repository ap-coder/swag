<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareersTable extends Migration
{
    public function up()
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('job_title')->nullable();
            $table->date('open_date')->nullable();
            $table->date('close_date')->nullable();
            $table->longText('job_description')->nullable();
            $table->longText('about_code_section')->nullable();
            $table->boolean('published')->default(0)->nullable();
            $table->string('apply_link')->nullable();
            $table->string('slug')->nullable();
            $table->integer('view_count')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
