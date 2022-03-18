<main id="testimonials-section" class="section section__testimonials">
	<span class="section-about-us__bg-img-2 rellax" data-rellax-speed="-4" data-rellax-percentage="0.5"></span>
	<div class="container">
		<div class="row">
			<?php
      $testimonials_query_args = array(
        'post_type' => 'testimonials',
        'nopaging'  => true,
        'order'     => 'ASC',
        'orderby'   => 'date',
      );
      $testimonials_query = new WP_Query( $testimonials_query_args );
      if ( $testimonials_query->have_posts() ) :
        while ( $testimonials_query->have_posts() ) :
          $testimonials_query->the_post();
					$testimonials_title        = get_the_title();
          $testimonials_content      = get_the_content();
					$testimonials_position     = get_field( 'testimonial_position' ); ?>
					<div class="col-sm-12 col-md-6 col-lg-6">
						<figure class="testimonial-card">
							<blockquote class="testimonial-card__quote">
								<?php echo wp_kses_post( $testimonials_content ); ?>
							</blockquote>
							<figcaption class="testimonial-card__content">
								<p class="testimonial-card__title"><?php echo $testimonials_title; ?></p>
								<p class="testimonial-card__position"><?php echo $testimonials_position; ?></p>
							</figcaption>
						</figure>
					</div>
					<?php
				endwhile;
			 endif;
			wp_reset_postdata(); ?>
		</div>
	</div>
</main>
