<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
 
    public function up(): void
    {
        Schema::create('tecnologias', function (Blueprint $table) { 
            $table->id('tech_id'); 
            $table->string('tech_titulo');
            $table->string('tech_img')->nullable();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Chave estrangeira referenciando a tabela users.
            $table->timestamps(); // Adiciona as colunas created_at e updated_at automaticamente.
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
