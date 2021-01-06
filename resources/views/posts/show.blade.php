@extends('layouts.dashboard')
@section('custom-styles')
    <link rel="stylesheet" href="{{ asset('assets/css/components/cards/card.css') }}">
@endsection
@section('page-title', 'Create Post')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('posts.store') }}" method="POST">
                            @csrf
                            
                            <div class="form-group">
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text">Category</span>
                                    </div>
                                    <input type="text" name="title" class="form-control" value="{{ $post->category->name }}" aria-label="Category" style="margin-top: 0px; margin-bottom: 0px; height: 56px;">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text">Title</span>
                                    </div>
                                    <input type="text" name="title" class="form-control" value="{{ $post->title }}" aria-label="Title" style="margin-top: 0px; margin-bottom: 0px; height: 56px;">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text">Content</span>
                                    </div>
                                    <textarea class="form-control" aria-label="With textarea" name="content" style="margin-top: 0px; margin-bottom: 0px; height: 56px;">{{ $post->content }}</textarea>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-warning mt-4 float-right">Edit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection