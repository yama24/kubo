<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;

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
    return view('front/home', ['title' => 'Home']);
});
Route::get('/about', function () {
    return view('front/about', ['title' => 'About']);
});
Route::get('/blogs/', [BlogController::class, 'index']);
Route::get('/blog/{post:slug}', [BlogController::class, 'show']);
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

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/dashboard/posts', [DashboardController::class, 'posts']);
// Route::get('/blog/posts', function () {
//     return view('back/posts');
// });
// Route::get('/blog/categories', function () {
//     return view('back/categories');
// });
