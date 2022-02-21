<section id="speakers-section" class="section section__speakers">
  <span class="section-about-us__bg-img-2 rellax" data-rellax-speed="-4" data-rellax-percentage="0.5"></span>
  <div class="container container__inside">
    <div class="row align-items-center justify-content-center">
			<?php
			$speaker_posts = get_field( 'event_speakers' );
			if ( $speaker_posts ) :
				foreach ( $speaker_posts as $speaker_post ) :
					$speaker_title        = get_the_title( $speaker_post->ID );
					$speaker_position     = get_field( 'speaker_position', $speaker_post->ID );
					$speaker_showon_front = get_field( 'speaker_show_on_the_home_page', $speaker_post->ID );
					if ( $speaker_showon_front ) :
						?>
						<div class="col-sm-12 col-md-4 col-lg-4">
							<figure class="speaker-card">
								<?php echo get_the_post_thumbnail( $speaker_post->ID, 'full' ); ?>
								<figcaption class="speaker-card__content">
									<p class="speaker-card__title"><?php echo $speaker_title; ?></p>
									<p class="speaker-card__position"><?php echo $speaker_position; ?></p>
								</figcaption>
							</figure>
						</div>
						<?php
					endif;
				endforeach;
			endif; ?>
		</div>
  </div>
</section>
