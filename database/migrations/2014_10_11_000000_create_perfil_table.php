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
        Schema::create('perfil', function (Blueprint $table) {
            $table->id("perfil_id");
            $table->string("perfil_nome");
            $table->string("perfil_resumo")->nullable();
            $table->string("perfil_img")->nullable();
            $table->string("perfil_email")->nullable();
            $table->string("perfil_orcid")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perfil');
    }
};
