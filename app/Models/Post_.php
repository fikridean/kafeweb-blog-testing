<?php

namespace App\Models;

class Post
{
  private static $blog_posts = [
    [
      "title" => "Laskar Pelangi",
      "slug" => "laskar-pelangi",
      "director" => "Riri Riza",
      "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse inventore assumenda, nisi deleniti ab exercitationem similique ut quidem odit vitae debitis quaerat adipisci, in corporis! Harum eligendi, porro, laboriosam maiores, suscipit quidem tempora neque iste dolore non autem laudantium optio veniam! Obcaecati vel nemo excepturi. Obcaecati ea repellat laudantium eligendi?"
    ],
    [
      "title" => "5 cm",
      "slug" => "5-cm",
      "director" => "Rizal Mantovani",
      "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam, nemo inventore. Omnis quos sunt distinctio similique facere? Mollitia, nobis dolorem, accusantium, ullam commodi beatae eligendi nam architecto deleniti vel velit officia perferendis inventore iusto voluptatem? Labore autem libero voluptates recusandae ea ipsam, laborum totam eum aliquam sint at fugiat ducimus rem asperiores quia."
    ]
  ];

  public static function all()
  {
    return collect(self::$blog_posts);
  }

  public static function find($slug)
  {
    $posts = static::all();
    return $posts->firstWhere('slug', $slug);
  }
}
