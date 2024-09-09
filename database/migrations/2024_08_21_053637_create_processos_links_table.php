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
        Schema::create('processos_links', function (Blueprint $table) {
            $table->bigIncrements('processo_link_id'); // ID da tabela processos_links
            $table->string('processo_link_url');
            $table->timestamps();
            
            // Adiciona a coluna de chave estrangeira corretamente
            $table->unsignedBigInteger('link_processo_id');
            $table->foreign('link_processo_id')->references('processo_id')->on('processos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('processos_links');
    }
};
