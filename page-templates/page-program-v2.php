<?php
/**
 * Template Name: Program v2 Page Template
 *
 * The template for displaying all content of the program page
 */

get_header();
	$_SESSION['page_template_id'] = get_the_ID();
	get_template_part( 'template-parts/program/programs-section-v2' );
get_footer();
