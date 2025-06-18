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
        Schema::create('job_posts', function (Blueprint $table) {
            $table->id();
            $table->string('title',255)->nullable();
            $table->longText('description')->nullable();
            $table->string('company_name',255)->nullable();
            $table->string('location',255)->nullable();
            $table->string('employment_type',50)->nullable(); // e.g., Full-time, Part-time, Contract
            $table->string('experience_level',250)->nullable(); // e.g., Entry-level, Mid-level, Senior
            $table->string('education_level',250)->nullable(); // e.g., Bsc, Msc, PhD
            $table->decimal('salary', 10, 2)->nullable(); // Salary can be nullable
            $table->string('vacancy', 50)->nullable(); // Number of vacancies available
            $table->date('application_deadline')->nullable(); // Deadline for applications
            $table->string('contact_email',255)->nullable(); // Contact email for applications
            $table->string('status',50)->default('active'); // e.g., active, closed
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key to users table
            $table->string('slug')->unique(); // Unique slug for SEO-friendly URLs
            $table->string('image')->nullable(); // Image for the job post
            $table->string('category', 100)->nullable(); // Category of the job post
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_posts');
    }
};
