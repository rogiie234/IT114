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
        Schema::create('t_customers', function (Blueprint $table) {
            $table->id();
            $table->string('cus_first_name');
            $table->string('cus_last_name');
            $table->string('cus_email')->unique();
            $table->string('cus_phone_number')->nullable();
            $table->string('cus_address')->nullable();
            $table->string('cus_city')->nullable();
            $table->string('cus_state')->nullable();
            $table->string('cus_postal_code')->nullable();
            $table->string('cus_country')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_customers');
    }
};
