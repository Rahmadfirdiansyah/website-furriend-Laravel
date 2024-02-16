<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;

    // Daftar kolom yang dapat diisi
    protected $fillable = [
        'slug',
        'title',
        'author',
        'content',
        'post_date'
    ];
}