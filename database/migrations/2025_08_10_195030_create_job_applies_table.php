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
        Schema::create('job_applies', function (Blueprint $table) {
            $table->id();
            $table->string('name',255)->nullable();
            $table->string('email',255)->nullable();
            $table->string('mobile',255)->nullable();
            $table->longText('about')->nullable();
            $table->decimal('salary', 10, 2)->nullable();
            $table->string('skills',255)->nullable();
            $table->string('qualifications',50)->nullable();
            $table->string('experience',250)->nullable(); 
            $table->string('address',250)->nullable(); 
            $table->string('status',50)->default('active'); 
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); 
            $table->foreignId('job_id')->constrained('job_posts')->onDelete('cascade'); 
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_applies');
    }
};
