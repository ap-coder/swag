<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDealRegsTable extends Migration
{
    public function up()
    {
        Schema::create('deal_regs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('reseller_company_name')->unique();
            $table->string('reseller_address')->nullable();
            $table->string('reseller_city')->nullable();
            $table->string('reseller_state')->nullable();
            $table->integer('reseller_zip')->nullable();
            $table->string('reseller_contact_name');
            $table->string('reseller_contact_email')->nullable();
            $table->string('reseller_contact_phone');
            $table->string('code_sales_rep');
            $table->string('end_user_company_name');
            $table->string('end_user_contact_name');
            $table->string('end_user_contact_email_address');
            $table->string('industry');
            $table->string('product_sku_1')->nullable();
            $table->integer('product_sku_1_qty')->nullable();
            $table->string('product_sku_2')->nullable();
            $table->integer('product_sku_2_qty')->nullable();
            $table->string('product_sku_3')->nullable();
            $table->string('product_sku_3_qty')->nullable();
            $table->string('distributor')->nullable();
            $table->date('opportunity_close_date')->nullable();
            $table->string('security_key')->nullable();
            $table->string('competitor')->nullable();
            $table->string('competitor_product_sku')->nullable();
            $table->integer('view_count')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
