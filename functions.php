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
	$version = time();

	wp_enqueue_style( 'theme-reset',    get_template_directory_uri() . '/css/reset.css', array(), $version );
	wp_enqueue_style( 'fontawesome',    get_template_directory_uri() . '/css/fontawesome/css/font-awesome.min.css', array(), $version );
	wp_enqueue_style( 'bxslider-style', get_template_directory_uri() . '/css/bxslider/jquery.bxslider.css', array( 'theme-reset' ), $version );
	wp_enqueue_style( 'theme-style',    get_stylesheet_uri() );
	wp_enqueue_style( 'theme-responsive-style', get_template_directory_uri() . '/css/responsive.css', array( 'theme-reset', 'theme-style' ), $version );

	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), $version, false );
	wp_enqueue_script( 'bxslider',     get_template_directory_uri() . '/js/jquery.bxslider.js',  array( 'jquery' ), $version );
	wp_enqueue_script( 'pagetop-js',   get_template_directory_uri() . '/js/pagetop.js',          array( 'jquery' ), $version );
	wp_enqueue_script( 'header-js',    get_template_directory_uri() . '/js/header.js',           array( 'jquery' ), $version );
	wp_enqueue_script( 'hamburger-js', get_template_directory_uri() . '/js/hamburger.js',        array( 'jquery' ), $version );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );
