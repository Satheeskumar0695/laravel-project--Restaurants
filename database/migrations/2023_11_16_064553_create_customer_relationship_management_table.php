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
        Schema::create('customer_relationship_management', function (Blueprint $table) {
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('customer_id')->on('customers');
            $table->string('first_name',50);
            $table->string('last_name',50);
            $table->string('email',100);
            $table->string('address',200);
            $table->date('registration_date');
            $table->string('loyality_points',50);
            $table->string('notes',200);
            $table->string('feedback',200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_relationship_management');
    }
};
