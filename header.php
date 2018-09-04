<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ) ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=0">
	<meta name="theme-color" content="#004c8c">
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
					$image   = wp_get_attachment_image_src( $custom_logo_id, 'full' );
					$format  = '<a href="'  . esc_url( home_url( '/' ) ) . '">';
					$format .= '<img src="' . $image[0] . '" alt="' . esc_attr( get_bloginfo( 'name' )) . '">';
					$format .= '</a>';
					echo $format;
				?>
			</h1>
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
						<img src="<?php echo get_template_directory_uri(); ?>/img/icon_hamburger.png" alt="ハンバーガーメニュー">
					</figure>
					<figure class="global_nav-sp-open">
						<img src="<?php echo get_template_directory_uri(); ?>/img/icon_open_hamburger.png" alt="ハンバーガーメニュー">
					</figure>
				</div>

				<div class="contact_button">
					<a href="<?php echo esc_url( home_url( '/contact/' ) ) ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/img/contact.png" class="pc__img" width="149" height="42" alt="お問い合わせ">
						<img src="<?php echo get_template_directory_uri(); ?>/img/sp_contact.png" class="sp__img" alt="お問い合わせ">
					</a>
				</div>
			</nav>
		</header>
	</div>

	<div class="header__wrap2">
		<header class="header">
			<h1><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="STUDY PLACE.ME"></a></h1>
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
						<img src="<?php echo get_template_directory_uri(); ?>/img/icon_hamburger.png" alt="ハンバーガーメニュー">
					</figure>
					<figure class="global_nav-sp-open">
						<img src="<?php echo get_template_directory_uri(); ?>/img/icon_open_hamburger.png" alt="ハンバーガーメニュー">
					</figure>
				</div>

				<div class="contact_button">
					<a href="<?php echo esc_url( home_url( '/contact/' ) ) ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/img/contact.png" class="pc__img" width="149" height="42" alt="お問い合わせ">
						<img src="<?php echo get_template_directory_uri(); ?>/img/sp_contact.png" class="sp__img" alt="お問い合わせ">
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
				<li><a href="">プライバシーポリシー</a></li>
				<li><a href="<?php echo esc_url( home_url( '/contact/' ) ) ?>">お問い合わせ</a></li>
			</ul>

			<ul class="l-site__sns">
				<li class="site__sns-facebook">
					<a href=""><i class="fa fa-facebook" aria-hidden="true"></i></i></a>
				</li>
				<li class="site__sns-twitter">
					<a href=""><i class="fa fa-twitter" aria-hidden="true"></i></i></a>
				</li>
				<li class="site__sns-instagram">
					<a href=""><i class="fa fa-instagram" aria-hidden="true"></i></i></a>
				</li>
			</ul>
		</nav>
	</div>
