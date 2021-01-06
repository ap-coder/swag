<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToCommentsTable extends Migration
{
    public function up()
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->unsignedBigInteger('author_id')->nullable();
            $table->foreign('author_id', 'author_fk_2759789')->references('id')->on('users');
        });
    }
}
