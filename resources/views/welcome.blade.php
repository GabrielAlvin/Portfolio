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
    <body class="bg-dark">
        
        <div id="myVideo" class="py-1">
            <div class="container">
                <h1 class="text-white description text-md-center">GABRIEL SOUZA OLIVEIRA</h1>
                <p class="text-white text-md-center">Web developer - Front End - Design</p>
            </div>
        </div>
        
        <script src="{{ url(mix('js/bootstrap.blundle.js')) }}"></script>
        <script src="{{ url(mix('js/jquery.js')) }}"></script>
        <script src="{{ url(mix('js/jquery.vide.js')) }}"></script>

        <script>
            $('#myVideo').vide({
            mp4: "{{ asset('videos/video.mp4') }}"
            }, {
                posterType: "mp4", 
                loop: "true", 
                muted: "false", 
                position: "0% 0%"
            });

        </script>
    </body>
</html>
