<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToAssociatedDocsTable extends Migration
{
    public function up()
    {
        Schema::table('associated_docs', function (Blueprint $table) {
            $table->unsignedBigInteger('file_id')->nullable();
            $table->foreign('file_id', 'file_fk_2815738')->references('id')->on('files');
        });
    }
}
