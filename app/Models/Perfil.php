<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;

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
        return $this->hasMany(User::class, 'perfil_id', 'perfil_id');
    }
    
}
