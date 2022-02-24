<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
        ];
        return view('back/dashboard', $data);
    }
    public function posts(Request $request)
    {
        $url = $request->input();
        $link = '';
        foreach ($url as $key => $value) {
            if ($key != 'page') {
                $link .= '&' . $key . '=' . $value;
            }
        }
        $search = $request->input('search');
        $where = [
            ['title', 'like', '%' . $search . '%'],
            ['body', 'like', '%' . $search . '%'],
        ];
        $posts = Post::with(['author', 'category'])->orderBy('published_at', 'desc')->orderBy('id', 'desc')->orWhere($where)->paginate(10);
        $data = [
            'title' => 'Posts',
            'posts' => $posts,
            'link' => $link,
            'search' => $search,
        ];
        return view('back/posts', $data);
    }
}