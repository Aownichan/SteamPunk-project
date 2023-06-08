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
                        <li><a href="{{url('/admin/')}}">Admin</a></li>
                    </ul>
                </nav>
                @guest
                    <a href="{{url('/Signup/')}}" id="login-register-button">Login / Register</a>
                @else
                    <span style="margin-top: 10px; font-size: 20px">Welcome, {{auth()->user()->Username}}!</span>
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
                <div id="parent-container" style="position: relative;">
                <div id="video-container" style="z-index: -1;">
                    <video muted="True" autoplay="" preload="auto" loop="" playsinline="" ><source type="video/webm" src="media/Dota.mp4"></video>
                    <div class="homepage_BottomFade"></div>
                </div>
                </div>
                <h1 class="mainhead" style="font-size: 50px; position: absolute; top: 100px; left: 15%; color: antiquewhite; margin-left: 18%;" >A Hub For <span>Gamers</span> By <span>Gamers</span></h1>  
                <div>
                <div class="homepage_QuoteText">“A Modern Gaming Masterpiece.”</div>
                <div class="homepage_QuoteCredit">- Destructoid</div>
                <div class="homepage_HorizBar"></div>
                @guest
                    <a href="{{url('/Signup/')}}">
                    <div class="homepage_Signbtn">
                        <div class="homepage_Signup"> Sign Up Today</div>
                    </div>
                </a>
                @else
                <a href="{{url('/Games/')}}">
                    <div class="homepage_Signbtn">
                        <div class="homepage_Signup"> Play For Free</div>
                    </div>
                </a>
                @endguest
            </section>
            <section id="recent-events" style="background: url('media/Dotabg.jpg') no-repeat;">
                <div class="RecentEventsText">Recent Events</div>
                <div class="flex">
                    <div class="box">
                        <a href="{{url('/Events/')}}" class="picture"><img src="media/event1.jpg" /></a>
                 
                    </div>

                    <div class="box">
                        <a href="{{url('/Events/')}}" class="picture"><img src="media/event2.jpg" /></a> 
                    
                    </div>

                    <div class="box">
                        <a href="{{url('/Events/')}}" class="picture"><img src="media/event3.jpg" /></a>
                     
                    </div>
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