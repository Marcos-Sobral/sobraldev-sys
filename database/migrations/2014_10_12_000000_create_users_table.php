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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('summary')->nullable();
            $table->string('photo')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->foreignId('users_perfil_id')->nullable()->constrained('perfil','perfil_id')->onDelete('cascade');
            $table->foreignId('users_education_id')->nullable()->constrained('education_users','education_id')->onDelete('cascade');
            $table->boolean('is_admin')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        /*// Remove a chave estrangeira antes de dropar a tabela users
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['users_perfil_id']);
        });
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['users_education_id']);
        });*/
        Schema::dropIfExists('users');
    }
};
