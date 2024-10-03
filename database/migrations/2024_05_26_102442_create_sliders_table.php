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
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('text_ar')->nullable();
            $table->string('text_en')->nullable();
            $table->string('pagetitle_ar')->nullable();
            $table->string('pagetitle_en')->nullable();
            $table->string('image')->nullable();
            $table->foreignId('position_id')->constrained('slider_positions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sliders');
    }
};
