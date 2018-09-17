;(function($) {
	$(function() {
		var elmHeader = $(".header__wrap2");

		$(window).on("scroll", function() {
			if ($(this).scrollTop() > 200) {
				elmHeader.not(":animated").fadeIn();
			} else {
				elmHeader.not(":animated").fadeOut();
			}
		});
	});
})(jQuery);