<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SteamPunk</title>
    <link href="{{ asset('css/home.css')}}" rel="Stylesheet" type="text/css" />
    <link rel="icon" href="media/icon.jpg" type="image/icon type">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
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
        <section id="valve-montage">
            <div id="parent-container" class="background" style="position: relative;">
            <div id="valvevideo-container" style="z-index: -1;">
                <video class="valve" muted="True" autoplay="" preload="auto" loop="" playsinline="" ><source type="video/webm" src="media/Studio.webm"></video>
            </div>
        </div>
            <h1 class="mainhead"><span>Games</span> By <span>Gamers</span></h1>  
            <div>
            <div class="homepage_QuoteText">Join Us Today</div>
            <div class="homepage_para">We're seeking collaborators who are the best at what they do. Opportunities at SteamPunk run broad and deep across the following areas, where we're always hiring for all positions.</div>
            <ul class="jobs">
                <li><a href="{{url('/Join/')}}">Art</a></li>
                <li><a href="{{url('/Join/')}}">Game Design</a></li>
                <li><a href="{{url('/Join/')}}">Software Engineering</a></li>
                <li><a href="{{url('/Join/')}}">Hardware Engineering</a></li>
                <li><a href="{{url('/Join/')}}">Technical Infrastructure</a></li>
                <li><a href="{{url('/Join/')}}">Prodct Design</a></li>
                <li><a href="{{url('/Join/')}}">Data Science</a></li>
                <li><a href="{{url('/Join/')}}">Writing</a></li>
            </ul>
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
</body>
</html>