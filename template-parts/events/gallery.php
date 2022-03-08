<?php 
$gallery = get_field( 'event_gallery' );

if ( $gallery ) :
	?>
	<section id="section-event-gallery" class="section section-event-gallery">
		<div class="container container__inside">
			<div class="row">
				<div class="col-12">
					<h3 class="section-event-gallery__title"><?php esc_html_e( 'Gallery', 'shs-a' ); ?></h3>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="swiper gallerySwiper">
					<div class="swiper-wrapper">
						<?php foreach( $gallery as $image_id ): ?>
							<div class="swiper-slide">
								<?php echo wp_get_attachment_image( $image_id, 'event-gallery-full' ); ?>
							</div>
						<?php endforeach; ?>
					</div>
					
				</div><!-- .gallerySwiper -->
				<div class="swiper-button-next gallery-swiper-button-next"></div>
				<div class="swiper-button-prev gallery-swiper-button-prev"></div>
				<div thumbsSlider="" class="swiper gallerySwiperThumbs">
					<div class="swiper-wrapper">
						<?php foreach( $gallery as $image_id ): ?>
							<div class="swiper-slide">
								<?php echo wp_get_attachment_image( $image_id, 'event-gallery-thumb' ); ?>
							</div>
						<?php endforeach; ?>
					</div>
				</div><!-- .gallerySwiperThumbs -->
			</div><!-- .row -->
		</div>
	</section>
	<?php
endif;

