<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqCategoryFaqQuestionPivotTable extends Migration
{
    public function up()
    {
        Schema::create('faq_category_faq_question', function (Blueprint $table) {
            $table->unsignedBigInteger('faq_question_id');
            $table->foreign('faq_question_id', 'faq_question_id_fk_2332131')->references('id')->on('faq_questions')->onDelete('cascade');
            $table->unsignedBigInteger('faq_category_id');
            $table->foreign('faq_category_id', 'faq_category_id_fk_2332131')->references('id')->on('faq_categories')->onDelete('cascade');
        });
    }
}
