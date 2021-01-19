<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post:: orderBy('id', 'DESC')->paginate();
        // $categories  = Category::cursor();
        return view('front.posts.index', compact('posts'));
    }
    public function show(Post $post) {
        return view('front.posts.show', compact('post'));
    }
}