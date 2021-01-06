<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFileVisibilityPivotTable extends Migration
{
    public function up()
    {
        Schema::create('file_visibility', function (Blueprint $table) {
            $table->unsignedBigInteger('file_id');
            $table->foreign('file_id', 'file_id_fk_2815081')->references('id')->on('files')->onDelete('cascade');
            $table->unsignedBigInteger('visibility_id');
            $table->foreign('visibility_id', 'visibility_id_fk_2815081')->references('id')->on('visibilities')->onDelete('cascade');
        });
    }
}
