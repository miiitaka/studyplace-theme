;(function($){
	$(function(){
		var ua = navigator.userAgent;

		if (ua.indexOf("iPhone") > 0 || ua.indexOf("Android") > 0 && ua.indexOf("Mobile") > 0) {
			var windowSize = $(window).width();
			$("#media_slider").bxSlider({
				useCSS: false,
				minSlides: 2,
				maxSlides: 2,
				slideWidth: windowSize / 2 - 20
			});
		} else {
			$("#media_slider").bxSlider({
				useCSS: false,
				minSlides: 5,
				maxSlides: 5,
				slideWidth: 200
			});
			$(".contents__media .bx-prev, .contents__media .bx-next").text("");
		}
	});
})(jQuery);