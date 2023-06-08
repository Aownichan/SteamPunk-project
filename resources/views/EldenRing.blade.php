<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SteamPunk</title>
    <link href="{{ asset('css/home.css')}}" rel="Stylesheet" type="text/css">
    <link rel="icon" href="media/icon.jpg" type="image/icon type">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>

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
                <div id="parent-container" class="background4" style="position: relative;">
                <div id="valvevideo-container" style="z-index: -1;">
                    <video class="valve" muted="" autoplay="" preload="auto" loop="" playsinline="" ><source type="video/webm" src="media/Elden.mp4"></video>
                </div>
            </div>
                <h1 class="mainhead4">Showcase</h1>  
                <div class="prev">
    <iframe class="trailer" width="700" height="450" src="https://www.youtube.com/embed/K_03kFqWfqs" title="ELDEN RING - Story Trailer" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="padding-left: 4rem;" ></iframe>          
        <div class="container">
            <h2 class="product-head" style="color: #f74843"> Elden Ring</h2>

            <div class="information">
              <div id="left-side">
              <h5 class="deet1">Published By:</h5>
              </div>
              <div id="right-side">
                <a class="dev-link" href="https://en.bandainamcoent.eu"><h5 class="deet1">Bandai Namco</h5></a>
              </div>
            </div>

            <div class="information">
              <div id="left-side">
              <h5 class="deet1">Price:</h5>
              </div>
              <div id="right-side">
                <h5 class="deet1" style="color: white">$49.99</h5>
              </div>
            </div>

            <div class="information">
              <div id="left-side">
              <h5 class="deet1">Platform:</h5>
              </div>
              <div id="right-side">
                <h5 class="deet1" style="color: white">Windows, Mac, PS4, XBox</h5>
              </div>
            </div>

            <a href="{{url('https://store.steampowered.com/app/1245620/ELDEN_RING/')}}" id="Buybtn">Buy Now</a>
        </div>  
    </div>
    </section>
    
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
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


