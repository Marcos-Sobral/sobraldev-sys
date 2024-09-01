<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjetoCientifico extends Model
{
    use HasFactory;
    protected $table = "projetos_cientificos"; // Nome da tabela no banco de dados
    protected $primaryKey = "pj_cientifico_id"; // Nome da chave primária
    protected $fillable = [
        'pj_cientifico_titulo',
        'pj_cientifico_descricao',
        'pj_cientifico_img',
        'pjc_perfil_id',
    ];

    public function perfil(){
        return $this->belongsTo(Perfil::class,'pjc_perfil_id','perfil_id');
    }

    public function projetoCientificoLink(){
        return $this->hasMany(PJCientificoLink::class,'link_projeto_cientifico_id','pj_cientifico_id');
    }
}
