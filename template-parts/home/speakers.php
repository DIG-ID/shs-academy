<?php ?>

<section id="speakers-section" class="section section__speakers">
	<span class="bg-img-1 rellax" data-rellax-speed="6" data-rellax-percentage="0.5"></span>	
	<span class="bg-img-2 rellax" data-rellax-speed="-4" data-rellax-percentage="0.5"></span>
	<div class="container container__inside">
		<div class="row">
			<div class="col-12 text-center">
				<h2 class="speakers-section-title"><?php esc_html_e( 'Die Speaker', 'shs-a' ); ?></h2>
			</div>
		</div>
		<div class="row align-items-center justify-content-center">
			<?php
			$speaker_posts = get_field( 'event_speakers' );
			if ( $speaker_posts ) :
				foreach ( $speaker_posts as $post ) :
					// Setup this post for WP functions (variable must be named $post).
					setup_postdata( $post );
					if ( get_field( 'speaker_show_on_the_home_page', $post->ID ) ) :
						?>
						<div class="col-12 col-sm-12 col-md-4 col-lg-4">
							<figure class="speaker-card">
								<?php the_post_thumbnail( 'full' ); ?>
								<figcaption class="speaker-card__content">
									<p class="speaker-card__title"><?php the_title(); ?></p>
									<p class="speaker-card__position"><?php the_field( 'speaker_position' ); ?></p>
								</figcaption>
							</figure>
						</div>
						<?php
					endif;
				endforeach;
				// Reset the global post object so that the rest of the page works correctly.
				wp_reset_postdata();
			endif; ?>
		</div>
		<div class="row">
			<div class="col-12 text-center">
				<a class="main-btn main-btn__red" href="/speakers"><?php esc_html_e( 'See All Speakers', 'shs-a' ); ?></a>
			</div>
		</div>
	</div>
</section>
