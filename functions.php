<?php
function theme_setup() {
	// Support title tag
	add_theme_support( 'title-tag' );
	$args = array(
		'height'      => 0,
		'width'       => 0,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' )
	);
	add_theme_support( 'custom-logo', $args );
	register_nav_menus( array(
		'global' => 'Global Menu'
	) );
}
add_action( 'after_setup_theme', 'theme_setup' );

function theme_scripts() {
	wp_enqueue_style( 'theme-reset', get_template_directory_uri() . '/css/reset.css' );
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/fontawesome/css/font-awesome.min.css' );
	wp_enqueue_style( 'theme-font', 'https://fonts.googleapis.com/css?family=Vollkorn' );
	wp_enqueue_style( 'bxslider-style', 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css' );
	wp_enqueue_style( 'theme-style',  get_stylesheet_uri() );
	wp_enqueue_style( 'theme-responsive-style', get_template_directory_uri() . '/css/responsive.css' );

	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', '', '3.3.1', false );
	wp_enqueue_script( 'bxslider', 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js', '', '3.3.1', false );
	wp_enqueue_script( 'pagetop-js', get_template_directory_uri() . '/js/pagetop.js', array( 'jquery' ), '1.0.0' );
	wp_enqueue_script( 'header-js', get_template_directory_uri() . '/js/header.js', array( 'jquery' ), '1.0.0' );
	wp_enqueue_script( 'hamburger-js', get_template_directory_uri() . '/js/hamburger.js', array( 'jquery' ), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );
