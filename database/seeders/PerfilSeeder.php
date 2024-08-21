<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('perfil')->insert([
            ['perfil_nome' => 'Desenvolvedor', 'perfil_resumo' => 'Desenvolvedor Full Stack', 'perfil_img' => 'dev_image.jpg', 'perfil_email' => 'dev@example.com', 'created_at' => now(), 'updated_at' => now()],
            ['perfil_nome' => 'Cientista de Dados', 'perfil_resumo' => 'Trabalha com análise de dados e machine learning', 'perfil_img' => 'data_image.jpg', 'perfil_email' => 'data@example.com', 'created_at' => now(), 'updated_at' => now()],
        ]);    
    }
}
