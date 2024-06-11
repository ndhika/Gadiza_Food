<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_customer', 'no_telepon', 'alamat', 'total_harga', 'status', 'pembayaran', 'tanggal_pemesanan'
    ];

    public function order_items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
