<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;

class BlogController extends Controller
{
    public function index()
    {
        $posts = BlogPost::with('author')
            ->where('is_published', true)
            ->latest('published_at')
            ->paginate(6);

        return view('website.blog.index', compact('posts'));
    }

    public function details()
    {
        $post = BlogPost::with('author')
            ->where('is_published', true)
            ->latest('published_at')
            ->first();

        return view('website.blog.blog-detail', compact('post'));
    }
}
