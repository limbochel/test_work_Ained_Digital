<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cust_deals', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('deal_id');

            $table->index('customer_id', 'customer_deal_customer_idx');
            $table->index('deal_id', 'customer_deal_deal_idx');

            $table->foreign('customer_id','customer_deal_customer_fk')->on('customers')->references('id');
            $table->foreign('deal_id','customer_deal_deal_fk')->on('deals')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cust_deals');
    }
};
