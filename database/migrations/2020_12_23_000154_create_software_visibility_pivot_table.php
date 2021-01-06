<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoftwareVisibilityPivotTable extends Migration
{
    public function up()
    {
        Schema::create('software_visibility', function (Blueprint $table) {
            $table->unsignedBigInteger('software_id');
            $table->foreign('software_id', 'software_id_fk_2759906')->references('id')->on('software')->onDelete('cascade');
            $table->unsignedBigInteger('visibility_id');
            $table->foreign('visibility_id', 'visibility_id_fk_2759906')->references('id')->on('visibilities')->onDelete('cascade');
        });
    }
}
