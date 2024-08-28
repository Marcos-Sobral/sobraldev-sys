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
        Schema::table('processos_links', function (Blueprint $table) {
            $table->string('processo_link_nome')->nullable()->after('processo_link_url');
            $table->string('processo_link_class')->default('btn-outline-primary')->after('processo_link_nome'); // Classe de estilo do botão
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('processos_links', function (Blueprint $table) {
            $table->dropColumn('processo_link_nome');
            $table->dropColumn('processo_link_class');
        });
    }
};
