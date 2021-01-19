@extends('layouts.frontlayout')
@section('page-title', 'Post')

@section('content')
    @foreach($posts as $post)
        <div class="col-xl-4 col-lg-6 col-md-6 mb-4">
            <div class="card b-l-card-1 h-100" style="-webkit-box-shadow: 0 6px 10px 0 rgba(0,0,0,.14), 0 1px 18px 0 rgba(0,0,0,.12), 0 3px 5px -1px rgba(0,0,0,.2); -moz-box-shadow: 0 6px 10px 0 rgba(0,0,0,.14), 0 1px 18px 0 rgba(0,0,0,.12), 0 3px 5px -1px rgba(0,0,0,.2); box-shadow: 0 6px 10px 0 rgba(0,0,0,.14), 0 1px 18px 0 rgba(0,0,0,.12), 0 3px 5px -1px rgba(0,0,0,.2); ">
                <div class="card-header">
                    <img class="card-img-top" src="{{ asset('/storage/'.$post->image_url) }}" alt="Card image cap">
                </div>
                <div class="card-body">
                    <strong class="card-category">{{ $post->category->name }}</strong>
                    <h5 class="card-title mt-2">{{ $post->title }}</h5>
                    <p class="card-text meta-info meta-time mb-2"><small class="">{{ $post->created_at->diffForHumans() }}</small></p>
                    {!! Str::limit($post->content, 50) !!}
                    
                </div>
                <div class="card-footer">
                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-outline-warning mt-2">Read More</a>
                </div>
            </div>
        </div>
    @endforeach

@endsection
