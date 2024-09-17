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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255)->unique(); // Ensure news titles are unique
            $table->text('content'); // Use text for longer content
            $table->string('slug', 255)->unique(); // SEO-friendly URL
            $table->enum('status', ['draft', 'published', 'archived'])->default('draft'); // Status for news
            $table->string('image');
            $table->timestamp('published_at')->nullable(); // Optional publish time
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Cascade delete on related user
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
