<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentTagInfographicPivotTable extends Migration
{
    public function up()
    {
        Schema::create('content_tag_infographic', function (Blueprint $table) {
            $table->unsignedBigInteger('infographic_id');
            $table->foreign('infographic_id', 'infographic_id_fk_2332539')->references('id')->on('infographics')->onDelete('cascade');
            $table->unsignedBigInteger('content_tag_id');
            $table->foreign('content_tag_id', 'content_tag_id_fk_2332539')->references('id')->on('content_tags')->onDelete('cascade');
        });
    }
}
