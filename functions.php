<?php
/**
 * StudyPlace.me functions and definitions
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * @package    WordPress
 * @subpackage StudyPlace.me
 * @since      1.0.0
 */

/**
 * Theme Setup
 *
 * @since 1.0.0
 * @link  https://developer.wordpress.org/reference/functions/add_theme_support/
 */
function theme_setup() {
	// Support title tag
	add_theme_support( 'title-tag' );

	// Add thumbnail.
	add_theme_support( 'post-thumbnails' );

	// Add post-feed, comment-feed.
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	$args = array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption'
	);
	add_theme_support( 'html5', $args );

	// Support Custom logo
	$args = array(
		'height'      => 0,
		'width'       => 0,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' )
	);
	add_theme_support( 'custom-logo', $args );

	// Add editor style.
	add_editor_style();

	// Set thumbnail size.
	set_post_thumbnail_size( 1200, 9999 );

	// Register Nav Menu
	register_nav_menus( array(
		'global' => 'Global Menu',
		'footer' => 'Footer Menu'
	) );

	theme_remove_action_head();
}
add_action( 'after_setup_theme', 'theme_setup' );


/**
 * wp_head() remove
 *
 * @since 1.0.0
 */
function theme_remove_action_head() {
	// Remove WordPress version information.
	remove_action( 'wp_head', 'wp_generator' );

	// Remove wlwmanifest address.（ Windows Live Writer for WordPress ）
	remove_action( 'wp_head', 'wlwmanifest_link' );

	// Remove EditURI address.
	remove_action( 'wp_head', 'rsd_link' );

	// Remove Short Link
	remove_action( 'wp_head', 'wp_shortlink_wp_head' );

	// Remove emoji DNS prefetch.
	add_filter( 'emoji_svg_url', '__return_false' );

	// Remove emoji script and style remove.
	remove_action( 'wp_head',             'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles',     'print_emoji_styles' );
	remove_action( 'admin_print_styles',  'print_emoji_styles' );
}

/**
 * scripts and styles add
 *
 * @since 1.0.0
 */
function theme_scripts() {
	//$version = time();
	$version = '1.0.0';
	$media = 'screen and (max-width: 750px)';

	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), $version );

	wp_enqueue_style( 'theme-style',      get_stylesheet_uri(), array(), $version );
	wp_enqueue_style( 'theme-reset',      get_template_directory_uri() . '/css/reset.css',      array( 'theme-style' ), $version );
	wp_enqueue_style( 'theme-base',       get_template_directory_uri() . '/css/base.css',       array( 'theme-reset' ), $version );
	wp_enqueue_style( 'theme-responsive', get_template_directory_uri() . '/css/responsive.css', array( 'theme-base' ),  $version, $media );
	wp_enqueue_style( 'theme-default',    get_template_directory_uri() . '/css/default.css',    array( 'theme-responsive' ),  $version );
	wp_enqueue_style( 'fontawesome',      get_template_directory_uri() . '/css/fontawesome/css/font-awesome.min.css', array(), $version );

	wp_enqueue_script( 'pagetop.jsfile',   get_template_directory_uri() . '/js/pagetop.js',   array( 'jquery' ), $version );
	wp_enqueue_script( 'header.jsfile',    get_template_directory_uri() . '/js/header.js',    array( 'jquery' ), $version );
	wp_enqueue_script( 'hamburger.jsfile', get_template_directory_uri() . '/js/hamburger.js', array( 'jquery' ), $version );

	if ( is_home() ) {
		wp_enqueue_style( 'bxslider-style',   get_template_directory_uri() . '/css/bxslider/jquery.bxslider.css', array( 'theme-reset' ), $version );
		wp_enqueue_script( 'jquery.bxslider', get_template_directory_uri() . '/js/jquery.bxslider.js', array( 'jquery' ), $version );
		wp_enqueue_script( 'bxslider.jsfile', get_template_directory_uri() . '/js/bxslider.js',        array( 'jquery.bxslider' ), $version );
	}
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

/**
 * Set default editor.
 *
 * @since  1.0.0
 * @param  string $editor
 * @return string $editor
 */
function set_default_editor( $editor ) {
	$editor = 'html';
	return $editor;
}
add_filter( 'wp_default_editor', 'set_default_editor' );

/**
 * Stop rich editor (page).
 *
 * @param  boolean $editor
 * @return boolean $editor
 */
function stop_rich_editor( $editor ) {
	if ( 'page' === get_current_screen()->id ) {
		$editor = false;
	}
	return $editor;
}
add_filter( 'user_can_richedit', 'stop_rich_editor' );

/**
 * Widget Area Register
 *
 * @since 1.0.0
 * @link  https://developer.wordpress.org/reference/functions/register_sidebar/
 */
function theme_widgets_init() {
	register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'sidebar-1',
		'description'   => 'Add widgets here to appear in your sidebar.',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>'
	) );
}
add_action( 'widgets_init', 'theme_widgets_init' );

/**
 * Remove title category: tag: archive:
 *
 * @param  string $title
 * @return string $title
 */
function remove_pre_title_word( $title ) {
	if ( is_category() ) {
		$title = single_cat_title( '', false );
	} elseif ( is_tag() ) {
		$title = single_tag_title( '', false );
	} elseif ( is_post_type_archive() ){
		$title = post_type_archive_title( '', false );
	}
	return $title;
}
add_filter( 'get_the_archive_title', 'remove_pre_title_word' );

/**
 * Google Tag Manager(AMP).
 */
function tag_manager_script () {
	if ( !is_user_logged_in() ) {
		echo '<script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>';
	}
}
add_action( 'amp_post_template_head', 'tag_manager_script' );

function tag_manager_analytics () {
	if ( !is_user_logged_in() ) {
		echo '<amp-analytics config="https://www.googletagmanager.com/amp.json?id=GTM-WXXQPRB&gtm.url=SOURCE_URL" data-credentials="include"></amp-analytics>';
	}
}
add_action( 'amp_post_template_footer', 'tag_manager_analytics' );

/**
 * Login page customize.
 *
 * @since 1.0.0
 */
function theme_login_style() { ?>
	<style>
		body.login div#login h1 a {
			background-image: url("https://www.studyplace.me/wp-content/uploads/2018/09/logo2.png");
			background-size: contain;
			height: 60px;
			width: 100%;
		}
		body.login div#login form#loginform p.submit input#wp-submit {
			background: #004c8c;
			border-color: #004c8c;
			box-shadow: 0 1px 0 #004c8c;
			text-shadow: none;
		}
		#backtoblog {
			display: none;
		}
	</style>
<?php }
add_action( 'login_enqueue_scripts', 'theme_login_style' );