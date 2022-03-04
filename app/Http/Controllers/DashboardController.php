<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

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
        $length = ($request->input('length')) ? $request->input('length') : 10;
        $link = '';
        foreach ($url as $key => $value) {
            if ($key != 'page') {
                $link .= '&' . $key . '=' . $value;
            }
        }
        $search = $request->input('search');
        $categoriId = Category::where('name', 'LIKE', '%' . $search . '%')->first();
        $authorId = User::where('name', 'LIKE', '%' . $search . '%')->first();
        $posts = Post::with(['author', 'category'])->orderBy('published_at', 'desc')->orderBy('id', 'desc')
            ->Where('title', 'LIKE', '%' . $search . '%')
            ->orWhere('body', 'LIKE', '%' . $search . '%')
            ->orWhere('category_id', 'LIKE', ($categoriId) ? $categoriId->id : '%%')
            ->orWhere('user_id', 'LIKE', ($authorId) ? $authorId->id : '%%')
            ->paginate($length);
        $data = [
            'title' => 'Posts',
            'posts' => $posts,
            'link' => $link,
            'search' => $search,
            'length' => $length,
        ];
        return view('back/posts', $data);
    }
}
