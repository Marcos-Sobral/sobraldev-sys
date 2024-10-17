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
        Schema::create('experience_users', function (Blueprint $table) {
            $table->id("experience_id");
            $table->string('experience_enterprise')->nullable();
            $table->string('experience_position')->nullable();
            $table->string('experience_photo')->nullable();
            $table->text('experience_description')->nullable();
            $table->string('experience_address')->nullable();
            $table->date('experience_start')->nullable();
            $table->date('experience_end')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experience_users');
    }
};
