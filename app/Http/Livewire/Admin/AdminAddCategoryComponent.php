<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddCategoryComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $image;
    public $is_popular = 0;
    
    // Fungsi untuk menghasilkan slug berdasarkan nama
    public function generateSlug()
    {
        $this->slug = Str::slug($this->name);
    }
    
    // Validasi field saat diupdate
    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required',
            'image' => 'required'
        ]);
    }

    // Simpan kategori baru
    public function storeCategory()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required',
            'image' => 'required'
        ]);
        // Buat instance kategori baru
        $category = new Category();
        $category->name = $this->name;
        $category->slug = $this->slug;

        // Simpan gambar yang diunggah dengan nama yang memiliki timestamp
        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('categories', $imageName);
        $category->image = $imageName;

        // Setel flag is_popular
        $category->is_popular = $this->is_popular;
        $category->save();
        session()->flash('message', 'Category has been created successfully');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-category-component');
    }
}