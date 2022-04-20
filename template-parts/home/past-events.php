<section id="section-past-events" class="section section-past-events">
	<span class="section-past-events__bg-img-1 rellax" data-rellax-speed="10" data-rellax-percentage="0.5"></span>
	<div class="container container__inside">
		<div class="row align-items-center justify-content-center">
			<div class="col-12 col-sm-12 col-md-12 col-lg-6">
				<div class="section-past-events__imgs-wrapper">
					<?php echo wp_get_attachment_image( get_field( 'home_page_settings_past_events_image_1' ), 'full' ); ?>
					<?php echo wp_get_attachment_image( get_field( 'home_page_settings_past_events_image_2' ), 'full' ); ?>
				</div>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6">
				<p class="section-past-events__subtitle"><?php the_field( 'home_page_settings_past_events_subtitle' ); ?></p>
				<h2 class="section-past-events__title"><?php the_field( 'home_page_settings_past_events_title' ); ?></h2>
				<div class="section-past-events__content">
						<?php the_field( 'home_page_settings_last_events_content' ); ?>
				</div>
				<a  class="main-btn main-btn__red" href="<?php esc_url( the_field( 'home_page_settings_past_events_button_1_link' ) ); ?>"><?php esc_html_e( 'Erinnerungen wecken', 'shs-a' ); ?></a>
			</div>
		</div>
	</div>
</section>
