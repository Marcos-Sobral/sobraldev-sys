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
        Schema::create('processo_tecnologia', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('processo_id');
            $table->unsignedBigInteger('tech_id');
            $table->timestamps();

            // Define a chave estrangeira para a tabela processos
            $table->foreign('processo_id')->references('processo_id')->on('processos')->onDelete('cascade');
            // Define a chave estrangeira para a tabela tecnologias
            $table->foreign('tech_id')->references('tech_id')->on('tecnologias')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('processo_tecnologia');
    }
};
