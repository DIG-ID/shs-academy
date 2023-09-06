<main>
	<section class="page-intro">
		<div class="container">
			<div class="row justify-content-center align-content-center">
				<div class="col-md-12 col-lg-10 col-xl-6 text-center">
					<p class="page-intro__content"><?php the_field('page_intro_text'); ?></p>
				</div>
			</div>
		</div>
	</section>
	<section class="presentation-cards">
		<div class="container container__inside">
			<div class="row">
			<?php
				$presentations_query_args = array(
					'post_type' => 'presentations',
					'nopaging'  => true,
					'order'     => 'ASC',
				);
				$presentations_query = new WP_Query( $presentations_query_args );
				if ( $presentations_query->have_posts() ) :
					while ( $presentations_query->have_posts() ) :
						$presentations_query->the_post();
						?>
							<article class="presentation-card col-12 col-sm-12 col-md-6 col-xl-4 col-xxl-4 px-15">
							<header class="">
							<?php 
								if( get_field('preview_image') ) {
									echo wp_get_attachment_image( get_field('preview_image'), 'full' );
								} ?>
								<span class="presentation-card__category"><?php the_field('category'); ?></span>
								<h2 class="presentation-card__title"><?php the_title(); ?></h2>
								<?php if( get_field('linkedin') ) : ?>
								<a class="presentation-card__social-logo" href="<?php the_field('linkedin'); ?>" target="_blank"><img src="<?php echo wp_upload_dir()['url'] . '/In-Blue-72.png' ?>"></a>
								<?php endif; ?>
								<p class="presentation-card__position"><?php the_field('role'); ?></p>
							</header>
							<span class="presentation-card__separator"></span>
							<p class="presentation-card__description"><?php the_field('small_description'); ?></p>
							<footer>
								<?php if( get_field('pdf_file_link') ) : ?>
								<a href="<?php the_field('pdf_file_link'); ?>" target="_blank" class="presentation-card__pdf main-btn main-btn__red"><?php echo esc_html__( 'Präsentation downloaden', 'SHS' ); ?></a>
								<?php endif; ?>
							</footer>
						</article>
						<?php
						endwhile;
					endif;
					wp_reset_postdata();
				?>
			</div>
		</div>
	</section>
	<?php 
	$gallery = get_field( 'drawings_gallery' );

	if ( $gallery ) :
		?>
		<section id="section-event-gallery" class="section section-event-gallery" style="margin-bottom: 200px;">
			<div class="container container__inside">
				<div class="row">
					<div class="col-12">
						<h3 class="section-event-gallery__title"><?php esc_html_e( 'Drawings', 'shs-a' ); ?></h3>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="swiper-button-next gallery-swiper-button-next"></div>
					<div class="swiper-button-prev gallery-swiper-button-prev"></div>
					<div thumbsSlider="" class="swiper gallerySwiperThumbs">
						<div class="swiper-wrapper">
							<?php foreach( $gallery as $image_id ): ?>
								<div class="swiper-slide">
									<?php $full_image_url = wp_get_attachment_image_url( $image_id, 'event-gallery-full' ); ?>
									<a href="<?php echo esc_url( $full_image_url ); ?>" data-fancybox="gallery">
										<?php echo wp_get_attachment_image( $image_id, 'event-gallery-thumb' ); ?>
									</a>
								</div>
							<?php endforeach; ?>
						</div>
					</div><!-- .gallerySwiperThumbs -->
				</div><!-- .row -->
			</div>
		</section>
		<?php
	endif;
	?>
</main>