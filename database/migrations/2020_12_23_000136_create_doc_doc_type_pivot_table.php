<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocDocTypePivotTable extends Migration
{
    public function up()
    {
        Schema::create('doc_doc_type', function (Blueprint $table) {
            $table->unsignedBigInteger('doc_id');
            $table->foreign('doc_id', 'doc_id_fk_2332150')->references('id')->on('docs')->onDelete('cascade');
            $table->unsignedBigInteger('doc_type_id');
            $table->foreign('doc_type_id', 'doc_type_id_fk_2332150')->references('id')->on('doc_types')->onDelete('cascade');
        });
    }
}
