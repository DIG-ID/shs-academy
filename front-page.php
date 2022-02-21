<?php
/**
 * Template Name: Home Page Template
 *
 * The template for displaying all content of the home page
 */

get_header();

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

		get_template_part( 'template-parts/home/banner' );
		get_template_part( 'template-parts/home/about-us' );
		get_template_part( 'template-parts/home/program' );
		get_template_part( 'template-parts/home/speakers' );
		get_template_part( 'template-parts/home/partners' );
		get_template_part( 'template-parts/home/past-events' );
		get_template_part( 'template-parts/home/testimonials' );

		$event_status = get_field( 'event_status' );
		if ( 'before' === $event_status ) :
			echo 'BEFORE THE EVENT';
		elseif ( 'during' === $event_status ) :
			echo 'DURING THE EVENT';
		else :
			echo 'AFTER THE EVENT';
		endif;
	endwhile;
endif;

get_footer();
