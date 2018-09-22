;(function($){
	$(function(){
		var ua = navigator.userAgent;

		if (ua.indexOf("iPhone") > 0 || ua.indexOf("Android") > 0 && ua.indexOf("Mobile") > 0) {
			var windowSize = $(window).width();
			$("#media_slider").bxSlider({
				maxSlides: 2,
				minSlides: 2,
				nextText: "",
				pager: false,
				prevText: "",
				slideWidth: windowSize / 2 - 20
			});
		} else {
			$("#media_slider").bxSlider({
				maxSlides: 5,
				minSlides: 5,
				nextText: "",
				pager: false,
				prevText: "",
				slideMargin: 1,
				slideWidth: 200
			});
		}
	});
})(jQuery);
