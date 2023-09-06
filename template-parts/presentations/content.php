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
								<?php if( get_field('pdf_file_link_extra') ) : ?>
									<?php if( get_field('pdf_file_link') ) : ?>
									<a href="<?php the_field('pdf_file_link'); ?>" target="_blank" class="presentation-card__pdf main-btn main-btn__red float-start" style="width: 48%;margin-right: 2%;">
										<span><?php echo esc_html__( 'Präsentation', 'SHS' ); ?></span>
										<svg class="dnl-icon ms-4" width="20px" height="20px" viewBox="0 -0.5 21 21" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
										<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<g id="Dribbble-Light-Preview" transform="translate(-139.000000, -480.000000)" fill="#FFFFFF">
										<g id="icons" transform="translate(56.000000, 160.000000)">
										<path d="M93.5,336.243 L88.81175,331 L92.45,331 L92.45,324 L94.55,324 L94.55,331 L98.25755,331.032 L93.5,336.243 Z M85.1,338 L101.9,338 L101.9,322 L85.1,322 L85.1,338 Z M83,340 L104,340 L104,320 L83,320 L83,340 Z" id="download-[#1458]">
										</path></g></g></g></svg>
									</a>
									<?php endif; ?>
									<a href="<?php the_field('pdf_file_link_extra'); ?>" target="_blank" class="presentation-card__pdf main-btn main-btn__red w-50 float-end" style="width: 48%;">
										<span><?php echo esc_html__( 'Präsentation', 'SHS' ); ?></span>
										<svg class="dnl-icon ms-4" width="20px" height="20px" viewBox="0 -0.5 21 21" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
										<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<g id="Dribbble-Light-Preview" transform="translate(-139.000000, -480.000000)" fill="#FFFFFF">
										<g id="icons" transform="translate(56.000000, 160.000000)">
										<path d="M93.5,336.243 L88.81175,331 L92.45,331 L92.45,324 L94.55,324 L94.55,331 L98.25755,331.032 L93.5,336.243 Z M85.1,338 L101.9,338 L101.9,322 L85.1,322 L85.1,338 Z M83,340 L104,340 L104,320 L83,320 L83,340 Z" id="download-[#1458]">
										</path></g></g></g></svg>
									</a>
								<?php else : ?>
									<?php if( get_field('pdf_file_link') ) : ?>
									<a href="<?php the_field('pdf_file_link'); ?>" target="_blank" class="presentation-card__pdf main-btn main-btn__red" style="width: 100%;">
										<span><?php echo esc_html__( 'Präsentation', 'SHS' ); ?></span>
										<svg class="dnl-icon ms-4" width="20px" height="20px" viewBox="0 -0.5 21 21" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
										<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<g id="Dribbble-Light-Preview" transform="translate(-139.000000, -480.000000)" fill="#FFFFFF">
										<g id="icons" transform="translate(56.000000, 160.000000)">
										<path d="M93.5,336.243 L88.81175,331 L92.45,331 L92.45,324 L94.55,324 L94.55,331 L98.25755,331.032 L93.5,336.243 Z M85.1,338 L101.9,338 L101.9,322 L85.1,322 L85.1,338 Z M83,340 L104,340 L104,320 L83,320 L83,340 Z" id="download-[#1458]">
										</path></g></g></g></svg>
									</a>
									<?php endif; ?>
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