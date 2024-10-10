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
        Schema::create('province_maps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('province_id')->constrained('provinces')->onDelete('cascade');
            $table->text('svg_base64')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('province_maps');
    }
};
