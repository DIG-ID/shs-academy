<section id="speakers-section" class="section section__speakers">
	<span class="section-about-us__bg-img-2 rellax" data-rellax-speed="-4" data-rellax-percentage="0.5"></span>
	<div class="container container__inside">
		<?php
		if ( get_field( 'display_info_message_speaker' ) ) :
			?>
			<div class="row align-items-center justify-content-center">
				<div class="col">
					<p class="text-center text-info-details"><?php the_field( 'info_message_speakers' ); ?></p>
				</div>
			</div>
			<?php
		endif;
		?>
		<div class="row align-items-center justify-content-center">
			<?php $i = 1; ?>
			<?php
			$speaker_query_args = array(
				'post_type' => 'speakers',
				'nopaging'  => true,
			);
			$speaker_query = new WP_Query( $speaker_query_args );
			if ( $speaker_query->have_posts() ) :
				while ( $speaker_query->have_posts() ) :
					$speaker_query->the_post();

					$speaker_title    = get_the_title();
					$speaker_content  = get_the_content();
					$speaker_position = get_field( 'speaker_position' );
					$speaker_logo     = get_field( 'speaker_logo' );
					$speaker_is_mod   = get_field( 'speaker_is_moderator' );
						?>
						<div class="col-sm-12 col-md-4 col-lg-4">
							<a type="button" id="speakerTrigger" data-bs-toggle="modal" data-bs-target="#speakerDetails<?php echo $i; ?>">
								<figure class="speaker-card">
									<?php echo get_the_post_thumbnail( $speaker_query->ID, 'full' ); ?>
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
						<div class="modal fade" id="speakerDetails<?php echo $i;$i++; ?>" tabindex="-1" role="dialog" aria-labelledby="Speakersmodalwindow" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
										<a class="speakersModal__social-logo" href="<?php the_field( 'linkedin_link' ); ?>"><img src="/wp-content/uploads/In-Blue-72.png"></a>
									</div>
									<div class="modal-body">
										<div class="container-fluid">
											<div class="row no-gutters">
												<div class="col-sm-12 col-md-4 col-lg-4 speakersModal__col-img">
													<?php echo get_the_post_thumbnail( $speaker_query->ID, 'full' ); ?>
												</div>
												<div class="col-sm-12 col-md-8 col-lg-8">
													<div class="row">
														<div class="col-sm-12 col-md-6 col-lg-5">
															<p class="speakersModal__name"><?php echo $speaker_title; ?></p>
															<p class="speakersModal__position"><?php echo $speaker_position; ?></p>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-7 speakersModal__col-logo">
															<img src="<?php echo $speaker_logo; ?>" alt="">
														</div>
													</div>
													<div class="row speakersModal__desc-text">
														<?php echo $speaker_content; ?>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<div class="container-fluid">
											<div class="row no-gutters">
												<div class="col-sm-12 col-md-4 col-lg-4">
												</div>
												<div class="col-sm-12 col-md-8 col-lg-8">
													<?php
													if( have_rows('links') ):
														while( have_rows('links') ) : the_row(); ?>
																<a class="speakersModal__links" href="<?php echo the_sub_field('speaker_links'); ?>"><?php echo the_sub_field('speaker_links_title'); ?></a>
														<?php
														endwhile;
													endif;
													?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php
					endwhile;
				endif;
				wp_reset_postdata(); ?>
		</div>
	</div>
</section>
