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
        Schema::create('user_data', function (Blueprint $table) {
            $table->id();
            $table->integer('nic')->unique();
            $table->string('gender');
            $table->string('date_of_birth');
            $table->string('email')->unique();
            $table->integer('phone_number')->unique();
            $table->string('location');
            $table->foreignId('user_id')->constrained('users','id')->onDelete('cascade');
            // $table->string('img');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_data');
    }
};
