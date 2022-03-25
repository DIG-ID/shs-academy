<?php
/**
 * Template Name: Terms and Conditions Page Template
 *
 * The template for displaying all content of the Terms and Conditions page
 */

get_header();?>
<main id="terms-section" class="section section__terms">
	<span class="section-about-us__bg-img-2 rellax" data-rellax-speed="-4" data-rellax-percentage="0.5"></span>
	<div class="container container__inside">
		<div class="row">
			<div class="col-md-6 col-sm-12 col-lg-6 col-xl-6">
			<?php the_content(); ?>
			</div>
			<div class="col-md-6 col-sm-12 col-lg-6 col-xl-6">
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>
