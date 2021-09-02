<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{{ asset('favicon.ico') }}}">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Porfolio') }}</title>

        <!-- Styles -->
        <link href="{{ url(mix('css/app.css')) }}" rel="stylesheet">
        <link href="{{ url(mix('css/style.css')) }}" rel="stylesheet">
    </head>
    <body class="bg-dark text-white">  
        
        <div id="wrapper" class="d-flex">
            @include('site.partes.sidebar')

            <div id="page-content-wrapper">
                @yield('main')
                @include('site.partes.footer')
            </div>
        </div>
        
        <script src="{{ url(mix('js/bootstrap.blundle.js')) }}"></script>
        <script src="{{ url(mix('js/jquery.js')) }}"></script>
        <script src="{{ url(mix('js/jquery.vide.js')) }}"></script>
        <script src="{{ url(mix('js/main.js'))}}"></script>
    </body>
</html>
