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
        Schema::create('new_sliders', function (Blueprint $table) {
            $table->id();
            $table->string('pagetitle_ar')->nullable();
            $table->string('pagetitle_en')->nullable();
            $table->string('text_ar')->nullable();
            $table->string('text_en')->nullable();
            $table->string('saletitle_ar')->nullable();
            $table->string('saletitle_en')->nullable();
            $table->string('image')->nullable();
            $table->string('image2')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('new_sliders');
    }
};
