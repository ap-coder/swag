<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToOrderFormsTable extends Migration
{
    public function up()
    {
        Schema::table('order_forms', function (Blueprint $table) {
            $table->unsignedBigInteger('team_id')->nullable();
            $table->foreign('team_id', 'team_fk_2759817')->references('id')->on('teams');
            $table->unsignedBigInteger('order_status_id')->nullable();
            $table->foreign('order_status_id', 'order_status_fk_2759818')->references('id')->on('order_statuses');
        });
    }
}
