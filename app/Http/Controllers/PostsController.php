<?php

namespace App\Http\Controllers;

use App\Post;



class PostsController extends Controller
{
    //
    public function index()
    {
        $posts = Post::all();
        return view('posts.main')->with([
            'posts' => $posts,
        ]);
    }
    public function slug($slug)
    {
        $post = Post::where('slug', '=', $slug)->firstOrFail();

        return view('posts.slug')->with([
            'post' => $post,
        ]);
    }
}
