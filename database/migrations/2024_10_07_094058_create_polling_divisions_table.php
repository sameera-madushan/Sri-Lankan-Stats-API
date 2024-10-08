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
        Schema::create('polling_divisions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('polling_district_id')->constrained('polling_districts')->onDelete('cascade');
            $table->string('name_en')->nullable(); // Polling Division name in English
            $table->string('name_si')->nullable(); // Polling Division name in Sinhala
            $table->string('name_ta')->nullable(); // Polling Division name in Tamil
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('polling_divisions');
    }
};
