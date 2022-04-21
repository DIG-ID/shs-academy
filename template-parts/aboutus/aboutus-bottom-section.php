<section id="aboutus-bottom" class="section section__aboutus-bottom">
	<div class="container container__inside">
		<div class="row align-items-center justify-content-center">
			<?php
			$aboutus_bottom_section = get_field( 'about_us_bottom_section' );
			if ( $aboutus_bottom_section ) :
				?>
				<div class="col-md-6 col-sm-12 col-lg-6">
					<p class="aboutus__title-intro"><?php echo esc_html( $aboutus_bottom_section['title'] ); ?></p>
					<p class="aboutus__subtitle-intro"><?php echo esc_html( $aboutus_bottom_section['subtitle'] ); ?></p>
					<p class="aboutus__text-intro"><?php echo esc_html( $aboutus_bottom_section['description'] ); ?></p>
					<a class="aboutus__link-intro" href="<?php echo esc_url( $aboutus_bottom_section['button_link'] ); ?>"><?php echo esc_html( $aboutus_bottom_section['button_text'] ); ?></a>
				</div>
				<div class="col-md-6 col-sm-12 col-lg-6 aboutus__leftCol">
					<?php echo wp_get_attachment_image( $aboutus_bottom_section['image'], 'full' ); ?>
				</div>
				<?php
			endif;
			?>
		</div>
	</div>
</section>
