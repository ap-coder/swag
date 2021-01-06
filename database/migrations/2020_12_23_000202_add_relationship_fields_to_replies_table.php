<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToRepliesTable extends Migration
{
    public function up()
    {
        Schema::table('replies', function (Blueprint $table) {
            $table->unsignedBigInteger('discussion_id')->nullable();
            $table->foreign('discussion_id', 'discussion_fk_2332708')->references('id')->on('discussions');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id', 'user_fk_2332709')->references('id')->on('users');
            $table->unsignedBigInteger('team_id')->nullable();
            $table->foreign('team_id', 'team_fk_2332714')->references('id')->on('teams');
        });
    }
}
