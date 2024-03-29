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
        Schema::create('writers', function (Blueprint $table) {
            $table->id();
            $table->enum("role", ["admin", "moderator", "writer"]);
            $table->string("photo", "100")->default("user.jpg");
            $table->string("name", "100");
            $table->string("email", "100")->unique();
            $table->string("password",100);
            $table->boolean('status')->default(1)->comment("status 1 means writer is active, and 0 means writer is not active.");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('writers');
    }
};
