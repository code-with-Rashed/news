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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string("logo", 100);
            $table->string("favicon", 100);
            $table->text("privacy_policy");
            $table->text("terms_conditions");
            $table->boolean("shutdown")->default(1)->comment("shutdown 1 means news site is running, and 0 means news site is under maintenance.");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
