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
        return $this->belongsTo(Projeto::class, 'pr_projeto_id', 'projeto_id');
    }


    // Relacionamento com Tecnologia
    public function tecnologias()
    {
        return $this->belongsToMany(Tecnologia::class, 'processo_tecnologia', 'processo_id', 'tech_id');
    }

    
    // Definir o relacionamento com o modelo Link
    public function processoLinks()
    {
        return $this->hasMany(ProcessoLink::class, 'link_processo_id'); // Ajuste 'Link::class' e 'processo_id' conforme suas necessidades
    }
}
