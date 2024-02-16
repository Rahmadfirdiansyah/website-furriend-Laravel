<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AboutComponent extends Component
{
    public $isActive = false;
    
    // Render halaman about
    public function render()
    {
        return view('livewire.about-component');
    }
}