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
        Schema::table('projetos_cientificos_links', function (Blueprint $table) {
            // Adicionando novas colunas à tabela existente
            $table->string('pj_cientificos_link_nome')->nullable()->after('pj_cientificos_url');
            $table->string('pj_cientificos_link_class')->nullable()->default('btn-outline-primary')->after('pj_cientificos_link_nome');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projetos_cientificos_links', function (Blueprint $table) {
            $table->dropColumn('pj_cientificos_link_nome');
            $table->dropColumn('pj_cientificos_link_class');
        });
    }
};
