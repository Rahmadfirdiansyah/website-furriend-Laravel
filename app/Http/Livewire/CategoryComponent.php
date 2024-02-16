<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryComponent extends Component
{
    use WithPagination;
    public $pageSize = 12;
    public $orderBy = "Default Sorting";
    public $slug;
    public $min_value = 0;
    public $max_value = 1000000;

    // Dipanggil saat komponen di-mount dengan slug kategori
    public function mount($slug)
    {
        $this->slug = $slug;
    }
    
    // Fungsi untuk mengubah jumlah produk per halaman
    public function changePageSize($size)
    {
        $this->pageSize = $size;
    }

    // Fungsi untuk mengubah urutan produk
    public function changeOrderBy($order)
    {
        $this->orderBy = $order;
    }

    // Menambahkan produk ke keranjang belanja
    public function store($product_id, $product_name, $product_price)
    {
        // Memeriksa apakah pengguna sudah login
        if (Auth::check()) {
            Cart::instance('cart')->add($product_id, $product_name, 1, $product_price)->associate('\App\Models\Product');
            session()->flash('success_message', 'Item added in cart');
            $this->emitTo('cart-icon-component', 'refreshComponent');
            return redirect()->route('shop.cart');
        } else {
            return redirect()->route('login');
        }
    }

    // Menambahkan produk ke daftar wishlist
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
        // Mendapatkan informasi kategori berdasarkan slug
        $category = Category::where('slug', $this->slug)->first();
        $category_id = $category->id;
        $category_name = $category->name;

        if($this->orderBy == 'Price: Low to High')
        {
            $products = Product::where('category_id', $category_id)->orderBy('regular_price', 'ASC')->paginate($this->pageSize);
        }
        else if($this->orderBy == 'Price: High to Low')
        {
            $products = Product::where('category_id', $category_id)->orderBy('regular_price', 'DESC')->paginate($this->pageSize);
        }
        else if($this->orderBy == 'Release Date')
        {
            $products = Product::where('category_id', $category_id)->orderBy('created_at', 'DESC')->paginate($this->pageSize);
        }
        else{
            $products = Product::where('category_id', $category_id)->paginate($this->pageSize);
        }
        
        $categories = Category::orderBy('name', 'ASC')->get();
        return view('livewire.category-component', ['products'=>$products, 'categories'=>$categories, 'category_name'=>$category_name]);
    }
}