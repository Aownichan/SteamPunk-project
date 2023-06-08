<!DOCTYPE html>
<html>
    <head>
        <title>SteamPunk</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS only -->
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> -->
        <link href="{{ asset('css/home.css')}}" rel="Stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
        <link rel="icon" href="media/icon.jpg" type="image/icon type">
    </head>

    <body>
        <header>
        <div class="flex">
                <div class="logo">
                    <a href="{{url('/')}}"><img src="media/Logo2.png" alt="MainLogo" height="50em" width="55em"/></a>
                    <a href="{{url('/')}}" class="logopunk"> <h4>STEAM<span>PUNK</span></h4></a>
                </div>
                <nav>
                    <button id="nav-toggle" class="hamburger-menu">
                        <span class="strip"></span>
                        <span class="strip"></span>
                        <span class="strip"></span>
                    </button>
                    <ul id="nav-menu-container">
                      <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('/Games/')}}">Games</a></li>
                        <li><a href="{{url('/Events/')}}">Events</a></li>
                        <li><a href="{{url('/Studio/')}}">Studio</a></li>
                        <li><a href="{{url('/Aboutus/')}}">About Us</a></li>
                    </ul>
                </nav>
                @guest
                    <a href="{{url('/Signup/')}}" id="login-register-button">Login / Register</a>
                @else
                    <form method="POST" action="/logout">
                        @csrf
                        <button style="text-decoration: none; background: transparent; border: none;">
                            <div class="logoutbtn">
                                <div class="homepage_Signup">Log Out</div>
                            </div>
                        </button>
                    </form>
                @endguest
            </div>
        </header>

        <main>
            <section id="dota-montage">
                <div class="aboutmain">
                    <h1 class="mainhead2" >At Steam<span>Punk</span> we make games, hardware, and organize tournaments.</h1>
                    <h3 class="detailhead">Our games attract millions and define genres.</h3>
                    <div class="aboutpara">SteamPunk's debut title, Half-Life, was released in 1998. It won more than 50 game of the year awards, and PC Gamer even called it the Best PC Game Ever. Since then, we've released dozens of titles that changed the world. Today, millions of people play our games every day.</div>
                    <div class="aboutvideo"><video class="aboutvid" autoplay="" muted="" preload="auto" loop="" playsinline="" ><source type="video/webm" src="media/aboutus.mp4"></video></div>
                    <h3 class="detailhead2">We're just getting started.</h3>
                    <div class="aboutpara2">We make all of this stuff collaboratively in Bellevue, Washington, where we combine the resources and talent of a world-class company with the ethos of a small startup. With an engaged and vocal community of partners and players, our products and our company will continue to change and grow in ways we may never have predicted. <a href="{{url('/Join/')}}"><span> Join us</span></a>, and help inform what's next.</div>
                </div>
            </section>
        </main>

        <footer>
            <div class="flex">
                <small> Dota and the Dota logo are trademarks and/or registered trademarks of Valve Corporation. 2022 Valve Corporation, all rights reserved. &copy; | This website is made with <span class="footer-heart">&#9829;</span> by <a href="https://steamcommunity.com/id/Aownichan_69/" target="_blank">Aown Raza</a>.</small>
                
                <ul>
                    <li>
                        <a class="footernav" href="{{url('/')}}">Home</a>
                    </li>

                    <li>
                        <a class="footernav" href="{{url('/Games/')}}">Games</a>
                    </li>

                    <li>
                        <a class="footernav" href="{{url('/Events/')}}">Events</a>
                    </li>

                    <li>
                        <a class="footernav" href="{{url('/Studio/')}}">Studio</a>
                    </li>

                    <li>
                        <a class="footernav" href="{{url('/Aboutus/')}}">About Us</a>
                    </li>
                </ul>
               
            </div>
        </footer>
        <script>
            document.getElementById('nav-toggle').addEventListener('click', function () {
                let navMenu = document.getElementById('nav-menu-container');
                navMenu.style.display = navMenu.offsetParent === null ? 'block' : 'none';
            });
        </script>
        <!-- JavaScript Bundle with Popper -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> -->
    </body>
    </html>