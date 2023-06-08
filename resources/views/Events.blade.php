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
            <section id="valve-montage">
                <div id="parent-container" class="background3" style="position: relative;">
                <div id="valvevideo-container" style="z-index: -1;">
                    <video class="valve" muted="" autoplay="" preload="auto" loop="" playsinline="" ><source type="video/webm" src="media/Eventvid.mp4"></video>
                </div>
            </div>
                <h1 class="mainhead4">Recent <span>Events</span></h1>  
                <div class="flex">
                    <div class="eventbox1">
                        <img src="media/event1.jpg" />
                        <div class="box-lower-section">
                            <h4><span>The International Tournament 2022</span></h4>
                            <p style="color: antiquewhite;">Lorem ipsum dolor sit amet, consectectur adipiscing elit lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>

                    <div class="eventbox2">
                        <img src="media/event2.jpg" />
                        <div class="box-lower-section">
                            <h4><span>Dota Battle Pass</span></h4>
                            <p style="color: antiquewhite;">Lorem ipsum dolor sit amet, consectectur adipiscing elit lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>

                    <div class="eventbox3">
                        <img src="media/event3.jpg" />
                        <div class="box-lower-section">
                            <h4><span>Namestice Event</span></h4>
                            <p style="color: antiquewhite;">Lorem ipsum dolor sit amet, consectectur adipiscing elit lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="tournaments" style="background: url('https://onclickwebdesign.com/wp-content/uploads/recent_games_bg.png') top center no-repeat; background-color: #1a1a1a; padding: 30px 0 120px;">
                <div class="tournamentshead">Tournaments</div>
                <div class="flex">
                    <div class="box">
                        <div class="tournaments-image">
                            <img src="media/tournament1.png" />
                        </div>
                        <div class="tournaments-content">
                            <h3>PGL Arlington Major 2022</h3>
                            <div><label>Tournament Begins:</label> <strong>June 20, 2022</strong></div>
                            <div><label>Tournament Ends:</label> <strong>July 01, 2022</strong></div>
                            <div><label>Participants:</label> <strong>10 teams</strong></div>
                            <div><label>Tournament Organizer:</label> <strong>Admin</strong></div>
                            <div><label class="prizes">Prizes:</label> <label>1st place <span style="color: white;">$4000</span>, 2nd place: <span style="color: white;"> $1500</span>, 3rd place: <span style="color: white;"> $500</span></label></div>
                        </div>
                    </div>

                    <div class="box">
                        <div class="tournaments-image">
                            <img src="media/tournament2.png" />
                        </div>
                        <div class="tournaments-content">
                            <h3>ESL One Malaysia 2022</h3>
                            <div><label>Tournament Begins:</label> <strong>July 20, 2022</strong></div>
                            <div><label>Tournament Ends:</label> <strong>August 01, 2022</strong></div>
                            <div><label>Participants:</label> <strong>10 teams</strong></div>
                            <div><label>Tournament Organizer:</label> <strong>Admin</strong></div>
                            <div><label class="prizes">Prizes:</label> <label>1st place <span style="color: white;">$4000</span>, 2nd place: <span style="color: white;"> $1500</span>, 3rd place: <span style="color: white;"> $500</span></label></div>
                        </div>
                    </div>
                </div>
            </section>


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