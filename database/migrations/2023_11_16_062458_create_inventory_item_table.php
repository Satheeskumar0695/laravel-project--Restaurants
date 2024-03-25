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
        Schema::create('inventory_item', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('product_id')->on('menu_items');
            $table->unsignedBigInteger('branch_id');
            $table->foreign('branch_id')->references('branch_id')->on('branches');
            $table->string('product_name',100);
            $table->string('category',50);
            $table->text('description');
            $table->integer('product_quantity');
            $table->date('order_date');
            $table->date('receive_date');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory_item');
    }
};
