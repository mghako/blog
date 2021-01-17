<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::cursor();
        $categories  = Category::cursor();
        return view('front.posts.index', compact('posts', 'categories' ));
    }
    public function show(Post $post) {
        return view('front.posts.show', compact('post'));
    }
}