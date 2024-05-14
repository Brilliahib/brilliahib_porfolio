<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
{
    $post = Post::latest()->get(); 

    return view('blog', [
        "title" => "Blog | Brilliahib",
        "posts" => $post 
    ]);
}
public function show(Post $post)
    {
    // Ambil posting lainnya kecuali posting yang sedang ditampilkan
    $otherPosts = Post::where('id', '!=', $post->id)->orderBy('created_at', 'desc')->take(4)->latest()->get();
    return view('blogdetails', [
        "title" => $post->title,
        "post" => $post,
        "otherPosts" => $otherPosts
    ]);
    }
}
