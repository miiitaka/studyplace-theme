$(function() {
	var windowHeight = $(window).height();
	$(".global_nav-hamburger").css("height", windowHeight + 'px');
	$(".global_nav-sp img").on("click", function() {
		$(".global_nav-sp").toggleClass("open");
		$(".global_nav-hamburger").toggleClass("open");
	});
});
