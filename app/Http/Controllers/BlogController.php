<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Post;

class BlogController extends Controller
{
    public function index($num = 1)
    {
        return view('front/blog',[
            'title' => 'All Posts',
            'posts' => Post::orderBy('published_at', 'desc')->paginate(5),
        ]);
    }
}
