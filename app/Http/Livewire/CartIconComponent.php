<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartIconComponent extends Component
{
    // Mendengarkan event 'refreshComponent' dan merefresh komponen
    protected $listeners = ['refreshComponent'=>'$refresh'];

    // Fungsi untuk menampilkan tampilan ikon keranjang
    public function render()
    {
        return view('livewire.cart-icon-component');
    }
}