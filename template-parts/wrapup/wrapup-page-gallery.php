<section id="section-aftermovie" class="section section-aftermovie">
	<div class="container container__inside">
		<div class="row">
			<h2 class="aftermovie__title">#SID23 Aftermovie</h2>
		</div>
		<div class="row row__video">
			<div class="embed-container">
				<?php the_field('video_link'); ?>
			</div>
		</div>
	</div>
</section>

<section id="wrapup-mediacorner-photos" class="section section__pagephotos section__pagephotos-wrapup">
	<span class="section-about-us__bg-img-2 rellax" data-rellax-speed="-4" data-rellax-percentage="0.5"></span>
	<div class="container container__inside">
	<div class="row">
			<h2 class="mediacorner__main-title">Impressionen</h2>
		</div>
		<div class="row">
			<div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-6 px-15">
				<h2 class="mediacorner__title">Fotos</h2>
			</div>
			<div class="d-flex col-12 col-sm-12 col-md-6 col-lg-12 col-xl-6 px-15 justify-content-xl-end download__col">
				<p class="text-xl-left">
				<?php  shs_download_files( 'wrap_up_gallery' );  ?>
				</p>
			</div>
		</div>
		<div class="row row__photos">
			<div class="swiper-button-next wrapup-swiper-button-next"></div>
			<div class="swiper-button-prev wrapup-swiper-button-prev"></div>
			<div class="swiper wrapupSwiperThumbs">
				<div class="swiper-wrapper">
				<?php
				$photosImages = get_field( 'wrap_up_gallery' );
				if( $photosImages ): ?>
					<?php foreach( $photosImages as $photoImage ): ?>
						<div class="swiper-slide">
							<?php $photo_url = wp_get_attachment_image_url( $photoImage, 'full' ); ?>
							<a href="<?php echo esc_url($photo_url); ?>" data-fancybox="photos">
								<?php echo wp_get_attachment_image( $photoImage, 'media-corner-photos-thumb' ); ?>
							</a>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
