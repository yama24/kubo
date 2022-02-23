<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
        ];
        return view('back/dashboard', $data);
    }
    public function posts()
    {
        $data = [
            'title' => 'Posts',
        ];
        return view('back/posts', $data);
    }
}
