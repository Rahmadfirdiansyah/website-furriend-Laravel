<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Cart;
use Livewire\Component;

class WishlistComponent extends Component
{
    // Menambahkan item dari daftar wishlist ke keranjang belanja
    public function store($product_id, $product_name, $product_price)
    {
        Cart::instance('cart')->add($product_id, $product_name, 1, $product_price)->associate('\App\Models\Product');
        session()->flash('success_message', 'Item added to cart');
        $this->emitTo('cart-icon-component', 'refreshComponent');
        $this->removeFromWishlist($product_id);
        $this->emit('refreshComponent');
    }

    // Menghapus produk dari daftar wishlist
    public function removeFromWishlist($product_id)
    {
        foreach(Cart::instance('wishlist')->content() as $witem)
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
        // Mengambil item dari daftar keinginan dan menambahkan path gambar ke setiap item
        $wishlistItems = Cart::instance('wishlist')->content();
        $wishlistItemsWithImage = $wishlistItems->map(function ($item) {
            $product = Product::find($item->id);
            $item->imagePath = asset('assets/imgs/products/' . $product->image);
            return $item;
        });
        return view('livewire.wishlist-component', ['wishlistItems' => $wishlistItemsWithImage]);
    }
}