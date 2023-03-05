<?php

namespace App\Models;


class Post
{
    private static $posts = [
        [
            "title" => "Title-1",
            "slug" => "title-1",
            "author" => "Author-1",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ipsam inventore blanditiis et. Odit voluptatem, velit eos placeat necessitatibus suscipit perspiciatis! Cum earum sapiente perferendis debitis autem nostrum, iure voluptas."
        ],
        [
            "title" => "Title-2",
            "slug" => "title-2",
            "author" => "Author-2",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ipsam inventore blanditiis et. Odit voluptatem, velit eos placeat necessitatibus suscipit perspiciatis! Cum earum sapiente perferendis debitis autem nostrum, iure voluptas."
        ]
    ];

    public static function all() 
    {
        return collect(self::$posts);
    }

    public static function find($slug)
    {
        // $posts = static::all();
        // $certain_post = [];

        // foreach($posts as $post) {
        //     if($post['slug'] === $slug) {
        //         $certain_post = $post;
        //     }
        // }

        // return $certain_post;
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    } 
     
}
