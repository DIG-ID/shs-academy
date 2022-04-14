<section id="section-about-us" class="section section-about-us">
	<span class="section-about-us__bg-img-1 rellax" data-rellax-speed="4" data-rellax-percentage="0.5"></span>
	<span class="section-about-us__bg-img-2 rellax" data-rellax-speed="-4" data-rellax-percentage="0.5"></span>
	<div class="container container__inside">
		<div class="row align-items-center justify-content-center">
			<div class="col-12 col-sm-12 col-md-10 col-lg-6">
				<?php echo wp_get_attachment_image( get_field( 'home_page_settings_about_us_image' ), 'full' ); ?>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6">
				<p class="section-about-us__subtitle"><?php the_field( 'home_page_settings_about_us_subtitle' ); ?></p>
				<h2 class="section-about-us__title"><?php the_field( 'home_page_settings_about_us_title' ); ?></h2>
				<div class="section-about-us__content">
						<?php the_field( 'home_page_settings_about_us_content' ); ?>
				</div>
				<p class="visitors-number"><span class="number"><?php the_field( 'home_page_settings_about_us_visitors_number' ); ?></span> <?php esc_html_e( 'Besucher', 'shs-a' ); ?></p>
				<a  class="main-btn main-btn__red main-btn__mob-centered" href="<?php esc_url( the_field( 'home_page_settings_about_us_button_1_link' ) ); ?>"><?php esc_html_e( 'Tickets kaufen', 'shs-a' ); ?></a>
				<a class="main-btn main-btn__white main-btn__mob-centered" href="<?php esc_url( the_field( 'home_page_settings_about_us_button_2_link' ) ); ?>"><?php esc_html_e( 'Mehr erfahren', 'shs-a' ); ?></a>
			</div>
		</div>
	</div>
</section>
