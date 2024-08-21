<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProcessoLink extends Model
{
    use HasFactory;

    protected $table = "processos_links"; // Nome da tabela no banco de dados
    protected $primaryKey = "processo_link_id"; // Nome da chave primária
    protected $fillable = [
        'processo_link_url',
    ];

    public function processoLink(){
        return $this->hasMany(Processo::class,'link_processo_id','processo_id');
    }
}
