<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupportsTable extends Migration
{
    public function up()
    {
        Schema::create('supports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('problem_description')->nullable();
            $table->string('reference')->nullable();
            $table->string('jira_ticket')->nullable();
            $table->boolean('published')->default(0)->nullable();
            $table->string('subject')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip')->nullable();
            $table->string('model')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('company')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('country')->nullable();
            $table->string('code_token')->nullable();
            $table->string('serial_number')->nullable();
            $table->string('sf_reference')->nullable();
            $table->string('sf_code')->nullable();
            $table->string('agile_epic')->nullable();
            $table->string('agile_story')->nullable();
            $table->string('senders_ip')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
