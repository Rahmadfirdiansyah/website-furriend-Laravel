<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // Nama tabel yang digunakan untuk model ini
    protected $table = "orders";

    // Relasi dengan model User: satu order dimiliki oleh satu user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi dengan model OrderItem: satu order memiliki banyak order item
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    // Relasi dengan model Shipping: satu order memiliki satu shipping
    public function shipping()
    {
        return $this->hasOne(Shipping::class);
    }

    // Relasi dengan model Transaction: satu order memiliki satu transaksi
    public function transaction()
    {
        return $this->hasOne(Transaction::class);
    }
}