<?php ?>

<section id="section-program" class="section section-program">
	<div class="container">
		<div class="row align-items-center justify-content-center">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12">
				<div class="section-program__content">
					<h2 class="section-program__title"><?php the_field( 'home_page_settings_program_title' ); ?></h2>
					<p class="section-program__description"><?php the_field( 'home_page_settings_program_description' ); ?></p>
					<?php
					$event_program = get_field( 'event_program' );
					if ( $event_program ) :
						$file = get_field( 'program_file', $event_program );
						?>
						<a class="main-btn main-btn__white" href="<?php echo esc_url( $file ); ?>" target="_blank"><?php esc_html_e( 'Download Program', 'shs-a' ); ?></a>
						<?php
					endif;
					?>
				</div>
			</div>
		</div>
	</div>
	<div class="section-program__thumbnails">
		<div class="container">
			<div class="row justify-space-between">
				<?php
				$images = get_field( 'home_page_settings_program_thumbnails' );
				$size = 'full'; // (thumbnail, medium, large, full or custom size)
				if ( $images ): ?>
					<?php foreach ( $images as $image_id ): ?>
						<div class="col-12 col-sm-12 col-md-4 col-lg-4">
							<?php echo wp_get_attachment_image( $image_id, $size ); ?>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
