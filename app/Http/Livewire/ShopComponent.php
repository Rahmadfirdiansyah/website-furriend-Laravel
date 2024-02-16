<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class ShopComponent extends Component
{
    use WithPagination;
    public $isActive = false;
    public $pageSize = 12;
    public $orderBy = "Default Sorting";
    public $min_value = 0;
    public $max_value = 1000000;

    // Mengubah ukuran halaman hasil pencarian
    public function changePageSize($size)
    {
        $this->pageSize = $size;
    }

    // Mengubah urutan hasil pencarian
    public function changeOrderBy($order)
    {
        $this->orderBy = $order;
    }

    // Menambahkan produk ke keranjang belanja
    public function store($product_id, $product_name, $product_price)
    {
        if (Auth::check()) {
            Cart::instance('cart')->add($product_id, $product_name, 1, $product_price)->associate('\App\Models\Product');
            session()->flash('success_message', 'Item added in cart');
            $this->emitTo('cart-icon-component', 'refreshComponent');
            return redirect()->route('shop.cart');
        } else {
            return redirect()->route('login');
        }
    }

    // Menambahkan produk ke daftar wishliist
    public function addToWishlist($product_id, $product_name, $product_price)
    {
        if (Auth::check()) {
            Cart::instance('wishlist')->add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
            $this->emitTo('wishlist-icon-component', 'refreshComponent');
        } else {
            return redirect()->route('login');
        }
    }

    // Menghapus produk dari daftar wishlist
    public function removeFromWishlist($product_id)
    {
        foreach(Cart::instance('wishlist')->content() as $witem);
        {
            if($witem->id==$product_id)
            {
                Cart::instance('wishlist')->remove($witem->rowId);
                $this->emitTo('wishlist-icon-component', 'refreshComponent');
                return;
            }
        }
    }
    
    public function render()
    {
        if($this->orderBy == 'Price: Low to High')
        {
            $products = Product::whereBetween('regular_price', [$this->min_value, $this->max_value])->orderBy('regular_price', 'ASC')->paginate($this->pageSize);
        }
        else if($this->orderBy == 'Price: High to Low')
        {
            $products = Product::whereBetween('regular_price', [$this->min_value, $this->max_value])->orderBy('regular_price', 'DESC')->paginate($this->pageSize);
        }
        else if($this->orderBy == 'Release Date')
        {
            $products = Product::whereBetween('regular_price', [$this->min_value, $this->max_value])->orderBy('created_at', 'DESC')->paginate($this->pageSize);
        }
        else{
            $products = Product::whereBetween('regular_price', [$this->min_value, $this->max_value])->paginate($this->pageSize);
        }
        
        $categories = Category::orderBy('name', 'ASC')->get();
        return view('livewire.shop-component', ['products'=>$products, 'categories'=>$categories]);
    }
}