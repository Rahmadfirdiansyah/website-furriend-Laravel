<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    // Nama tabel yang digunakan untuk model ini
    protected $table = "order_items";

    // Relasi dengan model Order: satu order item dimiliki oleh satu order
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    // Relasi dengan model Product: satu order item dimiliki oleh satu produk
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}