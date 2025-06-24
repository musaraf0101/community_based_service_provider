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
        Schema::create('compliants', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('service_date');
            $table->string('email');
            $table->integer('phone_number');
            $table->string('location');
            $table->string('compliant');
            $table->string('service_provider_name');
            $table->string('profession');
            $table->string('complaint_status')->nullable();
            // $table->string('compliant_img');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compliants');
    }
};
