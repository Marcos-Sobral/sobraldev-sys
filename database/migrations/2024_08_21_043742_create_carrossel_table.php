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
        Schema::create('carrossel', function (Blueprint $table) {
            $table->id('carrossel_id');
            $table->string('carrossel_titulo');
            $table->text('carrossel_descricao')->nullable();
            $table->string('carrossel_img')->nullable();
            $table->timestamps();
            $table->foreignId('carrossel_perfil_id')->nullable()->constrained('perfil','perfil_id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carrossel');
    }
};
