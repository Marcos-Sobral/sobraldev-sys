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
        Schema::create('projetos', function (Blueprint $table) {
            $table->id('projeto_id');
            $table->string('projeto_titulo');
            $table->text('projeto_descricao')->nullable();
            $table->string('projeto_img')->nullable();
            $table->timestamps();
            $table->foreignId('pj_perfil_id')->nullable()->constrained('perfil','perfil_id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projetos');
    }
};
