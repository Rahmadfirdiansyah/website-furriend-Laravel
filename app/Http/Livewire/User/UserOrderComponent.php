<?php

namespace App\Http\Livewire\User;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserOrderComponent extends Component
{
    public function render()
    {
        // Ambil pesanan berdasarkan ID pengguna yang sedang login dengan paginasi
        $orders = Order::where('user_id', Auth::user()->id)->paginate(12);
        return view('livewire.user.user-order-component', ['orders'=>$orders]);
    }
}