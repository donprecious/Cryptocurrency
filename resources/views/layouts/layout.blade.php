<!DOCTYPE html>
<html lang="en">

<head>
	<title>CryptoLancy | @yield('title','homepage')</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1"><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="{{ asset('icon/favicon-32x32.png')}}" sizes="32x32">
	<link rel="apple-touch-icon" href="{{ asset('icon/favicon-32x32.png')}}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('icon/apple-touch-icon-72x72.png')}}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('icon/apple-touch-icon-114x114.png')}}">
	<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('icon/apple-touch-icon-144x144.png')}}">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Jura:600,700%7CRoboto:300,400,500,700" rel="stylesheet">

	<!-- Icons -->
	<link rel="stylesheet" href="{{asset('css/linearicons.css')}}">
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

	<!-- CSS -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link id="switch-color" rel="stylesheet" href="{{asset('css/main-color1.css')}}">

</head>
<body class="body" data-spy="scroll" data-target=".header" data-offset="60">
	<!-- header -->
	<header class="header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<!-- btn -->
					<button class="header__btn" type="button">
						<span class="lnr lnr-menu"></span>
						<span class="lnr lnr-cross"></span>
					</button>
					<!-- end btn -->

					<!-- logo -->
					<a data-scroll href="#home" class="header__logo">
						<img class="header__logo-white" src="{{ asset('img/logo.png')}}" alt="Logo">
						<img class="header__logo-dark" src="{{ asset('img/logo--dark.png')}}" alt="Logo">
					</a>
					<!-- end logo -->

					<!-- tagline -->
					<span class="header__tagline">BuyCoin<br>Landing Page</span>
					<!-- end tagline -->

					<!-- navigation -->
					<ul class="nav header__nav">
						<li>
							<a data-scroll href="#about">About Us</a>
						</li>
						<li>
							<a data-scroll href="#offers">Offers</a>
						</li>
						<li>
							<a data-scroll href="#safety">Safety</a>
						</li>
						<li>
							<a data-scroll href="#blog">Blog</a>
						</li>
						<li>
							<a data-scroll href="#contacts">Contacts</a>
						</li>
					</ul>
					<!-- end navigation -->

                    <!-- sign in -->
                    @guest
                        <a href="#signin" class="header__signin modal-btn">Sign In</a>
                        @else
                        <a href="#" class="header__signin ">My Account</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         @csrf
                     </form>
                    @endguest



					<!-- end sign in -->
				</div>
			</div>
		</div>
	</header>
	<!-- end header -->
    @yield('content')


    <!-- JS -->
    <script src="{{asset('js/jquery-2.2.4.min.js')}}"></script>
	<script src="{{asset('js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/jquery.marquee.min.js')}}"></script>
	<script src="{{asset('js/smooth-scroll.min.js')}}"></script>
	<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('js/jquery.parallax.min.js')}}"></script>
	<script src="{{asset('js/scrolla.jquery.min.js')}}"></script>
	<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset('js/jquery.counterup.min.js')}}"></script>
	<script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    @section('scripts')

    @show

</body>

</html>
