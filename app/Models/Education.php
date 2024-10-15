<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $table = "education_users";
    protected $primaryKey = 'education_id';

    protected $fillable = [
        'education_institution',
        'education_course',
        'education_photo',
        'education_description',
        'education_address',
        'education_start',
        'education_end'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'users_education_id', 'education_id');
        //A educação tem apenas um usuario
    }


}
