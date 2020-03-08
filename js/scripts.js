/////////////////////// ready
$(document).ready(function() {
	/*----------------------------------------------------*/
	// Superfish menu.
	/*----------------------------------------------------*/
	$('.sf-menu').superfish();

	/*----------------------------------------------------*/
	// Superslides
	/*----------------------------------------------------*/
	var height = $(window).height();
	$('#home').height(height);

	$('#slides').superslides({
		play: 7000,
		animation: 'fade', // slide
		pagination: true,
		inherit_height_from: '#home',
	});

	/*----------------------------------------------------*/
	// Totop
	/*----------------------------------------------------*/
	$(".totop").bind('click',function(event){
		$("html, body").animate({
			scrollTop: 0
		}, {
				duration: 1200,
				easing: "easeInOutExpo"
		});
		event.preventDefault();
	});

	/*----------------------------------------------------*/
	// Fancybox
	/*----------------------------------------------------*/
	$("a.fancybox").fancybox();

	/*----------------------------------------------------*/
	// owlCarousel
	/*----------------------------------------------------*/
	$('.owl-carousel-testimonials').owlCarousel({
		center: false,
		items: 1,
		loop: true,
		margin: 30,
		autoplay: true,
		autoplayTimeout: 5000,
		responsive: {
			992: {
				items: 2
			}
		}
	});

	$('.owl-carousel-post').owlCarousel({
		center: false,
		items: 1,
		loop: true,
		margin: 0,
		animateOut: 'fadeOut',
		nav: true,
		dots: false,
		autoplay: true,
		autoplayTimeout: 5000
	});

	// Animate distance
	var o = $('.animated-distance');
	if (o.length > 0) {
		o.appear(function() {
			var elem = $(this);
			var b = elem.data('num');
			var d = elem.data('duration');
			var animationDelay = elem.data('animation-delay');
			if ( !animationDelay ) { animationDelay = 0; }
			elem.find('span').text("0" + '%');

			setTimeout(function(){
				elem.animate({ num: b }, {
					duration: d,
					// easing: 'easeOutExpo',
					step: function (num){
						a = (num).toFixed(0) + '%';
						elem.find('span').text(a);
						elem.css("width", a);
					}
				});
			}, animationDelay);
		});
	}


});

/////////////////////// load
$(window).on('load', function () {


});

function notif(type, icon, message) {
	$.notify({
		// options
		icon: icon,
		message: message
	},{
		// settings
		type: type,
		delay: 3000,
		mouse_over: "pause",
		placement: {
			from: "bottom",
			align: "left"
		}
	});
}