<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class SearchComponent extends Component
{
    use WithPagination;
    public $pageSize = 12;
    public $orderBy = "Default Sorting";
    public $min_value = 0;
    public $max_value = 1000000;
    public $q;
    public $search_term;

    // Mengisi query pencarian dan menetapkan nilai awal untuk variabel pencarian
    public function mount()
    {
        $this->fill(request()->only('q'));
        $this->search_term = '%'.$this->q . '%';
    }

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
        // Menampilkan hasil pencarian berdasarkan urutan yang dipilih
        if($this->orderBy == 'Price: Low to High')
        {
            $products = Product::where('name', 'like', $this->search_term)->orderBy('regular_price', 'ASC')->paginate($this->pageSize);
        }
        else if($this->orderBy == 'Price: High to Low')
        {
            $products = Product::where('name', 'like', $this->search_term)->orderBy('regular_price', 'DESC')->paginate($this->pageSize);
        }
        else if($this->orderBy == 'Release Date')
        {
            $products = Product::where('name', 'like', $this->search_term)->orderBy('created_at', 'DESC')->paginate($this->pageSize);
        }
        else{
            $products = Product::where('name', 'like', $this->search_term)->paginate($this->pageSize);
        }

        $categories = Category::orderBy('name', 'ASC')->get();
        return view('livewire.search-component', ['products'=>$products, 'categories'=>$categories]);
    }
}