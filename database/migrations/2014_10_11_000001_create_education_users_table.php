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
        Schema::create('education_users', function (Blueprint $table) {
            $table->id("education_id");
            $table->string('education_institution')->nullable();
            $table->string('education_course')->nullable();
            $table->string('education_photo')->nullable();
            $table->string('education_description')->nullable();
            $table->string('education_address')->nullable();
            $table->date('education_start')->nullable();
            $table->date('education_end')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education_users');
    }
};
