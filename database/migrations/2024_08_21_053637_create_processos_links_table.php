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
            $table->id('processo_link_id');
            $table->string('processo_link_url');
            $table->timestamps();
            $table->foreignId('link_processo_id')->nullable()->constrained('processos','processo_id')->onDelete('cascade');
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
