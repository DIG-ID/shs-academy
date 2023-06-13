<section id="programs-section" class="section section__programs">
	<span class="section-about-us__bg-img-2 rellax" data-rellax-speed="-4" data-rellax-percentage="0.5"></span>
	<div class="container container__programs">
		<?php
		if ( get_field( 'display_intro_message' ) ) :
			?>
			<div class="row align-items-center justify-content-center py-5">
				<div class="col text-intro">
					<?php the_field( 'intro_message' ); ?>
				</div>
			</div>
			<?php
		endif;
		?>
		<div class="row align-items-center justify-content-center">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<?php
				$curr_program = get_post( shs_theme_get_current_program() );
				if ( $curr_program ) :
					$program_id = $curr_program->ID;
					?>
					<ul class="nav nav-pills mb-3" id="programs__tab" role="tablist">
						<?php
						$i = 1;
						if ( have_rows( 'days_group', $program_id ) ) :
							while ( have_rows( 'days_group', $program_id ) ) :
								the_row();
								?>
								<li class="nav-item" role="presentation">
									<button class="nav-link<?php if ( $i == 1 ){ echo ' active'; } ?>" data-bs-toggle="pill" data-bs-target="#programs__acc-<?php echo $i; ?>" type="button" role="tab" aria-controls="programs__acc-<?php echo $i; ?>" aria-selected="true"><?php the_sub_field( 'day_title' ); ?>
									</button>
								</li>
								<?php
								$i++;
							endwhile;
						endif;
						?>
					</ul>
					<div class="tab-content" id="programs__tabContent">
						<?php
						$e = 1;
						if ( have_rows( 'days_group', $program_id ) ) :
							while ( have_rows( 'days_group', $program_id ) ) :
								the_row();
								?>
								<div class="tab-pane fade <?php if ( $e == 1 ){ echo 'active show'; } ?>" id="programs__acc-<?php echo $e; ?>" role="tabpanel">
									<?php $u = 1;
									if ( have_rows( 'days_content' ) ) :
										while ( have_rows( 'days_content' ) ) :
											the_row();
											?>
											<p class="timeofday__title"><?php echo get_sub_field( 'time_of_the_day' ); ?></p>
											<div class="accordion accordion-flush" id="programs__accordion-<?php echo $e;echo $u; ?>">
												<?php
												$c = 1;
												if ( have_rows( 'block_repeater' ) ) :
													while ( have_rows( 'block_repeater' ) ) :
														the_row();
														?>
														<div class="accordion-item">
															<h2 class="accordion-header" id="flush-heading-<?php echo $e;echo $c; ?>">
																<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-<?php echo $e;echo $u;echo $c; ?>" aria-expanded="true" aria-controls="flush-collapse-<?php echo $e;echo $u;echo $c; ?>">
																	<span class="programs__acc-title"><?php echo get_sub_field( 'title' ); ?>
																</button>
															</h2>
															<?php
															if ( get_sub_field( 'description' ) || get_sub_field( 'subtitle' ) ) :
																?>
																<div id="flush-collapse-<?php echo $e;echo $u;echo $c; ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading-<?php echo $e;echo $c; ?>" data-bs-parent="#programs__accordion-<?php echo $e;echo $u; ?>">
																	<div class="accordion-body programs__acc-desc">
																		<?php
																		if ( get_sub_field( 'is_speaker' ) ) :
																			$speaker = get_sub_field( 'speaker' );
																			if ( $speaker ) :
																				//var_dump($speaker);
																				$speaker_id       = $speaker->ID;
																				$speaker_title    = $speaker->post_title;
																				$speaker_content  = $speaker->post_content;
																				$speaker_position = get_field( 'speaker_position', $speaker_id );
																				$speaker_logo     = get_field( 'speaker_logo', $speaker_id );
																				?>
																				<a href="" type="button" id="speakerTrigger" data-bs-toggle="modal" data-bs-target="#speakerDetails<?php echo $e . $u . $c; ?>"><h3 class="programs__acc-subtitle"><?php the_sub_field( 'subtitle' ); ?></h3></a>
																				<div class="modal fade" id="speakerDetails<?php echo $e . $u . $c; ?>" tabindex="-1" role="dialog" aria-labelledby="Speakersmodalwindow" aria-hidden="true">
																					<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
																						<div class="modal-content">
																							<div class="modal-header">
																								<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
																									<span aria-hidden="true">&times;</span>
																								</button>
																								<a class="speakersModal__social-logo" href="<?php the_field( 'linkedin_link', $speaker_id ); ?>"><img src="/wp-content/uploads/In-Blue-72.png"></a>
																							</div>
																							<div class="modal-body">
																								<div class="container-fluid">
																									<div class="row no-gutters">
																										<div class="col-sm-12 col-md-4 col-lg-4 speakersModal__col-img">
																											<?php echo get_the_post_thumbnail( $speaker_id, 'full' ); ?>
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
																											if ( have_rows( 'links', $speaker_id ) ) :
																												while( have_rows( 'links', $speaker_id ) ) : the_row(); ?>
																													<a class="speakersModal__links" href="<?php echo the_sub_field( 'speaker_links' ); ?>" target="_blank"><?php echo the_sub_field( 'speaker_links_title',  ); ?></a><br>
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
																				</div><!-- modal -->
																				<?php
																			endif;
																		else :
																			?><h3 class="programs__acc-subtitle"><?php the_sub_field( 'subtitle' ); ?></h3><?php
																		endif;
																		?>
																		<?php the_sub_field( 'description' ); ?>
																	</div>
																</div>
																<?php
															endif;
															?>
														</div>
														<?php
														$c++;
													endwhile;
												endif;
												?>
											</div>
											<?php
											$u++;
										endwhile;
									endif;
									/*if ( get_field( 'program_file_v2' ) ) :
										echo '<a class="main-btn main-btn__red programs__dl-btn" href="' . get_field( 'program_file_v2' ) . '">' . esc_html__( 'Programm downloaden', 'shs-a' ) . '</a>';
									endif;*/
									?>
								</div>
								<?php
								$e++;
							endwhile;
						endif;
						?>
					</div>
					<?php
				endif;
				?>
			</div>
		</div>
		<?php
		if ( get_field( 'display_info_message_programm' ) ) :
			?>
			<div class="row align-items-center justify-content-center py-5">
				<div class="col">
					<p class="text-center text-info-details m-0"><?php the_field( 'info_message_programm' ); ?></p>
				</div>
			</div>
			<?php
		endif;
		?>
	</div>
</section>
