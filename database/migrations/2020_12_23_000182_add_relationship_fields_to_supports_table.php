<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToSupportsTable extends Migration
{
    public function up()
    {
        Schema::table('supports', function (Blueprint $table) {
            $table->unsignedBigInteger('assign_to_id')->nullable();
            $table->foreign('assign_to_id', 'assign_to_fk_2332264')->references('id')->on('users');
            $table->unsignedBigInteger('support_status_id')->nullable();
            $table->foreign('support_status_id', 'support_status_fk_2332268')->references('id')->on('support_statuses');
            $table->unsignedBigInteger('case_reason_id')->nullable();
            $table->foreign('case_reason_id', 'case_reason_fk_2332286')->references('id')->on('support_categories');
        });
    }
}
