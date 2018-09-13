	<footer>
		<div class="l-footer__pagetop">
			<nav class="footer__pagetop" id="pagetop">
				<img src="<?php echo get_template_directory_uri(); ?>/img/page-top.png" width="23" height="28"><br>
				Page top
			</nav>
		</div>
		<div class="l-footer__contents">
			<figure>
				<img src="<?php echo get_template_directory_uri(); ?>/img/footer-logo.png" width="185" height="101" alt="">
			</figure>
			<div class="footer__contents-menu-wrap">
				<ul class="footer__contents-menu">
					<li><a href="">わたしたちが目指すもの</a></li>
					<li><a href="<?php echo esc_url( home_url( '/service/' ) ) ?>">サービスを知る</a></li>
					<li><a href="<?php echo esc_url( home_url( '/about/' ) ) ?>">会社を知る</a></li>
					<li><a href="<?php echo esc_url( home_url( '/category/spmedia/' ) ) ?>">SPMEDIA.me</a></li>
					<li><a href="<?php echo esc_url( home_url( '/category/news/' ) ) ?>">ニュース</a></li>
					<li><a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ) ?>">プライバシーポリシー</a></li>
					<li><a href="<?php echo esc_url( home_url( '/contact/' ) ) ?>">お問い合わせ</a></li>
				</ul>
			</div>
			<small>&copy; 2018 STUDY PLACE.me. All rights reserved.</small>
		</div>
	</footer>
	<div class="l-site__sns">
		<ul>
			<li class="site__sns-facebook">
				<a href="https://www.facebook.com/www.studyplace.me/"><i class="fa fa-facebook" aria-hidden="true"></i></i></a>
			</li>
			<li class="site__sns-twitter">
				<a href="https://twitter.com/StudyplaceM"><i class="fa fa-twitter" aria-hidden="true"></i></i></a>
			</li>
			<li class="site__sns-instagram">
				<a href="https://www.instagram.com/studyplace.garage/"><i class="fa fa-instagram" aria-hidden="true"></i></i></a>
			</li>
		</ul>
	</div>
<?php wp_footer(); ?>
</body>
</html>
