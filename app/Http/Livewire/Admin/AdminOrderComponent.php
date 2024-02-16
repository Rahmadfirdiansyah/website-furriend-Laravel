<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AdminOrderComponent extends Component
{
    // Fungsi untuk memperbarui status pesanan
    public function updateOrderStatus($order_id, $status)
    {
        $order = Order::find($order_id);
        $order->status = $status;
        // Jika status adalah "delivered", atur tanggal pengiriman menggunakan fungsi database RAW
        if($status == "delivered") {
            $order->delivered_date = DB::raw('CURRENT_DATE');
        }
        // Jika status adalah "canceled", atur tanggal pembatalan menggunakan fungsi database RAW
        else if($status == "canceled") {
            $order->canceled_date = DB::raw('CURRENT_DATE');
        }
        $order->save();
        session()->flash('order_message', 'Order status has been updated.');
    }

    public function render()
    {
        // Ambil semua pesanan, diurutkan berdasarkan tanggal pembuatan secara descending, dan paginasi dengan jumlah 12 pesanan per halaman
        $orders = Order::orderBy('created_at', 'DESC')->paginate(12);
        return view('livewire.admin.admin-order-component', ['orders'=>$orders]);
    }
}