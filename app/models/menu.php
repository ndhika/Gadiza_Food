<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    // Specify the table name if it's different from the plural of the model name
    protected $table = 'menus';

    // Specify the fields that are mass assignable
    protected $fillable = [
        'id_menu',
        'id_card',
        'data_image',
        'nama_image',
        'nama_card',
    ];
}
