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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" />
        <!-- custom css -->
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    </head>
    <body id="app">
        
        <h1 class="text-center">Welcome to Blog</h1>
        <div class="container">
            <div class="row">
            @foreach($posts as $post)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{!! asset('/storage/'.$post->image_url) !!}" class="img-fluid" alt="">
                        <div class="card-body">
                            <h5 class="card-title heading-font font-16">{{ $post->title }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
        <!-- bootstrap js cdn -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.min.js" integrity="sha512-8qmis31OQi6hIRgvkht0s6mCOittjMa9GMqtK9hes5iEQBQE/Ca6yGE5FsW36vyipGoWQswBj/QBm2JR086Rkw==" crossorigin="anonymous"></script>
    </body>
</html>
