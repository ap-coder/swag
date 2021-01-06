<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToFirmwareTable extends Migration
{
    public function up()
    {
        Schema::table('firmware', function (Blueprint $table) {
            $table->unsignedBigInteger('status_id')->nullable();
            $table->foreign('status_id', 'status_fk_2332339')->references('id')->on('statuses');
            $table->unsignedBigInteger('visibility_id')->nullable();
            $table->foreign('visibility_id', 'visibility_fk_2759903')->references('id')->on('visibilities');
            $table->unsignedBigInteger('team_id')->nullable();
            $table->foreign('team_id', 'team_fk_2759905')->references('id')->on('teams');
        });
    }
}
