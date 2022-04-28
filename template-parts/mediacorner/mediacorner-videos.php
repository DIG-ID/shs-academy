<section id="page-mediacorner-videos" class="section section__pagevideos">
	<div class="container container__inside">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-6 px-15">
				<p class="mediacorner__title"><?php the_field( 'videos_title' ); ?></p>
			</div>
		</div>
		<div class="row row__videos">
			<?php if ( have_rows( 'videos' ) ): ?>
				<?php while ( have_rows( 'videos' ) ) : the_row(); ?>
				<?php $video_id = get_sub_field( 'youtube_video_id' ); ?>
					<div class="col-12 col-md-6 col-lg-6 col-xl-4">
						<article id="video" class="video-card">
							<a data-fancybox data-small-btn="true" href="https://youtu.be/<?php echo esc_attr( $video_id ); ?>">
								<img src="http://img.youtube.com/vi/<?php echo esc_html( $video_id ); ?>/hqdefault.jpg" />
								<span class="video-card__play-button">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
										<polygon points="40,30 65,50 40,70"></polygon>
									</svg>
								</span>
							</a>
							<!--<h2 class="video-card__title"><?php //echo shs_get_youtube_title( $video_id ); ?></h2> -->
						</article>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</section>
