<main>
	<section class="page-intro">
		<div class="container">
			<div class="row justify-content-center align-content-center">
				<div class="col-6 text-center">
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
								<p class="presentation-card__position"><?php the_field('role'); ?></p>
							</header>
							<span class="presentation-card__separator"></span>
							<p class="presentation-card__description"><?php the_field('small_description'); ?></p>
							<ul class="presentation-card__links">
							<?php
							if( have_rows('links') ):
							while( have_rows('links') ) : the_row(); ?>
								<li><a href="<?php the_sub_field('link_url'); ?>"><?php the_sub_field('link_name'); ?></a></li>
							<?php endwhile;endif; ?>
							</ul>
							<footer>
								<?php if( get_field('pdf_file_link') ) : ?>
								<a href="<?php the_field('pdf_file_link'); ?>" target="_blank" class="presentation-card__pdf main-btn main-btn__red">Präsentation downloaden</a>
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
</main>