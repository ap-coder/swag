<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToMyCustomersTable extends Migration
{
    public function up()
    {
        Schema::table('my_customers', function (Blueprint $table) {
            $table->unsignedBigInteger('customers_id')->nullable();
            $table->foreign('customers_id', 'customers_fk_2815745')->references('id')->on('users');
            $table->unsignedBigInteger('team_id')->nullable();
            $table->foreign('team_id', 'team_fk_2815749')->references('id')->on('teams');
        });
    }
}
