<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Ariesta Tegar JR",
        "email" => "ategarjr@email.com",
        "image" => "img/wawa.jpg"
    ]);
});

Route::get('/blog', function () {
    return view('blog', [
        "title" => "Blog",
        "posts" => Post::all()
    ]);
});

Route::get('/posts/{slug}', function ($slug) {
    return view('posts', [
        "title" => "Post",
        "post" => Post::find($slug)
    ]);
});
