<?php

namespace App\Http\Livewire\Admin;

use App\Models\HomeSlider;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddHomeSlideComponent extends Component
{
    use WithFileUploads;
    public $top_title;
    public $title;
    public $sub_title;
    public $offer;
    public $link;
    public $status = 1;
    public $image;

    // Fungsi untuk menambahkan slide baru
    public function addSlide()
    {
        $this->validate([
            'top_title' => 'required',
            'title' => 'required',
            'sub_title' => 'required',
            'offer' => 'required',
            'link' => 'required',
            'status' => 'required',
            'image' => 'required'
        ]);
        // Buat instance baru dari model HomeSlider
        $slide = new HomeSlider();
        $slide->top_title = $this->top_title;
        $slide->title = $this->title;
        $slide->sub_title = $this->sub_title;
        $slide->offer = $this->offer;
        $slide->link = $this->link;
        $slide->status = $this->status;

        // Simpan gambar yang diunggah dengan nama yang memiliki timestamp
        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('slider', $imageName);
        $slide->image = $imageName;
        $slide->save();
        session()->flash('message', 'Slide has been added.');
    }

    // Inisialisasi nilai default untuk status saat komponen dimuat
    public function mount()
    {
        $this->status = 1;
    }

    public function render()
    {
        return view('livewire.admin.admin-add-home-slide-component');
    }
}