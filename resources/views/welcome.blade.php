<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Code Barrels Tech Blog</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&family=Raleway&family=Ubuntu&display=swap" rel="stylesheet">
        <!-- Bootstrap css cdn -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <!-- custom css -->
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    </head>
    <body id="app">
        
        <h1 class="text-center">Welcome to Blog</h1>
        
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-4">
                    {{-- include navbar for frontend  --}}
                    @include('partials.navbar')
                </div>
            </div>
            <h4>Latest Posts</h4>
            <div class="row">
           
            @foreach($posts as $post)
                <div class="col-md-4">
                    <div class="card mb-4" style="max-height: 400px;">
                        <a href="{{ route('posts.show', $post->id) }}" class="text-reset text-decoration-none">
                            <img src="{!! asset('/storage/'.$post->image_url) !!}" class="img-fluid" alt="">
                            <div class="card-body">
                                <h5 class="card-title heading-font font-16">{{ $post->title }}</h5>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
        
        <!-- bootstrap js cdn -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>
