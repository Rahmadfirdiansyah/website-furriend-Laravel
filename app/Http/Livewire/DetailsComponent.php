<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DetailsComponent extends Component
{
    public $slug;
    public $quantity = 1;

    // Fungsi yang dipanggil saat komponen di-mount dengan menerima slug produk
    public function mount($slug)
    {
        $this->slug = $slug;
    }

    // Fungsi untuk menambah jumlah produk
    public function increaseQuantity()
    {
        $this->quantity++;
    }

    // Fungsi untuk mengurangi jumlah produk, tidak kurang dari 1
    public function decreaseQuantity()
    {
        if ($this->quantity > 1) {
            $this->quantity--;
        }
    }

    // Fungsi untuk menyimpan produk ke keranjang belanja
    public function store($product_id, $product_name, $product_price)
    {
        if (Auth::check()) {
            Cart::instance('cart')->add($product_id, $product_name, $this->quantity, $product_price)->associate('\App\Models\Product');
            session()->flash('success_message', 'Item added to cart');
            $this->emitTo('cart-icon-component', 'refreshComponent');
            return redirect()->route('shop.cart');
        } else {
            return redirect()->route('login');
        }
    }

    // Menampilkan tampilan komponen detail produk
    public function render()
    {
        $product = Product::where('slug', $this->slug)->first();
        $category = Category::find($product->category_id);
        $rproducts = Product::where('category_id', $product->category_id)->inRandomOrder()->limit(4)->get();
        $nproducts = Product::latest()->take(4)->get();
        $categories = Category::orderBy('name', 'ASC')->get();
        return view('livewire.details-component', ['product'=>$product, 'category' => $category, 'rproducts'=>$rproducts, 'nproducts'=>$nproducts, 'categories'=>$categories]);
    }
}