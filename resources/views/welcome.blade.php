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
    <body class="d-flex h-100 text-center text-white bg-dark">
        
        
        <script src="{{ url(mix('js/bootstrap.blundle.js')) }}"></script>
    </body>
</html>
