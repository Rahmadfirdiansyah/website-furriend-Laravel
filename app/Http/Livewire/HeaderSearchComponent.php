<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HeaderSearchComponent extends Component
{
    public $q;

    // Fungsi yang dipanggil saat komponen di-mount untuk mengisi nilai pencarian
    public function mount()
    {
        $this->fill(request()->only('q'));
    }
    
    // Menampilkan tampilan komponen pencarian header
    public function render()
    {
        return view('livewire.header-search-component');
    }
}