<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $table = "experience_users";
    protected $primaryKey = 'experience_id';

    protected $fillable = [
        'experience_enterprise',
        'experience_position',
        'experience_photo',
        'experience_description',
        'experience_address',
        'experience_start',
        'experience_end'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'users_experience_id', 'experience_id');
    }
}
