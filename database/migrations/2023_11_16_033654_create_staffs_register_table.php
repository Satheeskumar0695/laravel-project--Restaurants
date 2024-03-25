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
        Schema::create('staffs_register', function (Blueprint $table) {
            $table->id('employee_id');
            $table->string('firstname',50);
            $table->string('lastname',50);
            $table->string('email_id',50);
            $table->string('password',50);
            $table->biginteger('phonenumber');
            $table->date('dob');
            $table->integer('age');
            $table->string('nationality',50);
            $table->string('gender',50);
            $table->string('qualification',50);
            $table->string('experience',50);
            $table->date('joining');
            $table->string('door_no',50);
            $table->string('street_name',50);
            $table->string('locality',50);
            $table->string('city',50);
            $table->string('distict',50);
            $table->string('state',50);
            $table->integer('pincode');
            $table->binary('aadharcard');
            $table->binary('pancard');
            $table->binary('passbook');
            $table->binary('image');
            $table->boolean('verfication');
            $table->string('token',150);
            $table->datetime('tokenexpire');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staffs_register');
    }
};
