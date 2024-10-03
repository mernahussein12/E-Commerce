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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name_ar');
            $table->string('job_ar')->nullable();
            $table->string('image')->nullable();
            $table->string('address_ar')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->text('summary_ar')->nullable();
            $table->text('spec_ar')->nullable();
            $table->text('exp_ar')->nullable();
            $table->text('skills_ar')->nullable();
            $table->text('education_ar')->nullable();
            $table->string('name_en');
            $table->string('job_en')->nullable();
            $table->string('address_en')->nullable();
            $table->text('summary_en')->nullable();
            $table->text('spec_en')->nullable();
            $table->text('exp_en')->nullable();
            $table->text('skills_en')->nullable();
            $table->text('education_en')->nullable();
            $table->string('pagetitle_ar')->nullable();
            $table->string('pagetitle_en')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
