<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>{{config('app.name', 'Cube')}}</title>
</head>
<body>

    @include('partials.navbar')

    @include('partials.messages')
    
    <div class="container">
        @yield('content')
    </div>
    
</body>
</html>