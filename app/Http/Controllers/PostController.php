<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "All Posts",
            "categories" => Category::all(),
            "posts" => Post::latest()->filter(request(['search-input', 'category', 'author']))->paginate(8)->withQueryString(),
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Detail Post",
            "post" => $post,
            'comments' => $post->comments
        ]);
    }
}
