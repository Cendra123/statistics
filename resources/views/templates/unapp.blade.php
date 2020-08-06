<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SI PETIK</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('unapp/css/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('unapp/css/icomoon.css') }}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('unapp/css/bootstrap.css') }}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset('unapp/css/magnific-popup.css') }}">

	<!-- Owl Carousel -->
	<!--
	<link rel="stylesheet" href="{{ asset('unapp/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('unapp/css/owl.theme.default.min.css') }}">
-->
<!-- Theme style  -->
<link rel="stylesheet" href="{{ asset('unapp/css/style.css') }}">

<!-- Modernizr JS -->
<script src="{{ asset('unapp/js/modernizr-2.6.2.min.js') }}"></script>
<!-- FOR IE9 below -->
<!-- [if lt IE 9]> -->
<script src="{{ asset('unapp/js/respond.min.js') }}"></script>
<!-- <![endif] -->




<style type="text/css">
	@media(max-width: 768px){
		.container{
			margin-right: 10px;
			margin-left: 10px;
		}
	}
</style>
@section('css')
@show

</head>
<body>
	
	<!-- <div class="colorlib-loader"></div> -->

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-md-2">
							<div id="colorlib-logo"><a href="index.html" >SI PETIK</a></div>
						</div>
						@section('menu')
						<!-- MENU -->
						<div class="col-md-10 text-right menu-1">
							<ul>
								<li class="active"><a href="{{url('home')}}">Home</a></li>
								<li><a href="{{url('about')}}">About</a></li>
							</ul>
						</div>
						<!-- END MENU -->
						@show
					</div>
				</div>
			</div>
		</nav>
		@section('content')
		There is no content
		@show
	</div>
	<!-- jQuery -->
	<script src="{{ asset('unapp/js/jquery.min.js') }}"></script>
	<!-- jQuery Easing -->
	<script src="{{ asset('unapp/js/jquery.easing.1.3.js') }}"></script>
	<!-- Bootstrap -->
	<script src="{{ asset('unapp/js/bootstrap.min.js') }}"></script>
	<!-- Waypoints -->
	<script src="{{ asset('unapp/js/jquery.waypoints.min.js') }}"></script>
	<!-- Stellar Parallax -->
	<script src="{{ asset('unapp/js/jquery.stellar.min.js') }}"></script>
	<!-- YTPlayer -->
	<script src="{{ asset('unapp/js/jquery.mb.YTPlayer.min.js') }}"></script>
	<!-- Owl carousel -->
	<script src="{{ asset('unapp/js/owl.carousel.min.js') }}"></script>
	<!-- Magnific Popup -->
	<script src="{{ asset('unapp/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('unapp/js/magnific-popup-options.js') }}"></script>
	<!-- Counters -->
	<script src="{{ asset('unapp/js/jquery.countTo.js') }}"></script>
	<!-- Main -->
	<script src="{{ asset('unapp/js/main.js') }}"></script>

	@section('js')
	@show

</body>

<!-- Template -->
<!-- https://colorlib.com/preview/theme/unapp/ -->
</html>

