<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToContentPagesTable extends Migration
{
    public function up()
    {
        Schema::table('content_pages', function (Blueprint $table) {
            $table->unsignedBigInteger('section_id')->nullable();
            $table->foreign('section_id', 'section_fk_2332120')->references('id')->on('content_sections');
            $table->unsignedBigInteger('status_id')->nullable();
            $table->foreign('status_id', 'status_fk_2332123')->references('id')->on('statuses');
        });
    }
}
