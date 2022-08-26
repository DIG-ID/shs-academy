<?php
/**
 * Template Name: Wrap Up Page Template
 *
 * The template for displaying all content of the wrap up page
 */

get_header();
	get_template_part( 'template-parts/wrapup/wrapup-page-intro' );
	get_template_part( 'template-parts/wrapup/wrapup-page-gallery' );
	get_template_part( 'template-parts/wrapup/wrapup-page-form' );
get_footer();