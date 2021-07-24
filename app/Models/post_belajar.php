<?php

namespace App\Models;

class post
{
    private static $blog_posts = [
        [
            "tittle" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Fawwazi Alamsyah",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
            Hic iusto nihil magnam adipisci distinctio tenetur est? Magnam sequi iste quia voluptatum. 
            Rerum labore eos nisi at modi necessitatibus autem dolores similique facilis quisquam, 
            neque tempore non quis voluptates, aliquam officiis, ab voluptatibus. Nobis at placeat culpa 
            modi obcaecati minus ratione vero architecto, nisi sequi, quam ipsam quo laborum quia quisquam quos 
            eveniet similique. Saepe tempora sit esse inventore, cumque, dolorem adipisci laboriosam 
            animi et doloremque omnis tempore maiores, ipsum velit!"
        ],
        [
            "tittle" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "mamang garoks",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum aliquam reprehenderit impedit, 
            molestiae repellat dolores ipsa nostrum quam tempore totam. Aspernatur est facilis reiciendis labore ducimus, 
            et accusamus delectus, eos culpa, beatae cum enim modi. Sunt quisquam eius in alias fugiat nostrum. Culpa iusto, 
            adipisci blanditiis accusantium voluptatibus aperiam magni? Perferendis provident qui illum earum officiis magni illo. 
            Nulla itaque, porro facere quas id vero soluta rem. Reprehenderit corporis iure, rerum quas, 
            recusandae qui deserunt culpa atque ipsam et repellendus est nihil aperiam eaque pariatur porro illo 
            nemo ipsa autem laboriosam sed. Veniam maxime incidunt doloremque enim ab quae fugiat!"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstwhere('slug', $slug);
    }
}
