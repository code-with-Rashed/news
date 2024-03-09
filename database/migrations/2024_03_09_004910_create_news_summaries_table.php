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
        Schema::create('news_summaries', function (Blueprint $table) {
            $table->foreignId('news_id')->constrained('news')->unique();
            $table->integer('total_likes')->default(0);
            $table->integer('total_dislikes')->default(0);
            $table->integer('total_views')->default(0);
            $table->integer('total_comments')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news_summaries');
    }
};
