<?php ?>

<section id="section-speakers" class="section section-speakers">
	<span class="section-speakers__bg-img-1 rellax" data-rellax-speed="6" data-rellax-percentage="0.5"></span>	
	<span class="section-speakers__bg-img-2 rellax" data-rellax-speed="-4" data-rellax-percentage="0.5"></span>
	<div class="container container__inside">
		<div class="row">
			<div class="col-12 text-center">
				<h2 class="section-speakers__title"><?php esc_html_e( 'Speaker', 'shs-a' ); ?></h2>
			</div>
		</div>
		<div class="row align-items-center justify-content-center">
			<?php
			$speaker_posts = get_field( 'event_speakers' );
			if ( $speaker_posts ) :
				foreach ( $speaker_posts as $speaker_post ) :
					$speaker_title        = get_the_title( $speaker_post->ID );
					$speaker_position     = get_field( 'speaker_position', $speaker_post->ID );
					$speaker_showon_front = get_field( 'speaker_show_on_the_home_page', $speaker_post->ID );
					$speaker_is_mod       = get_field( 'speaker_is_moderator', $speaker_post->ID );
					// Setup this post for WP functions (variable must be named $post).
					if ( $speaker_showon_front ) :
						?>
						<div class="col-12 col-sm-12 col-md-8 col-lg-4">
							<a href="/speakers/">
								<figure class="speaker-card">
									<?php echo get_the_post_thumbnail( $speaker_post->ID, 'full' ); ?>
									<figcaption class="speaker-card__content">
										<?php
										if ( $speaker_is_mod ) :
											echo '<span class="speaker-card__is-mod">' . esc_html__( 'Moderator', 'shs-a' ) . '</span>';
										endif;
										?>
										<p class="speaker-card__title"><?php echo $speaker_title; ?></p>
										<p class="speaker-card__position"><?php echo $speaker_position; ?></p>
									</figcaption>
								</figure>
							</a>
						</div>
						<?php
					endif;
				endforeach;
			endif; ?>
		</div>
		<div class="row">
			<div class="col-12 text-center">
				<a class="main-btn main-btn__red" href="/speakers"><?php esc_html_e( 'Alle Speakers', 'shs-a' ); ?></a>
			</div>
		</div>
	</div>
</section>
