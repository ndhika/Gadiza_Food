<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdminProfile extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nama',
        'username',
        'no_telepon',
        'email',
        'password',
        'alamat_lengkap',
        'photo',
        'slug_link',
        'status_aktif',
    ];

    protected $dates = ['deleted_at'];
}
