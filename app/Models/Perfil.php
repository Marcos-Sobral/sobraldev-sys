<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;

    protected $table = "perfil";
    protected $primaryKey = 'perfil_id';

       /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'perfil_nome',
        'perfil_resumo',
        'perfil_img',
        'perfil_email',
        'perfil_orcid',
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'users_perfil_id', 'perfil_id'); //o primeiro é da tabela usuarios e outro é da tabela perfil
    }

    public function tecnologias()
    {
        return $this->hasMany(Tecnologia::class, 'perfil_id', 'perfil_id');
    }

    public function carrosseis()
    {
        return $this->hasMany(Carrossel::class, 'carrossel_perfil_id', 'perfil_id');
    }

    public function projetos()
    {
        return $this->hasMany(Projeto::class, 'pj_perfil_id', 'perfil_id');
    }

    public function projetosCientificos()
    {
        return $this->hasMany(ProjetoCientifico::class, 'perfil_id', 'perfil_id');
    }
    
}
