@extends('layouts.frontlayout')
@section('custom-styles')

@endsection
@section('page-title', 'Post')
@section('content')
    <h2 class="text-center">{!! $post->title !!}</h2>
    <div>{!! $post->content !!}</div>
@endsection
@push('custom-scripts')


@endpush