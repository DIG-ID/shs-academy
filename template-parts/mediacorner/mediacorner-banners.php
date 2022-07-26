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
			<?php
			$banners = get_field( 'banners_images' );
			if ( $banners ) :
				foreach ( $banners as $banner ) :
					?>
					<a href="<?php echo esc_url( $banner['url'] ); ?>" data-fancybox="banners" data-caption="<?php echo esc_html( $banner['caption'] ); ?>" class="col-sm-12 col-md-6 col-lg-6 col-xl-3 d-flex align-items-center justify-content-center banner-img-wrapper">
						<figure>
							<img src="<?php echo esc_url( $banner['sizes']['media-corner-banners-thumb'] ); ?>" alt="<?php echo esc_attr( $banner['alt'] ); ?>" />
							<figcaption><?php echo esc_html( $banner['caption'] ); ?></figcaption>
						</figure>
					</a>
					<?php
				endforeach;
			endif;
			?>
		</div>
	</div>
</section>
