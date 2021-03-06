<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ) ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=0">
	<meta name="theme-color" content="#004c8c">
	<meta name="author" content="<?php bloginfo('name'); ?>">
	<link rel="dns-prefetch" href="https://fonts.googleapis.com/">
	<link rel="dns-prefetch" href="https://www.googletagmanager.com">
	<link rel="dns-prefetch" href="https://ajax.googleapis.com/">
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src= 'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-N59XL6J');</script>
	<!-- End Google Tag Manager -->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N59XL6J" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<div class="header__wrap">
		<header class="header">
			<h1>
				<?php
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					if ( $custom_logo_id ) {
						$image   = wp_get_attachment_image_src( $custom_logo_id, 'full' );
						$format  = '<a href="'  . esc_url( home_url( '/' ) ) . '">';

						if ( is_archive() || is_page( 'privacy-policy' ) || is_page( 'contact' ) || is_404() ) {
							$format .= '<img id="header_logo" src="' . get_template_directory_uri() . '/img/logo2.png' . '" alt="' . esc_attr( get_bloginfo( 'name' ) ) . '">';
						} else {
							$format .= '<img id="header_logo" src="' . $image[0] . '" alt="' . esc_attr( get_bloginfo( 'name' ) ) . '">';
						}
						$format .= '</a>';
						echo $format;
					}
				?>
			</h1>
			<?php if ( is_archive() || is_page( 'privacy-policy' ) || is_page( 'contact' ) || is_404() ) :  ?>
			<nav class="global_nav black">
			<?php else : ?>
			<nav class="global_nav">
			<? endif; ?>
				<?php
				if ( has_nav_menu( 'global' ) ) {
					wp_nav_menu( array(
						'theme_location' => 'global'
					) );
				}
				?>

				<div class="global_nav-sp">
					<figure class="global_nav-sp-close">
						<img src="<?php echo get_template_directory_uri(); ?>/img/icon-open-hamburger.png" alt="open menu">
					</figure>
					<figure class="global_nav-sp-open">
						<img src="<?php echo get_template_directory_uri(); ?>/img/icon-close-hamburger.png" alt="close menu">
					</figure>
				</div>

				<div class="contact_button">
					<a href="<?php echo esc_url( home_url( '/contact/' ) ) ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/img/contact.png" class="pc__img" width="149" height="42" alt="お問い合わせ">
						<img src="<?php echo get_template_directory_uri(); ?>/img/sp-contact.png" class="sp__img" alt="お問い合わせ">
					</a>
				</div>
			</nav>
		</header>
	</div>

	<div class="header__wrap2">
		<header class="header">
			<h1><a href="<?php echo esc_url( home_url( '/' ) ) ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="株式会社スタディプレイス.me"></a></h1>
			<nav class="global_nav">
				<?php
				if ( has_nav_menu( 'global' ) ) {
					wp_nav_menu( array(
						'theme_location' => 'global'
					) );
				}
				?>

				<div class="global_nav-sp">
					<figure class="global_nav-sp-close">
						<img src="<?php echo get_template_directory_uri(); ?>/img/icon-open-hamburger.png" alt="open menu">
					</figure>
					<figure class="global_nav-sp-open">
						<img src="<?php echo get_template_directory_uri(); ?>/img/icon-close-hamburger.png" alt="close menu">
					</figure>
				</div>

				<div class="contact_button">
					<a href="<?php echo esc_url( home_url( '/contact/' ) ) ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/img/contact.png" class="pc__img" width="149" height="42" alt="お問い合わせ">
						<img src="<?php echo get_template_directory_uri(); ?>/img/sp-contact.png" class="sp__img" alt="お問い合わせ">
					</a>
				</div>
			</nav>
		</header>
	</div>

	<div class="global_nav-hamburger-wrapper">
		<nav class="global_nav-hamburger">
			<h2>Menu</h2>
			<?php
			if ( has_nav_menu( 'global' ) ) {
				wp_nav_menu( array(
					'theme_location' => 'global'
				) );
			}
			?>

			<ul class="global_site_nav">
				<li><a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ) ?>">プライバシーポリシー</a></li>
				<li><a href="<?php echo esc_url( home_url( '/contact/' ) ) ?>">お問い合わせ</a></li>
			</ul>

			<ul class="l-site__sns">
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
		</nav>
	</div>
