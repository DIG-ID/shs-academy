<?php
/**
 * Template Name: Media Corner Page Template
 *
 * The template for displaying all content of the Media Corner page
 */

get_header();
	get_template_part( 'template-parts/mediacorner/mediacorner-banners' );
	get_template_part( 'template-parts/mediacorner/mediacorner-logos' );
	get_template_part( 'template-parts/mediacorner/mediacorner-photos' );
	get_template_part( 'template-parts/mediacorner/mediacorner-videos' );
	get_template_part( 'template-parts/mediacorner/mediacorner-press' );
get_footer();
