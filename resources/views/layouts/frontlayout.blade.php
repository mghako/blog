
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('page-title')</title>
    {{-- <link rel="icon" type="image/x-icon" href="https://designreset.com/cork/laravel/ltr/vertical-light-menu/public/storage/img/favicon.ico"/> --}}

    <!-- Styles -->
    <link href="https://designreset.com/cork/laravel/ltr/vertical-light-menu/public/assets/css/loader.css" rel="stylesheet" type="text/css" />
    <script src="https://designreset.com/cork/laravel/ltr/vertical-light-menu/public/assets/js/loader.js"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/scrollspyNav.css') }}">
    <!-- sweet alert 2 -->
    <link rel="stylesheet" href="{{ asset('plugins/animate/animate.css') }}">
    @include('sweetalert::alert', ['cdn' => "{{ asset('plugins/sweetalerts/sweetalert2.min.css') }}"])
    <link rel="stylesheet" href="{{ asset('plugins/sweetalerts/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components/custom-sweetalert.css') }}">

    @yield('custom-styles')

</head>
<body class="">
    
    <!-- BEGIN LOADER -->
    <div id="load_screen"> 
        <div class="loader"> 
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    
    <!--  END NAVBAR  -->

    <!--  BEGIN NAVBAR  -->
    
    <!--  END NAVBAR  -->

    <div class="container">
        <div class="row">
            <div class="col-12">
                {{-- include header --}}
                @include('partials.navbar')

                {{-- include content here --}}
                <div class="row">
                    <div class="col-12 overflow-hidden">
                        @yield('content')
                    </div>
                </div>

                {{-- footer here --}}
                @include('layouts.partials.footer')
            </div>
        </div>
    </div>
    <!--  BEGIN MAIN CONTAINER  -->
    {{-- <div class="main-container" id="container">
        <div class="overlay"></div>
        <div class="search-overlay"></div>
        <div id="content" class="main-content">
            
        </div>
    </div> --}}
    <!-- END MAIN CONTAINER -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                
            </div>
        </div>
    </div>
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('assets/js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{ asset('assets/js/scrollspyNav.js') }}"></script>
    <script src="{{ asset('plugins/highlight/highlight.pack.js') }}"></script>
    <script src="{{ asset('plugins/sweetalerts/promise-polyfill.js') }}"></script>
    
    <script src="{{ asset('plugins/sweetalerts/sweetalert2.min.js')}}"></script>
    
    <script src="{{ asset('plugins/sweetalerts/custom-sweetalert.js')}}"></script>
    
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    @stack('custom-scripts')
</body>
</html>
