<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    use HasFactory;

    protected $table = "projetos"; // Nome da tabela no banco de dados
    protected $primaryKey = "projeto_id"; // Nome da chave primária
    protected $fillable = [
        'projeto_titulo',
        'projeto_descricao',
        'projeto_img',
    ];

    public function perfil(){
        return $this->belongsTo(Perfil::class,'pj_perfil_id','perfil_id');
    }

    public function processo(){
        return $this->hasMany(Processo::class,'pr_projeto_id','projeto_id');
    }

}
