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
        <div id="wrapper" class="d-flex">
             <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="nav flex-column list-menu-style text-center">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre Mim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Trabalhos</a>
                    </li>
                </ul>
            </div>
            <!-- /#sidebar-wrapper -->
        
            <!-- Page Content -->
            <div id="page-content-wrapper">
                <div id="myVideo" class="py-1">
                    <div class="container">
                        <nav class="nav justify-content-end mt-5 fixed-top">
                            <a href="#" id="menu-toggle" class="nav-link link-light"><i id="icon-menu" class="fas fa-align-justify"></i> Menu</a>  
                        </nav>
                        <h1 class="text-white description text-md-center">GABRIEL SOUZA OLIVEIRA</h1>
                        <p class="text-white text-md-center">Web developer - Front End - Design</p>
                    </div>
                </div>

                <div class="container mt-5">
                   <div class="row">
                        <div class="col-md-7">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="container mt-4">
                                        <p>
                                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
    
                                            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                                        </p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                                </div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-md-5">
                            Teste
                        </div>
                   </div>
                </div>
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

            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
                $("#icon-menu").toggleClass("fas fa-align-justify fas fa-align-center")
            });
        </script>
    </body>
</html>
