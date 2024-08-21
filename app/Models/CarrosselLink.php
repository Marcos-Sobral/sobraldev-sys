<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarrosselLink extends Model
{
    use HasFactory;

    protected $table = "carrossel_links"; // Nome da tabela no banco de dados
    protected $primaryKey = "carrossel_link_id"; // Nome da chave primária
    protected $fillable = [
        'carrossel_link_url',
    ];

    public function carrosselLink(){
        return $this->belongsTo(Carrossel::class,'carrossel_link_id','carrossel_id');
    }
}
