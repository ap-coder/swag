<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocVisibilityPivotTable extends Migration
{
    public function up()
    {
        Schema::create('doc_visibility', function (Blueprint $table) {
            $table->unsignedBigInteger('doc_id');
            $table->foreign('doc_id', 'doc_id_fk_2759907')->references('id')->on('docs')->onDelete('cascade');
            $table->unsignedBigInteger('visibility_id');
            $table->foreign('visibility_id', 'visibility_id_fk_2759907')->references('id')->on('visibilities')->onDelete('cascade');
        });
    }
}
