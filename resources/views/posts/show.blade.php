@extends('layouts.dashboard')
@section('custom-styles')
    <link rel="stylesheet" href="{{ asset('assets/css/components/cards/card.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/editors/quill/quill.snow.css') }}">
@endsection
@section('page-title', 'Create Post')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mx-auto">
                <div class="card">
                    <div class="card-image">
                        <img src="{!! asset('/storage/'.$post->image_url) !!}" class="img-fluid" alt="">
                    </div>
                    <div class="card-body">
                        <form ID="FormID" action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                
                                <div class="input-group mb-4">
                                    
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Heading Image</span>
                                    </div>
                                    <input type="file" name="image_url" class="form-control" aria-label="Heading Image" accept="image/png, image/jpeg" style="margin-top: 0px; margin-bottom: 0px; height: 56px;">
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text">Category</span>
                                    </div>
                                    <select name="category_id" id="" class="form-control selectpicker" style="margin-top: 0px; margin-bottom: 0px; height: 56px;">
                                        
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" @if($post->category->id == $category->id) selected @endif>{{ $category->name }}</option>
                                    @endforeach
                                    </select>
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
                                <input type="hidden" id="quill_html" name="content">
                                <textarea id="quill-tooltip" class="form-control" name="content" style="display: none;">{!! $post->content ? $post->content : '' !!}</textarea>
                                <div id="quill-content" data-gramm="false" contenteditable="true" data-placeholder="Compose an epic..."> 
                                    {!! $post->content ? $post->content : '' !!}
                                </div> 
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary mt-4 float-right">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('custom-scripts')
<script src="{{ asset('plugins/editors/quill/quill.js')}}"></script>
<script src="{{ asset('plugins/editors/quill/custom-quill.js')}}"></script>
<script>
    
        
         /* quill.on('text-change', function(delta, oldDelta, source) {
            document.getElementById("quill_html").value = quill.root.innerHTML;
        }); */
        
   
</script>

@endpush