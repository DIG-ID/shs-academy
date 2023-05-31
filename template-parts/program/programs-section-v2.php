<section id="programs-section" class="section section__programs">
	<span class="section-about-us__bg-img-2 rellax" data-rellax-speed="-4" data-rellax-percentage="0.5"></span>
	<div class="container container__programs">
		<div class="row align-items-center justify-content-center">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<?php
				$program_choice_query_args = array(
					'post_type'      => 'program',
					'nopaging'       => true,
					'order'          => 'DESC',
					'orderby'        => 'date',
					'posts_per_page' => 1,
				);
				$program_choice_query = new WP_Query( $program_choice_query_args );
				if ( $program_choice_query->have_posts() ) :
					while ( $program_choice_query->have_posts() ) :
						$program_choice_query->the_post();

						?>
						<ul class="nav nav-pills mb-3" id="programs__tab" role="tablist">
							<?php
							$i = 1;
							if ( have_rows( 'days_group' ) ) :
								while ( have_rows( 'days_group' ) ) :
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
							if ( have_rows( 'days_group' ) ) :
								while ( have_rows( 'days_group' ) ) :
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
																			<h3 class="programs__acc-subtitle"><?php the_sub_field( 'subtitle' ); ?></h3>
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
										if ( get_field( 'program_file_v2' ) ) :
											echo '<a class="main-btn main-btn__red programs__dl-btn" href="' . get_field( 'program_file_v2' ) . '">' . esc_html__( 'Programm downloaden', 'shs-a' ) . '</a>';
										endif;
										?>
									</div>
									<?php
									$e++;
								endwhile;
							endif;
							?>
						</div>
						<?php
					endwhile;
				endif;
				?>
			</div>
		</div>
		<?php
		if ( get_field( 'display_info_message_programm', $_SESSION['page_template_id'] ) ) :
			?>
			<div class="row align-items-center justify-content-center py-5">
				<div class="col">
					<p class="text-center text-info-details m-0"><?php the_field( 'info_message_programm', $_SESSION['page_template_id'] ); ?></p>
				</div>
			</div>
			<?php
		endif;
		?>
	</div>
</section>
