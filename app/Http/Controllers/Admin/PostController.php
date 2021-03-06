<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Requests\storePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.posts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::cursor();
        return view('admin.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storePostRequest $request)
    {
        try {
            $category = Category::findOrFail($request->category_id);
            $post = $category->posts()->create($request->all());

            if($request->hasFile('image_url')) {
                // store image
                $image_name = $request->file('image_url')->getClientOriginalName();
                // this code return true value --- so dont confuse why i used twice xD;
                $createdDirectory = Storage::makeDirectory('/public/img/post/' . $post->id);
                
                // directed created
                if($createdDirectory) {
                    
                    $path =$request->file('image_url')->storeAs('/img/post/' . $post->id, $request->file('image_url')->getClientOriginalName(), 'public');
                    $post->image_url = $path;
                    $post->save();
                }
            }
            
            return redirect()->route('admin.posts.index');

        } catch (\Throwable $th) {

            DB::rollBack();
            return redirect()->route('admin.posts.index');

        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $categories = Category::cursor();
        return view('admin.posts.show', compact('post', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        
        try {
            $post->update($request->all());

            if($request->hasFile('image_url')) {
                // store image
                $image_name = $request->file('image_url')->getClientOriginalName();
                // this code return true value --- so dont confuse why i used twice xD;
                $createdDirectory = Storage::makeDirectory('/public/img/post/' . $post->id);
                
                // directed created
                if($createdDirectory) {
                    
                    $path =$request->file('image_url')->storeAs('/img/post/' . $post->id, $request->file('image_url')->getClientOriginalName(), 'public');
                    $post->image_url = $path;
                    $post->save();
                }
            }
            DB::commit();
            return redirect()->route('admin.posts.index');

        } catch (\Throwable $th) {

            DB::rollBack();
            return redirect()->route('admin.posts.index');

        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.posts.index')->withSuccess('POST Deleted!');
    }
    public function datatable(Request $request) {
        
        if ($request->ajax()) {
            $data = Post::latest()->get();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        return "<a href='/admin/posts/$row->id' class='edit btn btn-primary btn-sm'><i class='fas fa-eye'></i> View</a>";
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
      
        return view('users');
    }
}
