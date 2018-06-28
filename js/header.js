$(function() {
	var obj_top = $('.l-contents__notice').offset().top;
	var header = $('.header__wrap2');
	var menu_height = header.height();
	var start_pos = 0;
	var now_pos = $(this).scrollTop();

	headerToggle(header, obj_top, now_pos);
	$(window).on('scroll', function(){
		now_pos = $(this).scrollTop();
		headerToggle(header, obj_top, now_pos);
	});

	function headerToggle( target, target_pos, current_pos ) {
		var now_pos = $(document).scrollTop();
		if( current_pos > start_pos) {
			if ( target_pos < now_pos) {
				target.not(':animated').fadeIn();
			}
		} else {
			target.not(':animated').fadeOut();
		}
		start_pos = current_pos;
	}
});
