<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CodeReset Blog</title>
    {{-- <link rel="icon" type="image/x-icon" href="https://designreset.com/cork/laravel/ltr/vertical-light-menu/public/storage/img/favicon.ico"/> --}}

    <!-- Styles -->
    <link href="https://designreset.com/cork/laravel/ltr/vertical-light-menu/public/assets/css/loader.css" rel="stylesheet" type="text/css" />
    <script src="https://designreset.com/cork/laravel/ltr/vertical-light-menu/public/assets/js/loader.js"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <!-- END GLOBAL MANDATORY STYLES -->
    @yield('login-form2-style')
</head>
<body>
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->
    <div class="main-container" id="container">
        <div class="overlay"></div>
        <div class="search-overlay"></div>
        <div id="content" class="main-content">
            @yield('content')
        </div>
    </div>



    @stack('login-form2-script')
</body>
</html>
