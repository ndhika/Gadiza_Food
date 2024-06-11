<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id', 'nama_pesanan', 'jumlah_pesanan', 'harga'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
