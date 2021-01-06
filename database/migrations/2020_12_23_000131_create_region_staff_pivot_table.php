<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegionStaffPivotTable extends Migration
{
    public function up()
    {
        Schema::create('region_staff', function (Blueprint $table) {
            $table->unsignedBigInteger('staff_id');
            $table->foreign('staff_id', 'staff_id_fk_2332203')->references('id')->on('staff')->onDelete('cascade');
            $table->unsignedBigInteger('region_id');
            $table->foreign('region_id', 'region_id_fk_2332203')->references('id')->on('regions')->onDelete('cascade');
        });
    }
}
