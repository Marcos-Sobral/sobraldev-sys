<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Processo extends Model
{
    use HasFactory;

    protected $table = "processos"; // Nome da tabela no banco de dados
    protected $primaryKey = "processo_id"; // Nome da chave primária
    protected $fillable = [
        'processo_titulo',
        'processo_descricao',
        'processo_img',
        'pr_projeto_id',
    ];

    public function projeto(){
        return $this->belongsTo(Projeto::class, 'pr_projeto_id','projeto_id');
    }

    public function processoLink(){
        return $this->hasMany(ProcessoLink::class,'link_processo_id','processo_id');
    }

}
