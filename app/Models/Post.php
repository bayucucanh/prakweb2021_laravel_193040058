<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
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

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
