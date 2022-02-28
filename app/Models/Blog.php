<?php

namespace App\Models;



class Blog {
  private static  $BLOG_POSTS = [
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

    public static function getAll(){
        return self::$BLOG_POSTS;
    }

    public static function getSlug($slug){
        foreach(self::$BLOG_POSTS as $blog){
            if($slug === strtolower(join("-",explode(" ",$blog["title"])))){
                return $blog;
            }
        }
    }
}
