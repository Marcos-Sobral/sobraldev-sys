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
        Schema::create('carrossel_links', function (Blueprint $table) {
            $table->id('carrossel_link_id');
            $table->string('carrossel_link_url');
            $table->string('carrossel_link_nome')->nullable();
            $table->string('carrossel_link_class')->nullable()->default('btn-outline-primary'); 
            $table->timestamps();
            $table->foreignId('Links_carrossel_id')->nullable()->constrained('carrossel','carrossel_id')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carrossel_links');
    }
};


