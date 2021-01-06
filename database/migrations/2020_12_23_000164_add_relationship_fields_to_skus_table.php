<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToSkusTable extends Migration
{
    public function up()
    {
        Schema::table('skus', function (Blueprint $table) {
            $table->unsignedBigInteger('files_id')->nullable();
            $table->foreign('files_id', 'files_fk_2815300')->references('id')->on('files');
            $table->unsignedBigInteger('visibility_id')->nullable();
            $table->foreign('visibility_id', 'visibility_fk_2815302')->references('id')->on('visibilities');
            $table->unsignedBigInteger('team_id')->nullable();
            $table->foreign('team_id', 'team_fk_2815731')->references('id')->on('teams');
        });
    }
}
