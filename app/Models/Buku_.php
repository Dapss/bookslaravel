<?php

namespace App\Models;

class Buku
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Mochamad Daffa",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem iure delectus incidunt impedit ratione soluta tempore voluptates corporis omnis fugiat a deleniti, nihil mollitia explicabo consectetur deserunt quod atque dolore reprehenderit eaque quia pariatur sint, voluptatum architecto! Ab ullam cum perferendis provident modi quam neque dolore, error a! Voluptatibus molestiae a ad quam odit, voluptate quas enim et, alias odio natus amet excepturi est fugit fugiat vitae assumenda consectetur! Aperiam veritatis quas, provident ipsum rerum doloremque voluptate amet dolore laudantium."
        ],
    
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Mike Wazowski",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, alias? Cupiditate, maiores voluptatem recusandae officia ducimus harum quo vero aliquam odio maxime dolores magni aspernatur sequi modi quas neque ut laborum velit nisi! Deleniti quisquam praesentium iure natus, odio cupiditate placeat aut, at amet, vel ex eveniet dolor aspernatur? Expedita fuga sapiente blanditiis, hic non itaque quos corporis doloremque perferendis? Aliquid fugit soluta, aliquam voluptate sunt ratione, exercitationem assumenda repellat quibusdam ex qui corrupti nemo itaque debitis! Facilis, culpa corporis fuga inventore nulla consequatur aliquid doloremque id corrupti laborum similique magni suscipit? Suscipit incidunt placeat, nisi sapiente animi at error modi aliquam quibusdam, atque minima perferendis perspiciatis dolorum. In sequi, reprehenderit dolor nisi quia dolore quaerat saepe hic architecto itaque illum odit modi harum natus iste temporibus repellat, optio obcaecati veritatis voluptas voluptates ullam, non laboriosam! Accusantium exercitationem vel aut nobis? Quo magni quia debitis dolores laudantium hic esse sit."
        ]
    ];
    
    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts -> firstWhere('slug', $slug);
    }
}
