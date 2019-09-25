(function ($) {
	$(document).ready(function () {



		// Team slider start
		$('.teamslider').owlCarousel({
			loop: true,
			margin: 0,
			autoplay: false,
			autoplayTimeout: 4000,
			autoplayHoverPause: true,
			autoHeight: true,
			autoHeightClass: 'owl-height2',
			animateOut: 'fadeOut',
			animateIn: 'fadeIn',
			responsiveClass: true,
			responsive: {
				0: {
					items: 1,
					nav: true
				},
				600: {
					items: 1,
					nav: true
				},
				1000: {
					items: 1,
					nav: true,
					loop: false
				}
			}
		});
		// Team slider end

		//wow js start
		wow = new WOW({
			animateClass: 'animated',
			offset: 100,
		});
		wow.init();
		//wow js stop


		// scroll a image zoom js start
		$(window).scroll(function () {
			var scroll = $(window).scrollTop();
			$(".zoom img").css({
				width: (100 + scroll / 5) + "%"
			});
		});
		// scroll a image zoom js end



		// hamber menu js start 
		$(".mobile-menu-bar").on("click", function () {
			$('.mobile-menu-bottom').toggleClass("menuappend");
		});
		// hamber menu js end 

		/* stick menu js start */
		$(window).scroll(function () {
			var distanceFromTop = $(this).scrollTop();
			if (distanceFromTop >= $('.desktop-menu-hero').height()) {
				$('.desktop-menu-hero').addClass('fixed animated fadeInDown');
			} else {
				$('.desktop-menu-hero').removeClass('fixed animated fadeInDown');
			}
		});
		/* stick menu js end */


	});
})(jQuery);