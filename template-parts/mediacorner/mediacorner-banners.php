<section id="page-mediacorner-banners" class="section section__pagebanners">
	<div class="container container__inside">
		<div class="row py-3">
			<div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-6 px-15">
				<h2 class="mediacorner__title"><?php the_field( 'banners_title' ); ?></h2>
			</div>
			<div class="d-flex col-12 col-sm-12 col-md-6 col-lg-12 col-xl-6 px-15 justify-content-xl-end">
				<p class="text-xl-left">
					<?php shs_download_files( 'banners_images' ); ?>
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-12 py-3">
				<?php the_field( 'banners_description' ); ?>
			</div>
		</div>
		<div class="row row__banners">
			<?php if ( get_field( 'banners_images' ) ) : ?>
				<?php foreach ( get_field( 'banners_images' ) as $banner ) : ?>
					<div class="col-sm-12 col-md-6 col-lg-6 col-xl-2 d-flex align-items-center justify-content-center">
						<?php $banner_url = wp_get_attachment_image_url( $banner, 'full' ); ?>
						<a href="<?php echo esc_url( $banner_url ); ?>" data-fancybox="banners">
							<?php echo wp_get_attachment_image( $banner, 'media-corner-logos-thumb' ); ?>
						</a>
					</div>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>
</section>
