<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BlogComponent extends Component
{
    public $isActive = false;
    
    // Render halaman blog
    public function render()
    {
        return view('livewire.blog-component');
    }
}