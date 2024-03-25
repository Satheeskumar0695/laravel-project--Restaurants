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
        Schema::create('table_reservation', function (Blueprint $table) {
            $table->id('reservation_id');
            $table->unsignedBigInteger('customer_id')->nullable;
            $table->foreign('customer_id')->references('customer_id')->on('customers');
            $table->unsignedBigInteger('branch_id');
            $table->foreign('branch_id')->references('branch_id')->on('branches');
            $table->unsignedBigInteger('table_id');
            $table->foreign('table_id')->references('table_id')->on('tables');
            $table->string('customer_name',50)->nullable;
            $table->bigInteger('customer_number')->nullable;
            $table->string('mail_id',100);
            $table->date('date');
            $table->time('time');
            $table->integer('no_of_guests');
            $table->text('special_request');
            $table->string('hall_type',50);
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_reservation');
    }
};
