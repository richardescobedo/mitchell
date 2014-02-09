(function ($) {
	var offset, scroll, fixed;
	$(function() {
		offset = $('#super-header').height();
	});
	$(window).scroll(function() {
		fixed = $('#navbar').hasClass('navbar-fixed-top');
		scroll = $(window).scrollTop();
		if(scroll > offset && !fixed) {
			$('#navbar').addClass('navbar-fixed-top');
		}
		else if(scroll < offset && fixed) {
			$('#navbar').removeClass('navbar-fixed-top');	
		}
	});
}(jQuery));