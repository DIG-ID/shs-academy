<?php
$event_id = get_field( 'gallery_event' );
$gallery  = get_field( 'event_gallery', $event_id );

if ( $gallery ) :
	?>
	<section id="section-event-gallery" class="section section-event-gallery">
		<div class="container container__inside">
			<div class="row">
				<div class="col-12">
					<h3 class="section-event-gallery__title"><?php esc_html_e( 'Latest Event', 'shs-a' ); ?></h3>
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