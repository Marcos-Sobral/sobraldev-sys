<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PJCientificoLink extends Model
{
    use HasFactory;

    protected $table = "projetos_cientificos_links"; // Nome da tabela no banco de dados
    protected $primaryKey = "pj_cientificos_link_id"; // Nome da chave primária
    protected $fillable = [
        'pj_cientificos_url',
        'link_projeto_cientifico_id',
    ];

    public function projetoCientifico(){
        return $this->belongsTo(projetoCientifico::class,'link_projeto_cientifico_id','pj_cientifico_id');
    }
}
