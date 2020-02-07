<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Laravel')</title>

   
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('/css/materialize-css/dist/css/materialize.min.css') }}" rel="stylesheet">
</head>
<body>
    
        @include('layouts.header')

        @auth
        @include('layouts.sidenav')

        @endauth
        
        <main>
            @yield('content')
        </main>
    


 <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <script src="{{ asset('/js/jquery/dist/jquery.min.js') }}" ></script>
    <script src="{{ asset('/css/materialize-css/dist/js/materialize.min.js') }}" ></script>
    <script src=" {{asset('/js/app.js')}} "></script>
  
    @yield('custom-page-js')
</body>
</html>
