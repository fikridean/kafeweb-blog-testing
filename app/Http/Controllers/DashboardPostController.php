<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Schema\PostgresSchemaState;
use Illuminate\Http\Request;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts.index', [
            'posts' => Post::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('dashboard.posts.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => ['required', 'min:3', 'max:50'],
            'slug' => ['required', 'min:3', 'max:255', 'unique:posts'],
            'image' => ['image', 'file', 'max:1024'],
            'category_id' => ['required'],
            'body' => ['required', 'min:10']
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('public_posts');
            $image = $request->file('image');
            $input['imageName'] = $validatedData['image'];
            $destinationPath = public_path('/public_posts');
            $image->move($destinationPath, $input['imageName']);
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body, 70));

        Post::create($validatedData);

        return redirect('/dashboard/posts')->with('success', 'New Post Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('dashboard.posts.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.edit', [
            'post' => $post,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'title' => ['required', 'min:3', 'max:50'],
            'category_id' => ['required'],
            'body' => ['required', 'min:10']

        ];

        if ($post->slug != $request->slug) {
            $rules['slug'] = ['required', 'min:3', 'max:255', 'unique:posts'];
        }

        if ($request->image) {
            $rules['image'] = ['image', 'file', 'max:3072'];
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->file('image')) {
                $validatedData['image'] = $request->file('image')->store('public_posts');
                $image = $request->file('image');
                $input['imageName'] = $validatedData['image'];
                $destinationPath = public_path('/public_posts');
                $image->move($destinationPath, $input['imageName']);
            }
        } else {
            $validatedData['image'] = $post->image;
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body, 70));


        Post::where('id', $post->id)
            ->update($validatedData);

        return redirect('/dashboard/posts')->with('success', 'Post has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Post::destroy($post->id);

        return redirect('/dashboard/posts')->with('success', 'Post has been deleted');
    }

    public function slugify(Request $request)
    {
        $text = $request->title;
        $divider = '-';

        // replace non letter or digits by divider
        $text = preg_replace('~[^\pL\d]+~u', $divider, $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, $divider);

        // remove duplicate divider
        $text = preg_replace('~-+~', $divider, $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        return response()->json(['slug' => $text]);
    }
}
