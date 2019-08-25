<?php
/**
 * Theme customizations
 *
 * @package   JoeDSolidLandingPageDemo
 * @author    Joe Domingo, Web Developer, UI/UX Engineer
 * @link      https://joedomingo.online
 * @copyright Copyright (c) 2019, Joe Domingo, Web Developer, UI/UX Engineer
 * @license   GPL-2.0+
 */



// Custom styles
function jdvlpd_enqueue_styles() {
	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=IBM+Plex+Sans:400,600' );
	wp_enqueue_style( 'jdvlpd-solid-landing-styles', get_template_directory_uri() . '/dist/css/style.css' );
	// wp_enqueue_style( 'jdvlpd-styles', get_stylesheet_directory() );
}
add_action( 'wp_enqueue_scripts', 'jdvlpd_enqueue_styles' );

// Custom JS
function jdvlpd_enqueue_scripts() {
  wp_enqueue_script( 'anime-scripts', '//unpkg.com/animejs@3.0.1/lib/anime.min.js', array(), '20151215', false );
  wp_enqueue_script( 'scrollreveal-scripts', '//unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js', array(), '20151215', false );
  wp_enqueue_script( 'main-scripts', get_template_directory_uri() . '/dist/js/main.min.js', array(), '20151215', true );
}
add_action( 'wp_enqueue_scripts', 'jdvlpd_enqueue_scripts' );
