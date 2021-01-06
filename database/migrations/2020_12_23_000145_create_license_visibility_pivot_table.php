<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLicenseVisibilityPivotTable extends Migration
{
    public function up()
    {
        Schema::create('license_visibility', function (Blueprint $table) {
            $table->unsignedBigInteger('license_id');
            $table->foreign('license_id', 'license_id_fk_2759902')->references('id')->on('licenses')->onDelete('cascade');
            $table->unsignedBigInteger('visibility_id');
            $table->foreign('visibility_id', 'visibility_id_fk_2759902')->references('id')->on('visibilities')->onDelete('cascade');
        });
    }
}
