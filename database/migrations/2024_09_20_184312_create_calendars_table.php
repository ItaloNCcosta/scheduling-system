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
        Schema::create('calendars', function (Blueprint $table) {
            $table->ulid();
            $table->foreignUlid('user_id')->constrained('users')->onDelete('cascade');
            $table->boolean('isActived');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('calendar_times', function (Blueprint $table) {
            $table->id();
            $table->foreignUlid('calendar_id')->constrained('calendars')->onDelete('cascade');
            $table->enum('days', ['sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday']);
            $table->time('start_time');
            $table->time('end_time');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calendar_times');
        Schema::dropIfExists('calendars');
    }
};
