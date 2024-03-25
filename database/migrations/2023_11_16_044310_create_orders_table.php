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
        Schema::create('orders', function (Blueprint $table) {
            $table->id('order_id');
            $table->unsignedBigInteger('customer_id')->nullable;
            $table->foreign('customer_id')->references('customer_id')->on('customers');
            $table->unsignedBigInteger('branch_id');
            $table->foreign('branch_id')->references('branch_id')->on('branches');
            $table->unsignedBigInteger('table_id')->nullable;
            $table->foreign('table_id')->references('table_id')->on('tables');
            $table->boolean('status')->default(true);
            $table->decimal('total',10,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
