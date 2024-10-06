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
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('district_id')->constrained('districts')->onDelete('cascade');
            $table->string('name_en'); // City name in English
            $table->string('name_si'); // City name in Sinhala
            $table->string('name_ta'); // City name in Tamil
            $table->decimal('latitude', 10, 8); // Latitude of the city
            $table->decimal('longitude', 11, 8); // Longitude of the city
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cities');
    }
};
