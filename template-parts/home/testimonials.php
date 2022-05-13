<section id="section-testimonials" class="section section-testimonials">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h2 class="section-testimonials__title"><?php esc_html_e( 'Testimonials', 'shs-a' ); ?></h2>
			</div>
		</div>
		<div class="row align-items-center justify-content-center position-relative">
			<div class="col-12">
				<div class="testimonials-swiper">
					<div class="swiper-wrapper">
						<?php
						$testimonials_posts = get_field( 'event_testimonials' );
						if ( $testimonials_posts ) :
							foreach ( $testimonials_posts as $testimonial_post ) :
								$testimonial_quote        = get_post_field( 'post_content', $testimonial_post->ID );
								$testimonial_name         = get_the_title( $testimonial_post->ID );
								$testimonial_position     = get_field( 'testimonial_position', $testimonial_post->ID );
								$testimonial_showon_front = get_field( 'testimonial_show_on_the_homepage', $testimonial_post->ID );
								// Setup this post for WP functions (variable must be named $post).
								if ( $testimonial_showon_front ) :
									?>
									<figure class="swiper-slide testimonial-card">
										<blockquote class="testimonial-card__quote">
											<?php echo wp_kses_post( $testimonial_quote ); ?>
										</blockquote>
										<figcaption class="testimonial-card__content">
											<p class="testimonial-card__title"><?php echo $testimonial_name; ?></p>
											<p class="testimonial-card__position"><?php echo $testimonial_position; ?></p>
										</figcaption>
									</figure>
									<?php
								endif;
							endforeach;
						endif;
						?>
					</div>
				</div>
				<div class="swiper-button-next testimonials-button-next"></div>
				<div class="swiper-button-prev testimonials-button-prev"></div>
			</div>
			<!-- <a class="main-btn main-btn__red" href="/testimonials/"><?php esc_html_e( 'See all testimonials', 'shs-a' ); ?></a> -->
		</div>
		<div class="row">
			<div class="col-12 text-center">
				<h2 class="section-socialwall__title"><?php esc_html_e( '#SID2022', 'shs-a' ); ?></h2>
			</div>
		</div>
		<div class="row"> 
			<div class="col-12">
				<div class="tagembed-container" style=" width:100%;height:100%;overflow: auto;"><div class="tagembed-socialwall" data-wall-id="41238" view-url="https://widget.tagembed.com/41238?view">  </div> <script src="//widget.tagembed.com/embed.min.js" type="text/javascript"></script></div>
			</div>
		</div>
	</div>
</section>