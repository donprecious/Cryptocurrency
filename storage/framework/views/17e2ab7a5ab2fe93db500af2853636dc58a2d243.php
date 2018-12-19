<!DOCTYPE html>
<html lang="en">

<head>
	<title>CryptoLancy | <?php echo $__env->yieldContent('title','homepage'); ?></title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta charset="utf-8">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1"><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="<?php echo e(asset('icon/favicon-32x32.png')); ?>" sizes="32x32">
	<link rel="apple-touch-icon" href="<?php echo e(asset('icon/favicon-32x32.png')); ?>">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo e(asset('icon/apple-touch-icon-72x72.png')); ?>">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo e(asset('icon/apple-touch-icon-114x114.png')); ?>">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo e(asset('icon/apple-touch-icon-144x144.png')); ?>">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Jura:600,700%7CRoboto:300,400,500,700" rel="stylesheet">

	<!-- Icons -->
	<link rel="stylesheet" href="<?php echo e(asset('css/linearicons.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('css/font-awesome.min.css')); ?>">

	<!-- CSS -->
	<link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('css/owl.carousel.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('css/animate.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('css/magnific-popup.css')); ?>">
    <link id="switch-color" rel="stylesheet" href="<?php echo e(asset('css/main-color1.css')); ?>">

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
						<img class="header__logo-white" src="<?php echo e(asset('img/logo.png')); ?>" alt="Logo">
						<img class="header__logo-dark" src="<?php echo e(asset('img/logo--dark.png')); ?>" alt="Logo">
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
                    <?php if(auth()->guard()->guest()): ?>
                        <a href="#signin" class="header__signin modal-btn">Sign In</a>
                        <?php else: ?>
                        <a href="#" class="header__signin ">My Account</a>
                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         <?php echo e(__('Logout')); ?>

                     </a>

                     <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                         <?php echo csrf_field(); ?>
                     </form>
                    <?php endif; ?>



					<!-- end sign in -->
				</div>
			</div>
		</div>
	</header>
	<!-- end header -->
    <?php echo $__env->yieldContent('content'); ?>

    <!-- JS -->
    <script src="<?php echo e(asset('js/jquery-2.2.4.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/owl.carousel.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/jquery.marquee.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/smooth-scroll.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/jquery.magnific-popup.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/jquery.parallax.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/scrolla.jquery.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/jquery.waypoints.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/jquery.counterup.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/imagesloaded.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/main.js')); ?>"></script>
    <?php $__env->startSection('scripts'); ?>

    <?php echo $__env->yieldSection(); ?>

</body>

</html>
