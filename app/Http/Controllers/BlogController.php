<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        return view('front/blog', [
            'title' => 'All Posts',
            'posts' => Post::orderBy('published_at', 'desc')->orderBy('id', 'desc')->paginate(10),
        ]);
    }
    public function show($slug)
    {
        $data = Post::with(['author', 'category'])->where('slug', $slug)->firstOrFail();
        $prev = Post::where('published_at', '<', $data->published_at)->orderBy('published_at', 'desc')->first();
        $next = Post::where('published_at', '>', $data->published_at)->orderBy('published_at', 'desc')->first();
        return view('front/post', [
            'title' => $data->title,
            'post' => $data,
            'prev' => $prev,
            'next' => $next,
        ]);
    }
}
