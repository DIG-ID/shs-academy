<section id="page-mediacorner-photos" class="section section__pagephotos">
	<div class="container container__inside">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-6 px-15">
				<p class="mediacorner__title"><?php echo get_field( 'photos_title' ); ?></p>
			</div>
			<div class="d-flex col-12 col-sm-12 col-md-6 col-lg-12 col-xl-6 px-15 justify-content-xl-end">
				<p class="text-xl-left">
					<?php shs_download_files( 'photos' ); ?>
				</p>
			</div>
		</div>
		<div class="row row__photos">
			<?php
				$photosImages = get_field( 'photos' );
				if( $photosImages ): ?>
					<?php foreach( $photosImages as $photoImage ): ?>
						<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 d-flex align-items-center">
							<?php $photo_url = wp_get_attachment_image_url( $photoImage, 'full' ); ?>
							<a href="<?php echo esc_url($photo_url); ?>" data-fancybox="photos">
								<?php echo wp_get_attachment_image( $photoImage, 'media-corner-photos-thumb' ); ?>
							</a>
						</div>
					<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>
</section>
