<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminEditCategoryComponent extends Component
{
    use WithFileUploads;
    public $category_id;
    public $name;
    public $slug;
    public $image;
    public $is_popular;
    public $newimage;

    // Fungsi untuk inisialisasi data kategori yang akan diubah
    public function mount($category_id)
    {
        $category = Category::find($category_id);
        $this->category_id = $category->id;
        $this->name = $category->name;
        $this->slug = $category->slug;
        $this->image = $category->image;
        $this->is_popular = $category->is_popular;
    }

    // Fungsi untuk menghasilkan slug dari nama kategori baru
    public function generateSlug()
    {
        $this->slug = Str::slug($this->name);
    }
    
    // Fungsi yang dipanggil saat ada perubahan pada properti tertentu
    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required'
        ]);
    }
    
    // Fungsi untuk menyimpan perubahan pada kategori
    public function updateCategory()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required'
        ]);
        $category = Category::find($this->category_id);
        // Update properti kategori dengan nilai yang baru
        $category->name = $this->name;
        $category->slug = $this->slug;
        // Jika ada gambar baru, hapus gambar lama dan simpan yang baru
        if($this->newimage)
        {
            unlink('assets/imgs/categories/'.$category->image);
            $imageName = Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('categories', $imageName);
            $category->image = $imageName;
        }
        $category->is_popular = $this->is_popular;
        $category->save();
        session()->flash('message', 'Category has been updated successfully');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-category-component');
    }
}