<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrossel extends Model
{
    use HasFactory;

    protected $primaryKey = 'carrossel_id';

       /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'carrossel_titulo',
        'carrossel_descricao',
        'carrossel_img',
        'carrossel_perfil_id',
    ];

    public function perfil(){
        return $this->belongsTo(Perfil::class, 'carrossel_perfil_id','perfil_id');
    }

    public function carrosselLink(){
        return $this->hasMany(CarrosselLink::class, 'Links_carrossel_id','carrossel_id');
    }
}
