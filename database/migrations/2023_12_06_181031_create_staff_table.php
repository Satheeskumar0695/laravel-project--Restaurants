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
        Schema::table('staffs_register', function (Blueprint $table) {
            $table->string('bankname');
            $table->integer('accountnumber');
            $table->string('ifsccode');
            $table->string('branchname');
            $table->string('aadharcard')->change();
            $table->string('pancard')->change();
            $table->string('passbook')->change();
            $table->string('image')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('staffs_register', function (Blueprint $table) {
            //
        });
    }
};
