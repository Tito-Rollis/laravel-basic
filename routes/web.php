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
    $BLOG_POSTS = [
        [
            "title" => "Blog 1",
            "by"=> "Admin 1",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni quidem nihil quaerat soluta sapiente explicabo eius pariatur ducimus esse, accusantium quis ea earum molestias nemo ipsa repellat debitis harum quos tempore omnis aspernatur dolor. Perspiciatis cum ipsam unde inventore placeat temporibus sit deserunt odio corporis at. Dolorum quae quaerat facere eveniet ea quod. Culpa quod odio ab est consequatur voluptatibus doloribus, nobis veniam eos quas eaque dignissimos in deserunt iusto et fuga maiores, provident repudiandae earum obcaecati? Eos, sapiente omnis."
        ],
        [
            "title" => "Blog 2",
            "by" => "Admin 2",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni quidem nihil quaerat soluta sapiente explicabo eius pariatur ducimus esse, accusantium quis ea earum molestias nemo ipsa repellat debitis harum quos tempore omnis aspernatur dolor. Perspiciatis cum ipsam unde inventore placeat temporibus sit deserunt odio corporis at. Dolorum quae quaerat facere eveniet ea quod. Culpa quod odio ab est consequatur voluptatibus doloribus, nobis veniam eos quas eaque dignissimos in deserunt iusto et fuga maiores, provident repudiandae earum obcaecati? Eos, sapiente omnis."
        ],
        [
            "title" => "Blog 3",
            "by" => "Admin 3",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni quidem nihil quaerat soluta sapiente explicabo eius pariatur ducimus esse, accusantium quis ea earum molestias nemo ipsa repellat debitis harum quos tempore omnis aspernatur dolor. Perspiciatis cum ipsam unde inventore placeat temporibus sit deserunt odio corporis at. Dolorum quae quaerat facere eveniet ea quod. Culpa quod odio ab est consequatur voluptatibus doloribus, nobis veniam eos quas eaque dignissimos in deserunt iusto et fuga maiores, provident repudiandae earum obcaecati? Eos, sapiente omnis."
        ]
        ];
    return view('blogs',[
        "page" => "Blog",
        "blogs" => $BLOG_POSTS

    ]);
});

// SINGLE BLOG ROUTE
Route::get("/blogs/{slug}",function($slug){
    $BLOG_POSTS = [
        [
            "title" => "Blog 1",
            "by"=> "Admin 1",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni quidem nihil quaerat soluta sapiente explicabo eius pariatur ducimus esse, accusantium quis ea earum molestias nemo ipsa repellat debitis harum quos tempore omnis aspernatur dolor. Perspiciatis cum ipsam unde inventore placeat temporibus sit deserunt odio corporis at. Dolorum quae quaerat facere eveniet ea quod. Culpa quod odio ab est consequatur voluptatibus doloribus, nobis veniam eos quas eaque dignissimos in deserunt iusto et fuga maiores, provident repudiandae earum obcaecati? Eos, sapiente omnis."
        ],
        [
            "title" => "Blog 2",
            "by" => "Admin 2",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni quidem nihil quaerat soluta sapiente explicabo eius pariatur ducimus esse, accusantium quis ea earum molestias nemo ipsa repellat debitis harum quos tempore omnis aspernatur dolor. Perspiciatis cum ipsam unde inventore placeat temporibus sit deserunt odio corporis at. Dolorum quae quaerat facere eveniet ea quod. Culpa quod odio ab est consequatur voluptatibus doloribus, nobis veniam eos quas eaque dignissimos in deserunt iusto et fuga maiores, provident repudiandae earum obcaecati? Eos, sapiente omnis."
        ],
        [
            "title" => "Blog 3",
            "by" => "Admin 3",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni quidem nihil quaerat soluta sapiente explicabo eius pariatur ducimus esse, accusantium quis ea earum molestias nemo ipsa repellat debitis harum quos tempore omnis aspernatur dolor. Perspiciatis cum ipsam unde inventore placeat temporibus sit deserunt odio corporis at. Dolorum quae quaerat facere eveniet ea quod. Culpa quod odio ab est consequatur voluptatibus doloribus, nobis veniam eos quas eaque dignissimos in deserunt iusto et fuga maiores, provident repudiandae earum obcaecati? Eos, sapiente omnis."
        ]
        ];

    $pickedBlog = [];
    foreach($BLOG_POSTS as $blog){
        if($slug === strtolower(join("-",explode(" ",$blog["title"])))){
            $pickedBlog = $blog;
        }
    }

    return view('blog',[
        "page"=>$slug,
        "blog" => $pickedBlog
    ]);    
});
