<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssociatedDocsTable extends Migration
{
    public function up()
    {
        Schema::create('associated_docs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('api_doc_link')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
