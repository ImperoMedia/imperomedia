jQuery(function($) {
	
	var $nav = $('.nav-container');
	
	$(window).scroll(function () {
		if ($(this).scrollTop() > 136) {
			$nav.addClass("f-nav");
		} else {
			$nav.removeClass("f-nav");
		}
	});

} );

// JQUERY SCRIPT BY HERMANN STEPHANE NTSAMO

jQuery(function($) {
	var pies = $('figure.pie');
	$.each(pies, function() {
		var degree = $(this).attr('data-pie');
		$(this).children('.slice').children('.inner').css({
			'-webkit-transform': 'rotate(' + degree + 'deg)',
			'-moz-transform': 'rotate(' + degree + 'deg)',
			'-o-transform': 'rotate(' + degree + 'deg)',
			'transform': 'rotate(' + degree + 'deg)',
		});
	});
});