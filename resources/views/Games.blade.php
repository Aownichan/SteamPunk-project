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
            <div id="parent-container" class="background2" style="position: relative;">
            <div id="valvevideo-container" style="z-index: -1;">
                <video class="valve" autoplay="" muted="" preload="auto" loop="" playsinline="" ><source type="video/webm" src="media/Gamesback.mp4"></video>
            
            </div>
        </div>
            <h1 class="mainheadgames"> Our <span>Collection</span></h1>  
            <section id="game-types-boxes">       
                <div class="flex">
                    <div class="box new" style="background: url('media/eldenring.png') top center no-repeat; background-size: cover;">
                        <div class="shade">
                            <span class="badge new">Elden Ring</span>
                            <div class="contents">
                                <a href="{{url('/EldenRing/')}}" class="Playnew">Explore<span> ➔</span> </a>
                            </div>
                        </div>
                    </div>
        
                    <div class="box strategy" style="background: url('media/coh.jpg') top center no-repeat; background-size: cover;">
                        <div class="shade">
                            <span class="badge strategy">Company of Heroes</span>
                            <div class="contents">
                                <a href="{{url('/EldenRing/')}}" class="Playstrat">Explore<span> ➔</span> </a>
                            </div>
                        </div>
                    </div>
        
                    <div class="box rpg" style=" background: url('media/fallout.jpg') top center no-repeat; background-size: cover;">
                        <div class="shade">
                            <span class="badge rpg">Fallout</span>
                            <div class="contents">
                                <a href="{{url('/EldenRing/')}}" class="Playrpg">Explore<span> ➔</span> </a>
                            </div>
                        </div>
                    </div>
        
                    <div class="box FPS" style="background: url('media/cod.jpg') top center no-repeat; background-size: cover;">
                        <div class="shade">
                            <span class="badge FPS">Call of Duty</span>
                            <div class="contents">
                                <a href="{{url('/EldenRing/')}}" class="Playfps">Explore<span> ➔</span> </a>
                            </div>
                        </div>
                    </div>
                </div>
               
            </section>
        
            <section id="posts" style="background: url('media/dotaback.jpg') no-repeat; background-position: auto; padding: 75px 0; background-color: #000;">
               
                <div class="flex">
                    <section id="recent-reviews">
                        <h1>Recent Reviews</h1>
                        <div class="flex">
                            <div class="box">
                                <span class="rating-badge purple">9.5</span>
                                <div class="recent-reviews-image">
                                    <img src="media/doom.jpg" />
                                </div>
                                <div>
                                    <h4>Doom</h4>
                                    <p>Lorem ipsum dolor sit amet, consectectur adipiscing ipsum dolor sit amet.</p>
                                </div>
                            </div>
        
                            <div class="box">
                                <span class="rating-badge violet">9.7</span>
                                <div class="recent-reviews-image">
                                    <img src="media/gta.jpg" />
                                </div>
                                <div>
                                    <h4>GTA</h4>
                                    <p>Lorem ipsum dolor sit amet, consectectur adipiscing ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="logo1">
                        
                    </div>
                    <div class="posts-box">
                        <h3>Latest Posts</h3>
                        <div class="post-item">
                            <img src="https://onclickwebdesign.com/wp-content/uploads/latest_posts_1.jpg" />
                            <div>
                                <h5>June 14, 2022</h5>
                                <p>Lorem ipsum dolor sit amet, consectectur adipiscing.</p>
                                <small>By: Admin</small>
                            </div>
                        </div>
        
                        <div class="post-item">
                            <img src="https://onclickwebdesign.com/wp-content/uploads/latest_posts_2.jpg" />
                            <div>
                                <h5>June 12, 2022</h5>
                                <p>Lorem ipsum dolor sit amet, consectectur adipiscing.</p>
                                <small>By: Admin</small>
                            </div>
                        </div>
        
                        <div class="post-item">
                            <img src="https://onclickwebdesign.com/wp-content/uploads/latest_posts_3.jpg" />
                            <div>
                                <h5>June 11, 2022</h5>
                                <p>Lorem ipsum dolor sit amet, consectectur adipiscing.</p>
                                <small>By: Admin</small>
                            </div>
                        </div>
                    </div>
        
                </div>
            </section>

            
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