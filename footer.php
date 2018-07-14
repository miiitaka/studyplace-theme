	<footer>
		<div class="l-footer__pagetop">
			<nav class="footer__pagetop" id="pagetop">
				<img src="<?php echo get_template_directory_uri(); ?>/img/pageTop.png" width="" height=""><br>
				Page top
			</nav>
		</div>
		<div class="l-footer__contents">
			<figure>
				<img src="<?php echo get_template_directory_uri(); ?>/img/footer_logo.png" width="" height="" alt="">
			</figure>
			<div class="footer__contents-menu-wrap">
				<ul class="footer__contents-menu">
					<li><a href="">わたしたちが目指すもの</a></li>
					<li><a href="">サービスを知る</a></li>
					<li><a href="">会社を知る</a></li>
					<li><a href="">SPMEDIA.me</a></li>
					<li><a href="">ニュース</a></li>
					<li><a href="">お問い合わせ</a></li>
				</ul>
			</div>
			<div class="footer__contents-menu-wrap">
				<ul class="footer__contents-menu">
					<li><a href="">プライバシーポリシー</a></li>
					<li><a href="">お問い合わせ</a></li>
				</ul>
			</div>
			<small>&copy; 2018 STUDY PLACE.me. All rights reserved.</small>
		</div>
	</footer>
<script>
var ua = navigator.userAgent;
console.log(ua);
if (ua.indexOf('iPhone') > 0 || ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0) {
	var windowSize = $(window).width();
	$('#media_slider').bxSlider({
		minSlides: 2,
		maxSlides: 2,
		slideWidth: windowSize/2 - 20
	});
} else {
	$('#media_slider').bxSlider({
		minSlides: 5,
		maxSlides: 5,
		slideWidth: 230
	});
	$('.contents__media .bx-prev, .contents__media .bx-next').text('');
}
</script>
<?php wp_footer(); ?>
</body>
</html>
