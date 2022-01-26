<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        return view('front/blog',[
            'title' => 'All Posts',
            'posts' => Post::all()
        ]);
    }
}
