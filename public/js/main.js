$(document).ready(function () {
	"use strict"; // start of use strict

	/*==============================
	Preloader
	==============================*/
	$(window).on('load', function() {
		$('body').imagesLoaded( function() {
			$('.preloader').fadeOut();
		});
	});

	/*==============================
	Animation
	==============================*/
	$('.animate').scrolla({
		once: true, // only once animation play on scroll
		mobile: false, // disable animation on mobiles 
	});

	/*==============================
	Mobile navigation
	==============================*/
	$('.header__btn').on('click', function() {
		$(this).toggleClass('header__btn--active');
		$('.header__nav').toggleClass('header__nav--active');

		if ( $(window).scrollTop() == 0 ) {
			$('.header').toggleClass('header--active');
		}
	});

	/*==============================
	Header
	==============================*/
	$(window).on('scroll', function () {
		if ($(this).scrollTop() > 0){
			$('.header').addClass("header--active");
		} else {
			$('.header').removeClass("header--active");
		}
	});

	/*==============================
	Home slider
	==============================*/
	$('.home__slider').owlCarousel({
		animateOut: 'fadeOut',
		animateIn: 'fadeIn',
		mouseDrag: false,
		dots: false,
		items: 1,
		loop: true,
		autoplay: true,
		autoplayTimeout: 6000,
	});

	$('.home__slider .item').each(function(){
		if ($(this).attr("data-bg")){
			$(this).css({
				'background': 'url(' + $(this).data('bg') + ')',
				'background-position': 'center center',
				'background-repeat': 'no-repeat',
				'background-size': 'cover'
			});
		}
	});

	/*==============================
	Section background img
	==============================*/
	$('.section--bg').each(function(){
		if ($(this).attr("data-bg")){
			$(this).css({
				'background': 'url(' + $(this).data('bg') + ')',
				'background-position': 'center center',
				'background-repeat': 'no-repeat',
				'background-size': 'cover'
			});
		}
	});

	/*==============================
	Partners slider
	==============================*/
	$('.partners__slider').owlCarousel({
		mouseDrag: false,
		dots: false,
		loop: true,
		autoplay: true,
		autoplayTimeout: 5000,
		smartSpeed: 500,
		responsive : {
			0 : {
				items: 2,
				margin: 20
			},
			768 : {
				items: 4,
				margin: 20
			},
			992 : {
				items: 5,
				margin: 25
			},
			1200 : {
				items: 6,
				margin: 30
			}
		}
	});

	/*==============================
	Team slider
	==============================*/
	$('.team').owlCarousel({
		center: true,
		mouseDrag: false,
		dots: false,
		loop: true,
		autoplay: true,
		autoplayTimeout: 6000,
		smartSpeed: 500,
		responsive : {
			0 : {
				items: 2,
				margin: 20
			},
			768 : {
				items: 4,
				margin: 20
			},
			992 : {
				items: 4,
				margin: 30
			},
			1200 : {
				items: 4,
				margin: 60
			},
			1600 : {
				items: 4,
				margin: 80
			}
		}
	});

	/*==============================
	Counter
	==============================*/
	$('.counter__value').counterUp({
		delay: 10,
		time: 800
	});

	/*==============================
	Ticker
	==============================*/
	$('.ticker').marquee({
		pauseOnHover: true,
		duplicated: true,
		duration: 18000,
		gap: 0,
		startVisible: true
	});

	/*==============================
	Smooth scroll
	==============================*/
	var scroll = new SmoothScroll('[data-scroll]', {
		ignore: '[data-scroll-ignore]',
		header: '.header',
		speed: 600,
		offset: -10,
		easing: 'easeInOutCubic',
	});

	/*==============================
	Modal
	==============================*/
	/* video modal */
	$('.video__btn').magnificPopup({
		removalDelay: 200,
		type: 'iframe',
		preloader: false,
		mainClass: 'animated fadeIn'
	});

	/* form modal */
	$('.modal-btn').magnificPopup({
		type: 'inline',
		preloader: false,
		focus: '#username',
		modal: true,
		mainClass: 'animated fadeIn'
	});
	$(document).on('click', '.modal__close', function (e) {
		e.preventDefault();
		$.magnificPopup.close();
	});

	/*==============================
	Switcher
	==============================*/
	$('.switcher__picker').on('click', function() {
		$('.switcher').toggleClass('switcher--open');
	});

	$('#color1').on('click', function() {
		$('#switch-color').attr('href','css/main-color1.css');
	});
	$('#color2').on('click', function() {
		$('#switch-color').attr('href','css/main-color2.css');
	});
	$('#color3').on('click', function() {
		$('#switch-color').attr('href','css/main-color3.css');
	});
	$('#color4').on('click', function() {
		$('#switch-color').attr('href','css/main-color4.css');
	});
	$('#color5').on('click', function() {
		$('#switch-color').attr('href','css/main-color5.css');
	});
	$('#color6').on('click', function() {
		$('#switch-color').attr('href','css/main-color6.css');
	});
});