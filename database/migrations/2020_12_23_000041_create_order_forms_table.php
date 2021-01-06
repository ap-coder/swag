<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderFormsTable extends Migration
{
    public function up()
    {
        Schema::create('order_forms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_name')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
