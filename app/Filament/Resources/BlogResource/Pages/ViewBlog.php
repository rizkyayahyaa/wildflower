<?php

namespace App\Filament\Resources\BlogResource\Pages;

use App\Models\Blog;
use App\Filament\Resources\BlogResource;

use Filament\Pages\Actions;
use Filament\Resources\Pages\Page;
use Illuminate\Contracts\View\View;

class ViewBlog extends Page
{
    protected static string $resource = BlogResource::class;

    public $blog; // Menyimpan data blog yang akan ditampilkan

    // Override render method
    public function render(): View
    {
        // Menyimpan blog yang ditemukan berdasarkan id di URL
        $this->blog = Blog::findOrFail($this->record->id);

        // Mengembalikan tampilan dengan data blog
        return view('filament.resources.blogs.pages.view', [
            'blog' => $this->blog,
        ]);
    }
}

