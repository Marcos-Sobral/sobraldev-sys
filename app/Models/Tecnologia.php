<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tecnologia extends Model
{
    use HasFactory;

        protected $table = "tecnologias"; // Nome da tabela no banco de dados
        protected $primaryKey = "tech_id"; // Nome da chave primária
        protected $fillable = [
            'tech_titulo',
            'tech_img',
            'perfil_id',
        ];

        // Relacionamento com Processo
        public function processos()
        {
            return $this->belongsToMany(Processo::class, 'processo_tecnologia', 'tech_id', 'processo_id');
        }

        public function perfil()
        {
            return $this->belongsTo(Perfil::class, 'perfil_id', 'perfil_id');
        }
}
