<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqQuestionProductPivotTable extends Migration
{
    public function up()
    {
        Schema::create('faq_question_product', function (Blueprint $table) {
            $table->unsignedBigInteger('faq_question_id');
            $table->foreign('faq_question_id', 'faq_question_id_fk_2332128')->references('id')->on('faq_questions')->onDelete('cascade');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id', 'product_id_fk_2332128')->references('id')->on('products')->onDelete('cascade');
        });
    }
}
