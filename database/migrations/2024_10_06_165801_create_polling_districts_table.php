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
        Schema::create('polling_districts', function (Blueprint $table) {
            $table->id();
            $table->string('name_en')->nullable(); // Polling District name in English
            $table->string('name_si')->nullable(); // Polling District name in Sinhala
            $table->string('name_ta')->nullable(); // Polling District name in Tamil
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('polling_districts');
    }
};
