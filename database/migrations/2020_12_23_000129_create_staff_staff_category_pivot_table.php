<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffStaffCategoryPivotTable extends Migration
{
    public function up()
    {
        Schema::create('staff_staff_category', function (Blueprint $table) {
            $table->unsignedBigInteger('staff_id');
            $table->foreign('staff_id', 'staff_id_fk_2332204')->references('id')->on('staff')->onDelete('cascade');
            $table->unsignedBigInteger('staff_category_id');
            $table->foreign('staff_category_id', 'staff_category_id_fk_2332204')->references('id')->on('staff_categories')->onDelete('cascade');
        });
    }
}
