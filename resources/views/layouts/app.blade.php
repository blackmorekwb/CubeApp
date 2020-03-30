<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- to allow resrources to be loaded on https requests -->
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> 

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/anime.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
    <div id="app">
        @include('partials.navbar')

        @if(Route::current()->getName() == 'landingPage')
            <button id="btn-click" class="btn landing-btn">Click Me</button>

            <svg viewBox="0 0 215.46 107.78">
                <polygon class="polymorph" points="216.46,107.78 0,107.78 0,0 21.45,0 216.46,0 "/>
            </svg>

            <div class="blip">
                <h1>Welcome to our community!</h1>
                <p>Why hello there!!</p>

                <button id="btn-click2" class="btn btn-primary landing-btn">Go Back</button>
            </div>
        @endif
        
        <main class="container py-4">
            @include('partials.messages')
            @yield('content')
        </main>

    </div>
</body>
</html>
