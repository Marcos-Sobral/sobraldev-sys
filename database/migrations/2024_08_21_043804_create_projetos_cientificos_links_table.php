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
        Schema::create('projetos_cientificos_links', function (Blueprint $table) {
            $table->id('pj_cientificos_link_id');
            $table->string('pj_cientificos_url');
            $table->timestamps();
            $table->foreignId('link_projeto_cientifico_id')->nullable()->constrained('projetos_cientificos','pj_cientifico_id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projetos_cientificos_links');
    }
};
