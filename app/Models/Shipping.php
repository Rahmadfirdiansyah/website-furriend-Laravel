<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    use HasFactory;

    // Tabel yang digunakan untuk model Shipping
    protected $table = "shippings";

    // Relasi dengan model Order: satu pengiriman dimiliki oleh satu pesanan
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}