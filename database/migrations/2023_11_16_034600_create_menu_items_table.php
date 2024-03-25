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
        Schema::create('menu_items', function (Blueprint $table) {
            $table->id('product_id');
            $table->unsignedBigInteger('menu_id');
            $table->foreign('menu_id')->references('menu_id')->on('menu');
            $table->string('product_name',100);
            $table->text('product_description');
            $table->decimal('product_price', 8, 2);
            $table->binary('image');
            $table->boolean('status');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_items');
    }
};
