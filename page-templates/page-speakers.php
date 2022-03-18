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

 if ( $current_event_query->have_posts() ) :
 	while ( $current_event_query->have_posts() ) :
 		$current_event_query->the_post();

 		$_SESSION['event-status'] = get_field( 'event_status' );

 		if ( 'before' === $_SESSION['event-status'] ) :
 			get_template_part( 'template-parts/speakers/speakers-section' );
 		elseif ( 'during' === $_SESSION['event-status'] ) :
 			get_template_part( 'template-parts/speakers/speakers-section' );
 		else :
 			get_template_part( 'template-parts/speakers/speakers-section' );
 		endif;
 	endwhile;
 endif;

 get_footer();
