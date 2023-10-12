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
        Schema::create('booking_details', function (Blueprint $table) {
            $table->id();
            $table->double('price');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->foreignId('bookingSchedule_id')->constrained('booking_schedules');
            $table->foreignId('pitch_id')->constrained('pitches');
            $table->foreignId('service_detail_id')->constrained('service_details');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking_details');
    }
};
