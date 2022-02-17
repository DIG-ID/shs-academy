<?php

?>
<section id="about-us-section" class="section section__about-us">
	<span class="bg-img-1 rellax" data-rellax-speed="4" data-rellax-percentage="0.5"></span>
	<span class="bg-img-2 rellax" data-rellax-speed="-4" data-rellax-percentage="0.5"></span>
	<div class="container">
		<div class="row align-items-center justify-content-center">
			<div class="col-12 col-sm-12 col-md-5 col-lg-5">
				<?php echo wp_get_attachment_image( get_field( 'home_page_settings_about_us_image' ), 'full' ); ?>
			</div>
			<div class="col-12 col-sm-12 col-md-5 col-lg-5">
				<p class="section__subtitle"><?php the_field( 'home_page_settings_about_us_subtitle' ); ?></p>
				<h2 class="section__title"><?php the_field( 'home_page_settings_about_us_title' ); ?></h2>
				<div class="section__content">
						<?php the_field( 'home_page_settings_about_us_content' ); ?>
				</div>
				<a  class="main-btn main-btn__red" href="<?php esc_url( the_field( 'home_page_settings_about_us_button_1_link' ) ); ?>"><?php esc_html_e( 'Get Tickets Now', 'shs-a' ); ?></a>
				<a class="main-btn main-btn__white" href="<?php esc_url( the_field( 'home_page_settings_about_us_button_2_link' ) ); ?>"><?php esc_html_e( 'Learn More', 'shs-a' ); ?></a>
			</div>
		</div>
	</div>
</section>
