<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tecnologia extends Model
{
    use HasFactory;

    protected $table = "tecnologias"; // Nome da tabela no banco de dados
    protected $primaryKey = "tech_id"; // Nome da chave primária
    protected $fillable = ['tech_titulo', 'tech_img', 'user_id']; // Campos permitidos para atribuição em massa

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
