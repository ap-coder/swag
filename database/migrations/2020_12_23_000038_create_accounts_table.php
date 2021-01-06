<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->boolean('approved')->default(0)->nullable();
            $table->string('company');
            $table->string('title');
            $table->string('phone');
            $table->string('city')->nullable();
            $table->string('state_region')->nullable();
            $table->string('country');
            $table->string('current_customer_partner');
            $table->string('cortexdecoder');
            $table->string('epic_id_number');
            $table->string('already_talked_to_rep');
            $table->string('are_you_a_student');
            $table->string('are_you_a_vendor');
            $table->boolean('accept_terms')->default(0)->nullable();
            $table->string('referral')->nullable();
            $table->string('lead_source')->nullable();
            $table->string('product_interest')->nullable();
            $table->string('license_key')->nullable();
            $table->boolean('w_2_lcc')->default(0)->nullable();
            $table->string('agent_1')->nullable();
            $table->string('agent_2')->nullable();
            $table->string('salesforce')->nullable();
            $table->string('salesrep_email')->nullable();
            $table->string('description')->nullable();
            $table->datetime('last_login')->nullable();
            $table->boolean('contract_agreed')->default(0)->nullable();
            $table->date('contract_agreed_date')->nullable();
            $table->string('contract_form_sent')->nullable();
            $table->boolean('consulted')->default(0)->nullable();
            $table->string('display_name')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
