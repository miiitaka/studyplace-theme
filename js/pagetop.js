;(function($){
	$(function(){
		$("#pagetop").on("click", function(){
			$("html, body").animate({scrollTop: 0}, 500);
		});
	});
})(jQuery);