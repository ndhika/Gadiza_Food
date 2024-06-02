<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'foto',
        'username',
        'no_telepon',
        'alamat_lengkap',
        'email',
    ];
}
