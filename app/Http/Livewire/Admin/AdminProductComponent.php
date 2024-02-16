<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class AdminProductComponent extends Component
{
    use WithPagination;
    public $product_id;
    
    // Fungsi untuk menghapus produk berdasarkan ID
    public function deleteProduct()
    {
        // Temukan produk berdasarkan ID yang disimpan
        $product = Product::find($this->product_id);
        unlink('assets/imgs/products/'.$product->image);
        $product->delete();
        session()->flash('message', 'Product has been deleted.');
    }

    public function render()
    {
        // Ambil data produk terurut berdasarkan waktu pembuatan dengan paginasi
        $products = Product::orderBy('created_at', 'DESC')->paginate(10);
        return view('livewire.admin.admin-product-component', ['products'=>$products]);
    }
}