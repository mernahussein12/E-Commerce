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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('name_ar')->nullable();
            $table->string('name_en')->nullable();
            $table->string('image')->nullable();
            $table->text('body_ar')->nullable();
            $table->text('title_en')->nullable();
            $table->text('body_en')->nullable();
            $table->text('title_ar')->nullable();
            $table->string('pagetitle_ar')->nullable();
            $table->string('pagetitle_en')->nullable();
            $table->foreignId('category_id')->constrained('category_blogs');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
