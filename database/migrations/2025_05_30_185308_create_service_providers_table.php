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
        Schema::create('service_providers', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->integer('nic')->unique();
            $table->string('gender');
            $table->string('date_of_birth');
            $table->string('profession');
            $table->string('email')->unique();
            $table->integer('phone_number')->unique();
            $table->string('location');
            // $table->string('img');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_providers');
    }
};
