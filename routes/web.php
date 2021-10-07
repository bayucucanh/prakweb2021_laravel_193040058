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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Bayu Cucan",
        "email" => "bayucucan@gmail.com",
        "image" => "bayu.JPG"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Bayu Cucan",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia nisi delectus modi repudiandae ipsam, pariatur ab iusto neque quam quo blanditiis sapiente mollitia voluptates commodi maiores ipsum odit distinctio et nemo corrupti quibusdam rem earum. Cumque, culpa. Saepe qui incidunt voluptate excepturi eos, eum nam beatae enim! Culpa, dolorum ipsa id quae illum doloremque ducimus error, voluptatum est hic exercitationem? Ut ea consequatur repudiandae facere ullam. Consequatur perferendis ducimus est minus possimus. Aliquam dolore iure beatae? Corporis voluptatibus eos numquam?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Dinda",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo consequuntur labore praesentium porro nemo! Assumenda ullam ut esse recusandae praesentium officia quisquam, laborum deserunt, perferendis reiciendis nemo, possimus error inventore eligendi veritatis alias libero dolore? Iure, libero. Eaque recusandae itaque nostrum architecto, aperiam in adipisci, quod quos, incidunt laboriosam eum! Nam corporis nemo nobis. Aliquid eius optio earum cupiditate porro veritatis deleniti adipisci nemo animi voluptatum voluptates aut, unde dolore explicabo ipsam dolorum asperiores delectus. Corrupti distinctio neque earum. Earum aspernatur dolores et illo, molestias culpa deserunt pariatur hic fuga, dicta modi! Tempore similique cumque recusandae molestiae voluptatibus, voluptatem vel."
        ]
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


// Halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Bayu Cucan",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia nisi delectus modi repudiandae ipsam, pariatur ab iusto neque quam quo blanditiis sapiente mollitia voluptates commodi maiores ipsum odit distinctio et nemo corrupti quibusdam rem earum. Cumque, culpa. Saepe qui incidunt voluptate excepturi eos, eum nam beatae enim! Culpa, dolorum ipsa id quae illum doloremque ducimus error, voluptatum est hic exercitationem? Ut ea consequatur repudiandae facere ullam. Consequatur perferendis ducimus est minus possimus. Aliquam dolore iure beatae? Corporis voluptatibus eos numquam?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Dinda",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo consequuntur labore praesentium porro nemo! Assumenda ullam ut esse recusandae praesentium officia quisquam, laborum deserunt, perferendis reiciendis nemo, possimus error inventore eligendi veritatis alias libero dolore? Iure, libero. Eaque recusandae itaque nostrum architecto, aperiam in adipisci, quod quos, incidunt laboriosam eum! Nam corporis nemo nobis. Aliquid eius optio earum cupiditate porro veritatis deleniti adipisci nemo animi voluptatum voluptates aut, unde dolore explicabo ipsam dolorum asperiores delectus. Corrupti distinctio neque earum. Earum aspernatur dolores et illo, molestias culpa deserunt pariatur hic fuga, dicta modi! Tempore similique cumque recusandae molestiae voluptatibus, voluptatem vel."
        ]
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
