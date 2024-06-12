<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class OrderItem extends Model
{
    protected $fillable = [
        'order_id', 'nama_pesanan', 'jumlah_pesanan'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

    use SoftDeletes;

    protected $dates = ['deleted_at'];
}

