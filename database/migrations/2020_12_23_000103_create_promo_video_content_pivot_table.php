<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromoVideoContentPivotTable extends Migration
{
    public function up()
    {
        Schema::create('promo_video_content', function (Blueprint $table) {
            $table->unsignedBigInteger('video_content_id');
            $table->foreign('video_content_id', 'video_content_id_fk_2332687')->references('id')->on('video_contents')->onDelete('cascade');
            $table->unsignedBigInteger('promo_id');
            $table->foreign('promo_id', 'promo_id_fk_2332687')->references('id')->on('promos')->onDelete('cascade');
        });
    }
}
