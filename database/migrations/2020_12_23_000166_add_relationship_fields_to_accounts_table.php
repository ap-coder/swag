<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToAccountsTable extends Migration
{
    public function up()
    {
        Schema::table('accounts', function (Blueprint $table) {
            $table->unsignedBigInteger('team_id')->nullable();
            $table->foreign('team_id', 'team_fk_2760966')->references('id')->on('teams');
            $table->unsignedBigInteger('sales_rep_id')->nullable();
            $table->foreign('sales_rep_id', 'sales_rep_fk_2761190')->references('id')->on('staff');
            $table->unsignedBigInteger('industy_id')->nullable();
            $table->foreign('industy_id', 'industy_fk_2761198')->references('id')->on('industries');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id', 'user_fk_2815919')->references('id')->on('users');
        });
    }
}
