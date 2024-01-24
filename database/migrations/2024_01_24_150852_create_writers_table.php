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
            $table->enum("roll", ["admin", "moderator", "writer"]);
            $table->string("photo", "100")->default("user.jpg");
            $table->string("name", "100");
            $table->string("email", "100")->unique();
            $table->integer("writed_news");
            $table->string("password",100);
            $table->enum("status",[0,1])->default(1);
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