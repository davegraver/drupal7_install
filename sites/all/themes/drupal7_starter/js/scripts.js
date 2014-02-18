(function($) {
	// Main Menu - Hide/Show
	enquire.register("screen and (max-width:767px)", {
		match : function() {
			$('.main-menu h2').addClass('show');
			$('.main-menu ul.menu').css('display', 'none');
		},
		unmatch : function() {
			$('.main-menu h2').removeClass('show');
			$('.main-menu ul.menu').css('display', 'block');
		}
	});

	// Main Menu - Open/Close
	$('.main-menu h2').click(function() {
		$('.main-menu ul.menu').slideToggle(250, function() {
		});
		return false;
	});

	// Scroll to Top
	jQuery(document).ready(function() {
		var offset = 220;
		var duration = 500;
		jQuery(window).scroll(function() {
			if (jQuery(this).scrollTop() > offset) {
				jQuery('.back-to-top').fadeIn(duration);
			} else {
				jQuery('.back-to-top').fadeOut(duration);
			}
		});

		jQuery('.back-to-top').click(function(event) {
			event.preventDefault();
			jQuery('html, body').animate({scrollTop: 0}, duration);
			return false;
		})
	});
})(jQuery);