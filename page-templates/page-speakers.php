<?php
/**
 * Template Name: Speakers Page Template
 *
 * The template for displaying all content of the speakers page
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

$_SESSION['page_template_id'] = get_the_ID();

if ( $current_event_query->have_posts() ) :
	while ( $current_event_query->have_posts() ) :
		$current_event_query->the_post();

		$event_status = get_field( 'event_status' );

		if ( 'before' === $event_status ) :
			get_template_part( 'template-parts/speakers/speakers-section' );
		elseif ( 'during' === $event_status ) :
			get_template_part( 'template-parts/speakers/speakers-section' );
		else :
			get_template_part( 'template-parts/speakers/speakers-section' );
		endif;
	endwhile;
endif;

get_footer();
