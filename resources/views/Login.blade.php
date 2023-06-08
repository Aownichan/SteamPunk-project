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
			<div class="login">
				<form method="POST" action="/login">
					@csrf
					<label>Login</label>
					<input type="email" name="Email" placeholder="Email" value="{{old('Email')}}" required="">
					@error('Email')
						<p style="color:#252525; margin-left: 60px; font-size: 10px;">{{$message}}</p>
					@enderror
					<input type="password" name="Password" placeholder="Password" required="">
					@error('Password')
						<p style="color:#252525; margin-left: 60px; font-size: 10px;">{{$message}}</p>
					@enderror
					<button class="Lbtn" type="submit">Login</button>
					<button class="Lbtn" ><a href="{{ url('Signup')}}">Signup</a></button>
				</form>
			</div>  
			
	</div>
</body>
</html>