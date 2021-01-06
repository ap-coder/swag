<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocTypeFilePivotTable extends Migration
{
    public function up()
    {
        Schema::create('doc_type_file', function (Blueprint $table) {
            $table->unsignedBigInteger('file_id');
            $table->foreign('file_id', 'file_id_fk_2815076')->references('id')->on('files')->onDelete('cascade');
            $table->unsignedBigInteger('doc_type_id');
            $table->foreign('doc_type_id', 'doc_type_id_fk_2815076')->references('id')->on('doc_types')->onDelete('cascade');
        });
    }
}
