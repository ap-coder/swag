<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToNewsTable extends Migration
{
    public function up()
    {
        Schema::table('news', function (Blueprint $table) {
            $table->unsignedBigInteger('status_id')->nullable();
            $table->foreign('status_id', 'status_fk_2332305')->references('id')->on('statuses');
            $table->unsignedBigInteger('author_id')->nullable();
            $table->foreign('author_id', 'author_fk_2332306')->references('id')->on('staff');
        });
    }
}
