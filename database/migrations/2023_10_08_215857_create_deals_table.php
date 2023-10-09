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
        Schema::create('deals', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->boolean('status')->default('0');
            $table->unsignedBigInteger('cost')->default('0');
            $table->unsignedBigInteger('realty_id')->nullable();
            $table->index('realty_id', 'deal_realty_idx');
            $table->foreign('realty_id','deal_realty_fk')->on('realties')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deals');
    }
};
