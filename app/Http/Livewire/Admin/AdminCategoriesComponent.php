<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class AdminCategoriesComponent extends Component
{
    use WithPagination;
    public $category_id;

    // Fungsi untuk menghapus kategori
    public function deleteCategory()
    {
        $category = Category::find($this->category_id);
        unlink('assets/imgs/categories/'.$category->image);
        $category->delete();
        session()->flash('message', 'Category has been deleted successfully.');
    }

    // Render tampilan komponen dengan menyertakan data kategori yang dipaginasi
    public function render()
    {
        $categories = Category::orderBy('name', 'ASC')->paginate(5);
        return view('livewire.admin.admin-categories-component', ['categories'=>$categories]);
    }
}