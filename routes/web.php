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
    $posts = [
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

    return view('blog', [
        "title" => "Blog",
        "posts" => $posts
    ]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            "title" => "Title-1",
            "slug" => "title-1",
            "author" => "Author-1",
            "content" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum, debitis nemo. Dicta rem ea temporibus sunt hic. Nemo est, eius saepe harum nesciunt voluptate dolorum impedit cum aut neque ullam ratione, atque rerum, nisi voluptatum obcaecati magni? Corporis eum, numquam doloribus alias corrupti facere unde, esse atque exercitationem, et inventore! Deserunt nemo veritatis obcaecati modi ex, pariatur, assumenda facere inventore aspernatur accusamus quasi nobis quae minima, aut non. Recusandae reiciendis incidunt velit modi ab repellat, natus laudantium? Culpa, possimus? Est modi id excepturi, ullam doloribus consectetur culpa sapiente inventore, odit quibusdam voluptate aperiam saepe tenetur ut ipsum porro repellat perspiciatis."
        ],
        [
            "title" => "Title-2",
            "slug" => "title-2",
            "author" => "Author-2",
            "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae quia eum, molestiae dolorem necessitatibus voluptatum molestias culpa, excepturi veritatis quasi aspernatur nulla deleniti reiciendis. Dolor alias consectetur voluptas aperiam explicabo sunt, rem pariatur fuga laboriosam cupiditate neque ipsa necessitatibus animi modi commodi, molestias asperiores! Perspiciatis hic tenetur corporis eveniet? Sunt, expedita recusandae perferendis tenetur animi nulla nam dolorem laudantium aliquam esse ducimus modi asperiores aliquid accusantium magnam quos ad. Quia doloremque adipisci sint! Iste quae nesciunt itaque laborum amet unde quos atque ratione harum ducimus adipisci non sapiente, iure, mollitia, quasi sed repellat eaque qui vero et dolorem earum inventore temporibus voluptates! Ut facilis ullam quibusdam in illo, repellendus deserunt delectus nemo, ipsum voluptate numquam vel ratione sed blanditiis rem odit id magnam soluta vero consequuntur. Deleniti impedit pariatur voluptatibus, quam dicta cum odio accusamus modi est, asperiores praesentium ea aut? Est, tempora voluptas! Laborum quod repudiandae maxime totam laudantium?"
        ]
    ];

    $current_post = [];
    foreach($posts as $post) {
        if($post['slug'] === $slug) {
            $current_post = $post;
        }
    }

    return view('posts', [
        "title" => "Post",
        "post" => $current_post
    ]);
});
