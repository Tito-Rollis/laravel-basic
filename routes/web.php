<?php

use Illuminate\Support\Facades\Route;
use App\Models\Blog;

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




Route::get('/', function () {
    return view('home',[
        "page" => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about',[
        "name" => "Tito Rollis",
        "as" => "Web Developer",
        "image" => "foto.png",
        "page" => "About"
    ]);
});
Route::get('/blog', function () {
    
    return view('blogs',[
        "page" => "Blog",
        "blogs" => Blog::getAll(),

    ]);
});

// SINGLE BLOG ROUTE
Route::get("/blogs/{slug}",function($slug){

    return view('blog',[
        "page"=>$slug,
        "blog" => Blog::getSlug($slug)
    ]);    
});
