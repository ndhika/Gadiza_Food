<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuAdmin extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'title',
        'content',
        'price',
    ];
}
