<?php
/**
 * Template Name: Kontakt Page Template
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

get_template_part( 'template-parts/kontakt/intro-links' );
get_template_part( 'template-parts/kontakt/get-in-touch' );

get_footer();
