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
                <div class="joinmain">
                    <h1 class="mainhead2" >Join Us.</h1>
                    <div class="joinpara">SteamPunk strives to improve the diversity of our teams to better serve our diverse global audience. We welcome and encourage individuals from all backgrounds to apply. Candidates will be considered without regard to race, religion, color, national origin, gender, sexual orientation, age, family status, veteran status or disability status. SteamPunk is committed to creating an inclusive work environment and does not tolerate discrimination or harassment in the workplace.</div>
                    <div class="joinpara2">We will ensure that individuals with disabilities are provided reasonable accommodation to participate in the job application or interview process, to perform essential job functions, and to receive other benefits and privileges of employment. Please contact us at <span>Aown.Raza963@gmail.com</span> to request accommodation.</div>
                    <div id="job_benefits" class="job_benefits">
							<div class="list_title">What We Offer</div>
							<ul>
							<li>An organization where 100% of time is dedicated as groups see fit</li>
							<li>The opportunity to collaborate with experts across a range of disciplines</li>
							<li>A work environment and flexible schedule in support of families and domestic partnerships</li>
							<li>A culture eager to become stronger through diversity of all forms</li>
					        <li>Exceptional health insurance coverage</li>
						    <li>Unrivaled employer match for our 401(k) retirement plan</li>
							<li>Generous vacation and family leave</li>
							<li>On-site amenities in support of health and efficiency</li>
							<li>Fertility and adoption assistance</li>
							<li>Reimbursement for child care during interviews</li>
							</ul>
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