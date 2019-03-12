<?php
/**
 * lavandera functions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage lavandera
 * @since 1.0
 * @version 1.0
 */


/*
 *  Styles
 */
function lavandera_styles() {
	wp_enqueue_style( 'lavandera-fontawesome', get_theme_file_uri( '/assets/css/vendor/fontawesome/css/fontawesome-all.min.css' ) );
	wp_enqueue_style( 'lavandera-bootstrap', get_theme_file_uri( '/assets/css/vendor/bootstrap/bootstrap.min.css' ) );
	wp_enqueue_style( 'lavandera-style', get_theme_file_uri( '/assets/css/style.css' ) );
}
add_action( 'wp_enqueue_scripts', 'lavandera_styles' );

/*
 *  Javascript
 */
function lavandera_scripts() {
	wp_enqueue_script( 'lavandera-jquery', get_theme_file_uri( '/assets/js/vendor/jquery/jquery.min.js' ));
	wp_enqueue_script( 'lavandera-popper', get_theme_file_uri( '/assets/js/vendor/popper/popper.js' ));
	wp_enqueue_script( 'lavandera-bootstrap', get_theme_file_uri( '/assets/js/vendor/bootstrap/bootstrap.min.js' ));
	wp_enqueue_script( 'lavandera-js', get_theme_file_uri( '/assets/js/script.js' ));
}
add_action( 'wp_enqueue_scripts', 'lavandera_scripts' );

/*
 *  Navbar
 */
 if(function_exists('register_nav_menu')){
	 register_nav_menus(
		array(
			'navbar' => 'Menu'
		)
	);
 }