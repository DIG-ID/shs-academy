<?php

add_action( 'after_setup_theme', 'shs_theme_setup' );

// Setup theme
function shs_theme_setup() {

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'shs-a' ),
			'toparea' => __( 'Top Area Menu', 'shs-a' ),
		)
	);

	add_theme_support( 'menus' );

	add_theme_support( 'custom-logo' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

}

// Enqueue styles and scripts
add_action( 'wp_enqueue_scripts', 'shs_theme_enqueue_styles' );
function shs_theme_enqueue_styles() {

	// Get the theme data
	$the_theme     = wp_get_theme();
	$theme_version = $the_theme->get( 'Version' );
	//wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', false, $theme_version, 'all' );
	wp_enqueue_style( 'theme-styles', get_stylesheet_directory_uri() . '/dist/main.css', array(), $theme_version );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'theme-scripts', get_stylesheet_directory_uri() . '/dist/main.js', array( 'jquery' ), $theme_version, true );
}


// Theme otimizations.
require get_template_directory() . '/inc/theme-optimizations.php';

// Theme custom template tags.
require get_template_directory() . '/inc/theme-template-tags.php';

// Theme customizer options.
//require get_template_directory() . '/inc/customizer.php';
