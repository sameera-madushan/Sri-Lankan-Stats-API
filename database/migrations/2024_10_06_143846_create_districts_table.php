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
        Schema::create('districts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('province_id')->constrained('provinces')->onDelete('cascade');
            $table->string('district_code_en'); // District code in English
            $table->string('district_code_si'); // District code in Sinhala
            $table->string('district_code_ta'); // District code in Tamil
            $table->string('name_en'); // District name in English
            $table->string('name_si'); // District name in Sinhala
            $table->string('name_ta'); // District name in Tamil
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('districts');
    }
};
