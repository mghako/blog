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
                                    <select name="category_id" id="" class="form-control selectpicker" style="margin-top: 0px; margin-bottom: 0px; height: 56px;">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text">Title</span>
                                    </div>
                                    <input type="text" name="title" class="form-control" aria-label="Title" style="margin-top: 0px; margin-bottom: 0px; height: 56px;"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text">Content</span>
                                    </div>
                                    <textarea class="form-control" aria-label="With textarea" name="content" style="margin-top: 0px; margin-bottom: 0px; height: 56px;"></textarea>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary mt-4 float-right">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection