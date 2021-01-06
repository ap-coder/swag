<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliverablesTable extends Migration
{
    public function up()
    {
        Schema::create('deliverables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('delivered_date')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
