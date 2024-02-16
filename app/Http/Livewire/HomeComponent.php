<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\HomeSlider;
use App\Models\Product;
use Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HomeComponent extends Component
{
    public $isActive = false;
    
    // Menambahkan produk ke keranjang belanja
    public function store($product_id, $product_name, $product_price)
    {
        if (Auth::check()) {
            // Menambahkan produk ke keranjang belanja dan mengirim sinyal untuk menyegarkan komponen ikon keranjang
            Cart::instance('cart')->add($product_id, $product_name, 1, $product_price)->associate('\App\Models\Product');
            session()->flash('success_message', 'Item added in cart');
            $this->emitTo('cart-icon-component', 'refreshComponent');
            return redirect()->route('shop.cart');
        } else {
            return redirect()->route('login');
        }
    }

    public function render()
    {
        // Mengambil slide, produk terbaru, produk unggulan, dan kategori populer untuk ditampilkan di halaman utama
        $slides = HomeSlider::where('status', 1)->get();
        $lproducts = Product::orderBy('created_at', 'DESC')->get()->take(8);
        $fproducts = Product::where('featured', 1)->inRandomOrder()->get()->take(8);
        $pcategories = Category::where('is_popular', 1)->inRandomOrder()->get()->take(8);
        return view('livewire.home-component', ['slides'=>$slides, 'lproducts'=>$lproducts, 'fproducts'=>$fproducts, 'pcategories'=>$pcategories]);
    }
}