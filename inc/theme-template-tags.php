<?php
/**
 * The custom theme tags file.
 */

/**
 * This function open the main content.
 */
function shs_theme_before_main_content() {
	?>
	<main id="main-content">
		<div class="container">
			<div class="row">
	<?php
}

add_action( 'before_main_content', 'shs_theme_before_main_content' );

/**
 * This function closes the main content.
 */
function shs_theme_after_main_content() {
	?>
			</div>
		</div>
	</main><!-- #main-content-->
	<?php
}

add_action( 'after_main_content', 'shs_theme_after_main_content' );

/**
 * This function open the main sidebar content.
 */
function shs_theme_before_main_sidebar() {
	?>
	<aside id="main-sidebar" class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-3 px-15">
		<div class="row">
	<?php
}

add_action( 'before_main_sidebar', 'shs_theme_before_main_sidebar' );

/**
 * This function closes the main sidebar content.
 */
function shs_theme_after_main_sidebar() {
	?>
	</div>
	</aside><!-- #main-sidebar -->
	<?php
}

add_action( 'after_main_sidebar', 'shs_theme_after_main_sidebar' );


/**
 * This function opens the wrapper of all the content. px-md-0
 */
function shs_theme_site_wrapper_open() {
	?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container ">
				<div class="row equal">
	<?php
}

add_action( 'site_wrapper_open', 'shs_theme_site_wrapper_open' );

/**
 * This function closes the wrapper of all the content.
 */
function shs_theme_site_wrapper_close() {
	?>
					</div><!-- .row -->
			</div><!-- .container -->
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php
}

add_action( 'site_wrapper_close', 'shs_theme_site_wrapper_close' );


/**
 * Get the current event ID
 */
function shs_theme_get_current_event() {

	$curr_event_id = '';

	$current_event_args = array(
		'post_type'      => 'events',
		'posts_per_page' => -1,
		'meta_query'     => array(
			array(
				'key'     => 'current_event',
				'value'   => '1',
				'compare' => '=',
			),
		),
	);
	$event_query = new WP_Query( $current_event_args );
	if ( $event_query->have_posts() ) :
		while ( $event_query->have_posts() ) :
			$event_query->the_post();
			$curr_event_id = get_the_ID();
		endwhile;
		wp_reset_postdata();
	endif;

	return $curr_event_id;
}

/**
 * Get the current event ID
 */
function shs_theme_get_current_program() {
	$curr_event_id = shs_theme_get_current_event();
	$curr_program  = get_field( 'event_program', $curr_event_id );
	return $curr_program;
}
