<?php

namespace App\Http\Livewire;

use App\Models\BlogPost;
use Livewire\Component;

class BlogPostComponent extends Component
{
    public $post;

    // Fungsi untuk menginisialisasi komponen dengan mengambil pos blog berdasarkan slug
    public function mount($slug)
    {
        // Ambil pos blog berdasarkan slug, dan segera gagalkan jika tidak ditemukan
        $this->post = BlogPost::where('slug', $slug)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.blog-post-component', ['post' => $this->post]);
    }
}