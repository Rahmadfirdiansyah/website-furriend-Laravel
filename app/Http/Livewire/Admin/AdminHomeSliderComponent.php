<?php

namespace App\Http\Livewire\Admin;

use App\Models\HomeSlider;
use Livewire\Component;

class AdminHomeSliderComponent extends Component
{
    public $slide_id;
    
    // Fungsi untuk menghapus slide
    public function deleteSlide()
    {
        // Temukan slide berdasarkan ID
        $slide = HomeSlider::find($this->slide_id);
        unlink('assets/imgs/slider/'.$slide->image);
        $slide->delete();
        session()->flash('message', 'Slide has been deleted.');
    }

    public function render()
    {
        // Ambil semua slide, diurutkan berdasarkan tanggal pembuatan secara descending
        $slides = HomeSlider::orderBy('created_at', 'DESC')->get();
        return view('livewire.admin.admin-home-slider-component', ['slides'=>$slides]);
    }
}