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
        Schema::create('tecnologias', function (Blueprint $table) {
            $table->id('tech_id');
            $table->string('tech_titulo');
            $table->string('tech_img')->nullable();
            $table->timestamps();
            $table->foreignId('perfil_id')->constrained('perfil', 'perfil_id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tecnologias');
    }
};
