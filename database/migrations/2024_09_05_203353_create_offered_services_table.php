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
        Schema::create('offered_services', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('description')->nullable();
            $table->integer('time')->nullable();
            $table->decimal('price', 10, 2);
            $table->string('color')->nullable();
            $table->boolean('isActived')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offered_services');
    }
};
