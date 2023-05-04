<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pen & Paper</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/css/landing.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

</head>

<header>
    <div class="bg">
        <nav class="navbar navbar-expand-lg ">
            <!-- Container wrapper -->
            <div class="container">
                <!-- Navbar brand -->
                <a class="navbar-brand me-2" href="https://mdbgo.com/">
                    <img src={{ asset('assets/media/logo-p.png')}} height="30" alt="MDB Logo" loading="lazy" style="margin-top: -1px;" />
                </a>

                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                    data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse" id="navbarButtonsExample">
                    <!-- Left links -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#"
                                style="font-family:Pixel; font-size: 25px; color: #1E2749;">PEN
                                & PIXEL</a>
                        </li>

                        
                    </ul>
                    <!-- Left links -->

                    @if (Route::has('login'))
                        <div class="d-flex align-items-center">
                            @auth
                                <a href="{{ url('/dashboard') }}" type="button"
                                    class="btn btn-primary me-2 text-decoration-none" style="font-family:Pixel;">
                                    Enter Now!
                                </a>
                            @else
                                <a href="{{ route('login') }}" type="button"
                                    class="btn btn-primary me-2 text-decoration-none" style="font-family:Pixel;">
                                    Login
                                </a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" type="button" class="btn btn-primary me-2"
                                        style="font-family:Pixel;">
                                        Try for free
                                    </a>
                                @endif
                            @endauth
                        </div>
                    @endif
                    
                </div>
                <!-- Collapsible wrapper -->
            </div>
            <!-- Container wrapper -->
        </nav>
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <h1 class="display-5 fw-bolder text-white" style="font-family:Pixel;">PEN & PIXEL
                </h1>
                <p class="lead fw-normal text-white">Blog For Gamers, By Gamers.</p>
                <a class="btn btn-outline-light btn-lg" href="#content" style="font-family:Pixel; font-size: 23px;">GAME
                    ON</a>
                
            </div>
            <div class=" product-device box-shadow d-none d-md-block">
            </div>
            <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
        </div>
    </div>
    </header>

    <body>
        <div class="content" id="content">
            <div class="px-4 pt-5 my-5 text-center">
                <h1 class="display-4 fw-bold" style="font-family:Pixel;">WHAT'S PEN
                    &
                    PIXEL?</h1><br><br>
                <div class="col-lg-6 mx-auto">
                    <p class="lead pb-5"><span style="font-family:Pixel; color: #273469">PEN & PIXEL</span>&nbsp;is a
                        digital
                        platform
                        dedicated to
                        providing comprehensive coverage of
                        the gaming industry. It's a hub for gaming enthusiasts, where they can find the latest news,
                        reviews, and
                        previews of upcoming games, consoles, and accessories.<br><br>

                        <span style="font-family:Pixel; color: #273469">PEN & PIXEL</span>&nbsp;covers a wide range of
                        gaming genres,
                        from action,
                        adventure, and role-playing games to sports,
                        racing, and simulation games. It caters to gamers of all levels, from casual players to hardcore
                        gamers, and
                        provides tips, tricks, and tutorials to help players improve their skills and gameplay.<br><br>

                        <span style="font-family:Pixel; color: #273469">PEN & PIXEL</span>&nbsp;also features interviews
                        with game
                        developers,
                        gaming industry experts, and popular gaming
                        personalities, giving readers an inside look into the industry and the people behind their
                        favorite games.
                        Additionally, the blog may host forums, chat rooms, and other interactive features, providing a
                        space for
                        gamers to connect and share their experiences with each other.<br><br>

                        Overall, a <span style="font-family:Pixel; color: #273469">PEN & PIXEL</span>&nbsp;for gamers is
                        a must-visit
                        destination
                        for anyone interested in the world of gaming. It's a
                        place to stay up-to-date on the latest news, engage with fellow gamers, and discover new games
                        and
                        experiences.
                    </p>
                </div>
            </div>
            
        <div class="content" id="content" style="background-color: #273469; color: white; font-family:Pixel;">
            <div class="px-4 pt-5 my-5 text-center">
                <h1 class="text-warning  fw-bold" style="font-family:Pixel; color: gold; font-size: 4em">About Us</h1><br><br>
                <div class="col-lg-10 mx-auto">
                  
                    <div class="row">
                      <div class="col d-flex flex-column justify-content-center align-items-center">
                        <img src={{ asset('assets/media/austin.png') }} height="100px" width="150px" alt="" srcset="">
                        <h3>Ryan Austin Castro</h3>
                        <p style="color: gold;">Front End Developer</p>
                      </div>
                      <div class="col d-flex flex-column justify-content-center align-items-center">
                        <img src={{ asset('assets/media/justine.png') }} height="100px" width="150px" alt="" srcset="">
                        <h3>Justine Lorenze Clemente</h3>
                        <p style="color: gold;">Front End Developer</p>
                      </div>
                      <div class="col d-flex flex-column justify-content-center align-items-center">
                        <img src={{ asset('assets/media/neal.png') }} height="100px" width="150px" alt="" srcset="">
                        <h3>Neal Clarence Domingo</h3>
                        <p style="color: gold;">Front End Developer</p>
                      </div>
                    </div>
                    <div class="row pt-5">
                      <div class="col d-flex flex-column justify-content-center align-items-center">
                        <img src={{ asset('assets/media/carlo.png') }} height="100px" width="150px" alt="" srcset="">
                        <h3>Ryan Carlo Crisol</h3>
                        <p style="color: gold;">Front End Developer</p>
                      </div>
                      <div class="col d-flex flex-column justify-content-center align-items-center">
                        <img src={{ asset('assets/media/jim.png') }} height="100px" width="150px" alt="" srcset="">
                        <h3>Jim Eron Garrido</h3>
                        <p style="color: gold;">Back End Developer</p>
                      </div>
                      
                    </div>
                  </div>
                
            </div>
            <div class="footer">
                <p style="font-family:Pixel; color:white">© 2022 Copyright: Pen & Pixel. All rights reserved.</p>
            </div>
            

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
            </script>
    </body>

</html>
