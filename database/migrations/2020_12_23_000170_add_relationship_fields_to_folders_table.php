<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToFoldersTable extends Migration
{
    public function up()
    {
        Schema::table('folders', function (Blueprint $table) {
            $table->unsignedBigInteger('team_id')->nullable();
            $table->foreign('team_id', 'team_fk_2759806')->references('id')->on('teams');
            $table->unsignedBigInteger('folder_id')->nullable();
            $table->foreign('folder_id', 'folder_fk_2815166')->references('id')->on('folders');
        });
    }
}
