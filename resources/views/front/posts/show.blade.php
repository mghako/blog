@extends('layouts.frontlayout')
@section('custom-styles')

@endsection
@section('page-title', 'Post')
@section('content')
    
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center">{{ $post->title }}</h2>
            <hr>
            <div>{!! $post->content !!}</div>
        </div>
    </div>
        
    </div>
@endsection
@push('custom-scripts')


@endpush