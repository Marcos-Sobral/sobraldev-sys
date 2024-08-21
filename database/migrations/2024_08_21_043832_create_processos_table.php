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
        Schema::create('processos', function (Blueprint $table) {
            $table->id('processo_id');
            $table->string('processo_titulo');
            $table->text('processo_descricao')->nullable();
            $table->string('processo_img')->nullable();
            $table->timestamps();
            $table->foreignId('pr_projeto_id')->nullable()->constrained('projetos','projeto_id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('processos');
    }
};
