<?php

/**
 * Setup theme
 */
function shs_theme_setup() {

	register_nav_menus(
		array(
			'primary'   => __( 'Primary Menu', 'shs-a' ),
			'toparea'   => __( 'Top Area Menu', 'shs-a' ),
			'copyright' => __( 'Copyright Menu', 'shs-a' ),
		)
	);

	add_theme_support( 'menus' );

	add_theme_support( 'custom-logo' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

	add_image_size( 'event-gallery-full', 1920, 900, array( 'center', 'center' ) );

	add_image_size( 'event-gallery-thumb', 350, 350, array( 'center', 'center' ) );

	add_image_size( 'media-corner-logos-thumb', 170, 170, array( 'center', 'center' ) );

	add_image_size( 'media-corner-photos-thumb', 276, 276, array( 'center', 'center' ) );

}

add_action( 'after_setup_theme', 'shs_theme_setup' );

/**
 * Register our sidebars and widgetized areas.
 */
function shs_theme_footer_widgets_init() {

	register_sidebar(
		array(
			'name'          => 'Footer',
			'id'            => 'footer',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		),
	);

}
add_action( 'widgets_init', 'shs_theme_footer_widgets_init' );

/**
 * Enqueue styles and scripts
 */
function shs_theme_enqueue_styles() {

	//Get the theme data
	$the_theme     = wp_get_theme();
	$theme_version = $the_theme->get( 'Version' );
	//wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', false, $theme_version, 'all' );
	wp_enqueue_style( 'theme-styles', get_stylesheet_directory_uri() . '/dist/main.css', array(), $theme_version );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'theme-scripts', get_stylesheet_directory_uri() . '/dist/main.js', array( 'jquery' ), $theme_version, false );
	if ( is_page_template( 'page-templates/page-ticket-system.php' ) ) :
		wp_enqueue_script( 'incert-api', 'https://myincert.com/public/api/incertClient.js', array(), $theme_version, true );
		wp_enqueue_script( 'incert-settings', get_stylesheet_directory_uri() . '/dist/incert.js', array( 'jquery' ), $theme_version, true );
	endif;
}
add_action( 'wp_enqueue_scripts', 'shs_theme_enqueue_styles' );

// Theme otimizations.
require get_template_directory() . '/inc/theme-optimizations.php';

// Theme custom template tags.
require get_template_directory() . '/inc/theme-template-tags.php';

// Theme customizer options.
require get_template_directory() . '/inc/customizer.php';
