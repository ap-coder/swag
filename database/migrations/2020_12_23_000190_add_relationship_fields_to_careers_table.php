<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToCareersTable extends Migration
{
    public function up()
    {
        Schema::table('careers', function (Blueprint $table) {
            $table->unsignedBigInteger('department_id')->nullable();
            $table->foreign('department_id', 'department_fk_2332400')->references('id')->on('departments');
        });
    }
}
