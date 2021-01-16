@extends('layouts.frontlayout')
@section('custom-styles')
    <link rel="stylesheet" href="{{ asset('assets/css/components/cards/card.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/editors/quill/quill.snow.css') }}">
@endsection
@section('page-title', 'Post')
@section('content')
    <h1>Hello post</h1>
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