<?php
/**
 * Template Name: Presentations Page Template
 *
 * The template for displaying all content of the presentations page
 */
global $post;
get_header();
if ( ! post_password_required( $post ) ) {
	get_template_part( 'template-parts/presentations/content' );
}else{
	echo get_the_password_form();
}
get_footer();
