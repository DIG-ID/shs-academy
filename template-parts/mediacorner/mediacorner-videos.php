<section id="page-mediacorner-videos" class="section section__pagevideos">
	<div class="container container__inside">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-6 px-15">
				<p class="mediacorner__title"><?php the_field( 'videos_title' ); ?></p>
			</div>
			<div class="d-flex col-12 col-sm-12 col-md-6 col-lg-12 col-xl-6 px-15 justify-content-xl-end">
				<p class="text-xl-left"><a class="main-btn main-btn__red" href="<?php the_field( 'download_all_videos_link' ); ?>"><?php esc_html_e( 'Alle Videos herunterladen', 'shs-a' ); ?></a></p>
			</div>
		</div>
		<div class="row row__videos">
			<?php if ( have_rows( 'videos' ) ): ?>
				<?php while ( have_rows( 'videos' ) ) : the_row(); ?>
				<?php $video_id = get_sub_field( 'youtube_video_id' ); ?>
					<div class="col-12 col-md-6 col-lg-6 col-xl-4">
						<article id="video" class="video-card">
							<a data-fancybox data-small-btn="true" href="https://youtu.be/<?php echo esc_attr( $video_id ); ?>">
								<img src="http://img.youtube.com/vi/<?php echo esc_html( $video_id ); ?>/maxresdefault.jpg" />
								<i class="fas fa-play"></i>
								<div class="video-card__content">
									<h4 class="video-card__title"><?php echo shs_get_youtube_title( $video_id ); ?></h4>
								</div>
							</a>
						</article>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</section>
