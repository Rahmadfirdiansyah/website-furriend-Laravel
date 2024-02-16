<?php

namespace App\Http\Livewire;

use Livewire\Component;

class WishlistIconComponent extends Component
{
    // Mendengarkan event 'refreshComponent' dan merefresh komponen
    protected $listeners = ['refreshComponent'=>'$refresh'];
    
    // Menampilkan tampilan ikon wishlist
    public function render()
    {
        return view('livewire.wishlist-icon-component');
    }
}