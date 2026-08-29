<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("home", ["title" => "Home"]);
});

Route::get("/about", function () {
    return view("about", ["title" => "About", "name" => "Laravel Hebat"]);
});

Route::get("/posts", function () {
    return view("posts", [
        "title" => "Blog",
        "posts" => [
            [
                "id" => 1,
                "slug" => "judul-artikel-1",
                "title" => "Judul Artikel 1",
                "author" => "Fauzian Ahmad P",
                "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae harum accusamus voluptatem accusantium illo maiores numquam quos, dignissimos quaerat, dolor vel dolore quasi omnis, vitae dicta placeat. Quas, animi similique."
            ],
            [
                "id" => 2,
                "slug" => "judul-artikel-2",
                "title" => "Judul Artikel 2",
                "author" => "Pandu Prasetyo",
                "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta reprehenderit, expedita aliquid beatae exercitationem debitis possimus alias delectus! Nam nostrum blanditiis architecto vitae, tempora, nesciunt maxime labore iusto aut fugit obcaecati? Repudiandae recusandae quibusdam veniam molestias, natus et aliquam distinctio!"
            ],
            [
                "id" => 3,
                "slug" => "judul-artikel-3",
                "title" => "Judul Artikel 3",
                "author" => "Nicklas Fahri Zaidan",
                "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic sunt, quasi voluptates ab repellendus quis iusto rerum odio consequuntur corrupti dolorem exercitationem eaque voluptate, quaerat vel provident atque! Voluptates, similique?"
            ],
        ],
    ]);
});

Route::get("/posts/{slug}", function ($slug) {
    $posts = [
        [
            "id" => 1,
            "slug" => "judul-artikel-1",
            "title" => "Judul Artikel 1",
            "author" => "Fauzian Ahmad P",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae harum accusamus voluptatem accusantium illo maiores numquam quos, dignissimos quaerat, dolor vel dolore quasi omnis, vitae dicta placeat. Quas, animi similique."
        ],
        [
            "id" => 2,
            "slug" => "judul-artikel-2",
            "title" => "Judul Artikel 2",
            "author" => "Pandu Prasetyo",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta reprehenderit, expedita aliquid beatae exercitationem debitis possimus alias delectus! Nam nostrum blanditiis architecto vitae, tempora, nesciunt maxime labore iusto aut fugit obcaecati? Repudiandae recusandae quibusdam veniam molestias, natus et aliquam distinctio!"
        ],
        [
            "id" => 3,
            "slug" => "judul-artikel-3",
            "title" => "Judul Artikel 3",
            "author" => "Nicklas Fahri Zaidan",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic sunt, quasi voluptates ab repellendus quis iusto rerum odio consequuntur corrupti dolorem exercitationem eaque voluptate, quaerat vel provident atque! Voluptates, similique?"
        ],
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post["slug"] == $slug;
    });

    return view("post", ["title" => "Single Post", "post" => $post]);
});

Route::get("/contact", function () {
    return view("contact", ["title" => "Contact"]);
});