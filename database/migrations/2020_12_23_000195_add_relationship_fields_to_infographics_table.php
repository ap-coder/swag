<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToInfographicsTable extends Migration
{
    public function up()
    {
        Schema::table('infographics', function (Blueprint $table) {
            $table->unsignedBigInteger('author_id')->nullable();
            $table->foreign('author_id', 'author_fk_2332534')->references('id')->on('staff');
            $table->unsignedBigInteger('status_id')->nullable();
            $table->foreign('status_id', 'status_fk_2332535')->references('id')->on('statuses');
        });
    }
}
