<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//FRONT PAGE

Route::get('/', function () {
    return view('front/home');
});
Route::get('/about', function () {
    return view('front/about');
});
Route::get('/blog', function () {
    return view('front/blog');
});
Route::get('/blog/slug', function () {
    return view('front/post');
});
Route::get('/category', function () {
    return view('front/category');
});
Route::get('/author', function () {
    return view('front/category');
});
Route::get('/search', function () {
    return view('front/search');
});



//BACK PAGE

Route::get('/dashboard', function () {
    return view('back/dashboard');
});
Route::get('/blog/posts', function () {
    return view('back/posts');
});
Route::get('/blog/categories', function () {
    return view('back/categories');
});