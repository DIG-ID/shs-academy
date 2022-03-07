<?php

$testimonials_posts = get_field( 'event_testimonials' );
if ( $testimonials_posts ) :
	?>
	<section id="section-event-testimonials" class="section section-event-testimonials">
		<div class="container container__inside">
			<div class="row">
				<div class="col-12">
					<h3 class="section-testimonials__title"><?php esc_html_e( 'Testimonials', 'shs-a' ); ?></h3>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row align-items-center justify-content-center position-relative">
				<div class="col-12">
					<div class="testimonials-swiper">
						<div class="swiper-wrapper">
							<?php
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
							?>
						</div>
					</div>
					<div class="swiper-button-next testimonials-button-next"></div>
					<div class="swiper-button-prev testimonials-button-prev"></div>
				</div>
			</div>
		</div>
	</section>
	<?php
endif;
