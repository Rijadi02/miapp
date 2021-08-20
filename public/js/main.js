
(function($) {

	"use strict";
	$(window).on('load', function() {

		/*Page Loader active ===============*/
		$('#preloader').fadeOut();
		var wow = new WOW({
			boxClass: 'wow', // animated element css class (default is wow)
			animateClass: 'animated', // animation css class (default is animated)
			offset: 50, // distance to the element when triggering the animation (default is 0)
			mobile: true, // trigger animations on mobile devices (default is true)
			live: false // act on asynchronously loaded content (default is true)
		});


		wow.init();

		});


		// Breakpoints.
		skel.breakpoints({
			xlarge:	'(max-width: 1680px)',
			large:	'(max-width: 1280px)',
			medium:	'(max-width: 980px)',
			small:	'(max-width: 736px)',
			xsmall:	'(max-width: 480px)'
		});

	$(function() {

		var	$window = $(window),
			$body = $('body');

		// Disable animations/transitions until the page has loaded.
			$body.addClass('is-loading');

			$window.on('load', function() {
				window.setTimeout(function() {
					$body.removeClass('is-loading');
				}, 100);
			});

		// Prioritize "important" elements on medium.
			skel.on('+medium -medium', function() {
				$.prioritize(
					'.important\\28 medium\\29',
					skel.breakpoint('medium').active
				);
			});

	// Off-Canvas Navigation.

		// Navigation Panel.
			$(
				'<div id="navPanel">' +
					$('#nav').html() +
					'<a href="#navPanel" class="close"></a>' +
				'</div>'
			)
				.appendTo($body)
				.panel({
					delay: 500,
					hideOnClick: true,
					hideOnSwipe: true,
					resetScroll: true,
					resetForms: true,
					side: 'left'
				});

		// Fix: Remove transitions on WP<10 (poor/buggy performance).
			if (skel.vars.os == 'wp' && skel.vars.osVersion < 10)
				$('#navPanel')
					.css('transition', 'none');

	});

})(jQuery);


/* WOW Scroll Spy ===============*/
// var wow = new WOW({
// 	//disabled for mobile
// 	mobile: false
// });
/* ==================================================
    # Wow Init
 ===============================================*/
var wow = new WOW({
	boxClass: 'wow', // animated element css class (default is wow)
	animateClass: 'animated', // animation css class (default is animated)
	offset: 50, // distance to the element when triggering the animation (default is 0)
	mobile: true, // trigger animations on mobile devices (default is true)
	live: false // act on asynchronously loaded content (default is true)
});


wow.init();




// menu on scroll




var x = window.matchMedia("(max-width: 1024px)");
 // Call listener function at run time
// Attach listener function on state changes


window.onscroll = function() {scrollFunction(x)};

function scrollFunction(x) {

	if (!(x.matches)){

		if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
			document.getElementById("header").style.padding = "25px 0px";
			document.getElementById("logo").style.width = "60px";
			document.getElementById("logo").style.top = "-10px";
		} else {
			document.getElementById("header").style.padding = "40px 0px";
			document.getElementById("logo").style.width = "90px";
			document.getElementById("logo").style.top = "-20px";
		}

	}

}
// x.addListener(scrollFunction);


//slider
var slides = document.querySelectorAll('#slides .slide');
var currentSlide = 0;
var slideInterval = setInterval(nextSlide,5000);

function nextSlide() {
	slides[currentSlide].className = 'slide';
	currentSlide = (currentSlide+1)%slides.length;
	slides[currentSlide].className = 'slide showing';
}


// home
// Inputat
(function($) {

    var form = $("#signup-form");
    form.steps({
        headerTag: "h3",
        bodyTag: "fieldset",
        transitionEffect: "fade",
        labels: {
            previous: 'Previous',
            next: 'Next',
            finish: 'Finish',
            current: ''
        },
        titleTemplate: '<h3 class="title">#title#</h3>',
        onFinished: function(event, currentIndex) {
            alert('Sumited');
        },
    });

    $(".toggle-password").on('click', function() {

        $(this).toggleClass("zmdi-eye zmdi-eye-off");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
          input.attr("type", "text");
        } else {
          input.attr("type", "password");
        }
    });

})(jQuery);

