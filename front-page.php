<?php
/**
 * Template Name: Home Page Template
 *
 * The template for displaying all content of the home page
 */

get_header();
	shs_theme_before_main_content();

	$current_event_query_args = array(
		'post_type'  => 'events',
		'nopaging'   => true,
		'meta_query' => array(
			array(
				'key'   => 'current_event',
				'value' => '1',
			),
		),
	);

	$current_event_query = new WP_Query( $current_event_query_args );

	if ( $current_event_query->have_posts() ) :
		while ( $current_event_query->have_posts() ) :
			$current_event_query->the_post();
			echo '<h1>' . the_title() . '</h1>';
			$event_status = get_field( 'event_status' );
			if ( 'before' === $event_status ) :
				echo '<h2>BEFORE THE EVENT</h2>';
			elseif ( 'during' === $event_status ) :
				echo '<h2>DURING THE EVENT</h2>';
			else :
				echo '<h2>AFTER THE EVENT</h2>';
			endif;
		endwhile;
	endif;

	shs_theme_after_main_content();
get_footer();
