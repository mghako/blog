<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class CategoryPostController extends Controller
{
    public function index($id) {
        // $posts = $category->posts->paginate();
        $posts = Post::whereCategoryId($id)->paginate();
        return view('front.posts.index', compact('posts'));
    }
}
