<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToPostsTable extends Migration
{
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->unsignedBigInteger('status_id')->nullable();
            $table->foreign('status_id', 'status_fk_2332234')->references('id')->on('statuses');
            $table->unsignedBigInteger('author_id')->nullable();
            $table->foreign('author_id', 'author_fk_2332235')->references('id')->on('staff');
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->foreign('parent_id', 'parent_fk_2758830')->references('id')->on('posts');
        });
    }
}
