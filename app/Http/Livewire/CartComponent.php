<?php

namespace App\Http\Livewire;

use Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CartComponent extends Component
{
    // Fungsi untuk menambah jumlah produk dalam keranjang
    public function increaseQuantity($rowId)
    {
        // Dapatkan produk dari keranjang berdasarkan ID baris
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty + 1;
        Cart::instance('cart')->update($rowId, $qty);
        $this->emitTo('cart-icon-component', 'refreshComponent');
    }

    // Fungsi untuk mengurangi jumlah produk dalam keranjang
    public function decreaseQuantity($rowId)
    {
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty - 1;
        Cart::instance('cart')->update($rowId, $qty);
        $this->emitTo('cart-icon-component', 'refreshComponent');
    }

    // Fungsi untuk menghapus produk dari keranjang
    public function destroy($id)
    {
        Cart::instance('cart')->remove($id);
        $this->emitTo('cart-icon-component', 'refreshComponent');
        session()->flash('success_message', 'Item has been removed');
    }

    // Fungsi untuk membersihkan semua produk dari keranjang
    public function clearAll()
    {
        Cart::instance('cart')->destroy();
        $this->emitTo('cart-icon-component', 'refreshComponent');
    }

    // Fungsi untuk mengarahkan pengguna ke halaman checkout
    public function checkout()
    {
        // Periksa apakah pengguna sudah login
        if(Auth::check()) {
            return redirect()->route('shop.checkout');
        } else {
            return redirect()->route('login');
        }
    }

    // Fungsi untuk menetapkan jumlah untuk proses checkout
    public function setAmountForCheckout()
    {
        // Simpan jumlah subtotal dan total ke dalam sesi untuk digunakan pada halaman checkout
        session()->put('checkout', [
            'subtotal' => Cart::instance('cart')->subtotal(),
            'total' => Cart::instance('cart')->total()
        ]);
    }

    public function render()
    {
        $this->setAmountForCheckout();
        return view('livewire.cart-component');
    }
}