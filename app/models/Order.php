<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Order extends Model
{
    protected $fillable = [
        'nama_customer', 'alamat', 'no_telepon', 'tgl_pesan', 'metode_bayar', 'status', 'total_harga'
    ];

    
    use SoftDeletes;

    protected $dates = ['deleted_at'];




    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}

