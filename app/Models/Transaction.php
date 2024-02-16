<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = "transactions";

    // Relasi dengan model Order: satu transaksi dimiliki oleh satu pesanan
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}