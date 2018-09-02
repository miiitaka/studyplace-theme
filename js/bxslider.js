;(function($){
	$(function(){
		var ua = navigator.userAgent;

		if (ua.indexOf("iPhone") > 0 || ua.indexOf("Android") > 0 && ua.indexOf("Mobile") > 0) {
			var windowSize = $(window).width();
			$("#media_slider").bxSlider({
				nextText: "",
				maxSlides: 2,
				minSlides: 2,
				prevText: "",
				slideWidth: windowSize / 2 - 20
			});
		} else {
			$("#media_slider").bxSlider({
				nextText: "",
				maxSlides: 5,
				minSlides: 5,
				prevText: "",
				slideWidth: 200
			});
		}
	});
})(jQuery);