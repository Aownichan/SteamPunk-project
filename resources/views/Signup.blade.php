<!DOCTYPE html>
<html>
<head>
	<title>SteamPunk</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/Signup.css')}}">
	<link rel="icon" href="media/icon.jpg" type="image/icon type">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="heading"><a href="{{url('/')}}"> STEAM<span>PUNK</span></a></div>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">
			<div class="signup">
				<form method="POST" action="/Signup">
					@csrf
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="Username" placeholder="User name" value="{{old('Username')}}" required="">
					@error('Username')
						<p style="color:#f74843; margin-left: 60px; font-size: 10px;">{{$message}}</p>
					@enderror
					<input type="email" name="Email" placeholder="Email" value="{{old('Email')}}" required="">
					@error('Email')
						<p style="color:#f74843; margin-left: 60px; font-size: 10px;">{{$message}}</p>
					@enderror
					<input type="password" name="Password" placeholder="Password" required="">
					@error('Password')
						<p style="color:#f74843; margin-left: 60px; font-size: 10px;">{{$message}}</p>
					@enderror
					<button class="Sbtn" type="submit">Sign up</button>
				</form>
				<button class="Sbtn" ><a href="{{ url('Login')}}" >Login</a></button>
			</div>
	</div>
</body>
</html>