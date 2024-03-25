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
        Schema::create('menu_item_sold', function (Blueprint $table) {
            $table->unsignedBigInteger('sale_id');
            $table->foreign('sale_id')->references('sale_id')->on('sale_data');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('product_id')->on('menu_items');
            $table->integer('quantity');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_item_sold');
    }
};
