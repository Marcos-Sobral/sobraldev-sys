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
        Schema::create('projetos_cientificos', function (Blueprint $table) {
            $table->id('pj_cientifico_id');
            $table->string('pj_cientifico_titulo');
            $table->text('pj_cientifico_descricao')->nullable();
            $table->string('pj_cientifico_img')->nullable();
            $table->timestamps();
            $table->foreignId('pjc_perfil_id')->nullable()->constrained('perfil','perfil_id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projetos_cientificos');
    }
};
