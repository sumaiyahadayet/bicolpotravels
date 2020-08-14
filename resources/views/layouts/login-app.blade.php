<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Smatifier</title>
	<link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/images/favicons/apple-touch-icon.png')}}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/images/favicons/favicon-32x32.png')}}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicons/favicon-16x16.png')}}">
	<link rel="manifest" href="{{asset('assets/images/favicons/site.webmanifest')}}">

	<!-- plugin scripts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,500i,600,700,800%7CSatisfy&amp;display=swap" rel="stylesheet">

	<!-- template styles -->
	<link rel="stylesheet" href="{{asset('assets/css/login.css')}}">

</head>


<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">

				@yield('content')


			</div>
		</div>
	</div>



</body>


</html>
