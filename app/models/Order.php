<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_customer',
        'pesanan',
        'jumlah_pesanan',
        'total_harga',
        'alamat',
        'metode_pembayaran',
        'status'
    ];
}
