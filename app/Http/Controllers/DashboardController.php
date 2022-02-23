<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
        ];
        return view('back/dashboard', $data);
    }
    public function postData()
    {
        return DataTables::of(Post::query()->with(['author', 'category']))        
            ->addColumn('title', function ($post) {
                return "<em>$post->title</em>";
            })
            ->addColumn('body', function ($post) {
                return \Illuminate\Support\Str::limit($post->body, 100, '...');
            })
            ->addColumn('image', function ($post) {
                return "<img src=\"$post->image\" class=\"img-thumbnail\" alt=\"Hero Image\">";
            })
            ->addColumn('category_link', function ($post) {
                return "<a href=\"#\"><span class=\"badge badge-warning\">" . $post->category->name . "</span></a>";
            })
            ->addColumn('tag', function ($post) {
                return $post->category->name;
            })
            ->addColumn('author_link', function ($post) {
                return "<a href=\"#\"><span class=\"badge badge-danger\">" . $post->author->name . "</span></a>";
            })
            ->addColumn('created_at', function ($post) {
                return $post->created_at->format('d F Y H:i');
            })
            ->addColumn('updated_at', function ($post) {
                return $post->updated_at->format('d F Y H:i');
            })
            ->addColumn('action', function ($post) {
                return "cek";
            })
            ->rawColumns(['title', 'image', 'category_link', 'author_link', 'action'])
            ->addIndexColumn()
            ->make(true);
    }
    public function posts()
    {
        $data = [
            'title' => 'Posts',
        ];
        return view('back/posts', $data);
    }
}
