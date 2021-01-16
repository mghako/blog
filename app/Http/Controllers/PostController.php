<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::cursor();
        return view('welcome', compact('posts'));
    }
    public function show(Post $post) {
        return view('front.posts.show', compact('post'));
    }
}