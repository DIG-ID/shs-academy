<section id="page-mediacorner-press" class="section section__pagepress">
	<div class="container container__inside">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-6 px-15">
				<p class="mediacorner__title"><?php echo get_field('press_title'); ?></p>
			</div>
			<div class="d-flex col-12 col-sm-12 col-md-6 col-lg-12 col-xl-6 px-15 justify-content-xl-end">
				<p class="text-xl-left"><a class="main-btn main-btn__red" href="<?php echo get_field('download_all_press_link'); ?>"><?php esc_html_e( 'Alle Press herunterladen', 'shs-a' ); ?></a></p>
			</div>
		</div>
		<div class="row row__press">
			<?php if ( have_rows( 'press_articles' ) ): ?>
				<?php while ( have_rows( 'press_articles' ) ) : the_row(); ?>
					<div class="col-12 col-md-6 col-lg-6 col-xl-4">
						<article id="press-article" class="press-article">
							<!-- <p class="press-publisher"><?php the_field( 'press_publisher' ); ?></p> -->
							<!-- <p class="press-date"><?php //the_date( 'j F Y' ); ?></p> -->
							<h2 class="press-article__title"><?php echo esc_html( get_sub_field( 'press_article_title' ) ); ?></h2>
							<a href="<?php echo esc_url( get_sub_field( 'press_article_file' ) ); ?>" target="blank" class="press-article__btn"><?php esc_html_e( 'Mehr erfahren', 'shs-academy' ); ?></a>
						</article>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</section>
