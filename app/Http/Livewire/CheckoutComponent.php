<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Transaction;
use Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CheckoutComponent extends Component
{
    public $firstname;
    public $lastname;
    public $phone;
    public $email;
    public $address;
    public $province;
    public $city;
    public $zipcode;
    
    public $paymentmode;

    // Fungsi yang dipanggil saat ada perubahan pada field tertentu
    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'firstname' => 'required',
            'lastname' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'address' => 'required',
            'province' => 'required',
            'city' => 'required',
            'zipcode' => 'required',
            'paymentmode' => 'required'
        ]);
    }

    // Fungsi untuk tombol order
    public function placeOrder()
    {
        // Memeriksa apakah pengguna sudah login
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'address' => 'required',
            'province' => 'required',
            'city' => 'required',
            'zipcode' => 'required',
            'paymentmode' => 'required'
        ]);
        // Membuat pesanan baru
        $order = new Order();
        $order->user_id = Auth::user()->id;
        $cleanedSubtotal = intval(str_replace(',', '', session()->get('checkout')['subtotal']));
        $order->subtotal = $cleanedSubtotal;
        $cleanedTotal = intval(str_replace(',', '', session()->get('checkout')['total']));
        $order->total = $cleanedTotal;
        $order->firstname = $this->firstname;
        $order->lastname = $this->lastname;
        $order->phone = $this->phone;
        $order->email = $this->email;
        $order->address = $this->address;
        $order->province = $this->province;
        $order->city = $this->city;
        $order->zipcode = $this->zipcode;
        $order->status = 'ordered';
        $order->save();
        // Menambahkan item pesanan ke dalam tabel OrderItem
        foreach(Cart::instance('cart')->content() as $item)
        {
            $orderItem = new OrderItem();
            $orderItem->product_id = $item->id;
            $orderItem->order_id = $order->id;
            $orderItem->price = $item->price;
            $orderItem->quantity = $item->qty;
            $orderItem->save();
        }
        // Jika metode pembayaran adalah 'cod' (Cash on Delivery)
        if($this->paymentmode == 'cod')
        {
            $transaction = new Transaction();
            $transaction->user_id = Auth::user()->id;
            $transaction->order_id = $order->id;
            $transaction->mode = 'cod';
            $transaction->status = 'pending';
            $transaction->save();
        }

        Cart::instance('cart')->destroy();
        session()->forget('checkout');
        return redirect()->route('home.index');
    }

    public function render()
    {
        return view('livewire.checkout-component');
    }
}