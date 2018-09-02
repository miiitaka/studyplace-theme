;(function($){
	$(function() {
		var
			pos = $('.l-contents__notice').offset(),
			header = $('.header__wrap2'),
			start_pos = 0,
			now_pos = $(this).scrollTop;

		headerToggle(header, pos.top, now_pos);

		$(window).on('scroll', function(){
			now_pos = $(this).scrollTop;
			headerToggle(header, pos.top, now_pos);
		});

		function headerToggle(target, target_pos, current_pos) {
			var now_pos = $(document).scrollTop;
			if( target_pos < now_pos && current_pos < start_pos ) {
				target.not(':animated').fadeIn();
			} else {
				target.not(':animated').fadeOut();
			}
			start_pos = current_pos;
		}
	});
})(jQuery);
