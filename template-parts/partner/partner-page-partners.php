<section id="page-partners-section" class="section section__partners">
	<div class="container container__inside">
		<div class="row align-items-center justify-content-center">
			<div class="col-md-12 col-sm-12 px-15">
				<p class="partners__topsection-title">Partner</p>
			</div>
		</div>
		<?php
		$institutional_query_args = array(
			'post_type'     => 'partners',
			'nopaging'      => true,
			'category_name' => 'institutional',
		);
		$institutional_query = new WP_Query( $institutional_query_args );
		if ( $institutional_query->have_posts() ) : ?>
		<div class="row">
			<h2 class="partners__catTitle"><?php echo get_cat_name( $category_id = 8 );?></h2>
			<div class="col-md-12 col-sm-12 px-15 partners__column">
				<?php while ( $institutional_query->have_posts() ) :
					$institutional_query->the_post();
					?>
						<a href="<?php the_field( 'partner_link' ) ; ?>" target="_blank" class="thumbnail__bigger"><?php the_post_thumbnail( 'full' ); ?></a>
					<?php
					endwhile;
				?>
			</div>
		</div><!-- .row institutional partners -->
		<?php 
		endif;
		wp_reset_postdata(); ?>
		<?php
		$presenting_query_args = array(
			'post_type'     => 'partners',
			'nopaging'      => true,
			'category_name' => 'presenting-partner',
		);
		$presenting_query = new WP_Query( $presenting_query_args );
		if ( $presenting_query->have_posts() ) : ?>
		<div class="row">
			<h2 class="partners__catTitle"><?php echo get_cat_name( $category_id = 12 );?></h2>
			<div class="col-md-12 col-sm-12 px-15 partners__column">
				<?php while ( $presenting_query->have_posts() ) :
					$presenting_query->the_post();
					?>
						<a href="<?php the_field( 'partner_link' ); ?>" target="_blank"><?php the_post_thumbnail( 'full' ); ?></a>
					<?php
					endwhile;
				?>
			</div>
		</div><!-- .row presenting partners -->
		<?php 
		endif;
		wp_reset_postdata(); ?>
		<?php
		$innovation_query_args = array(
			'post_type'     => 'partners',
			'nopaging'      => true,
			'category_name' => 'innovation',
		);
		$innovation_query = new WP_Query( $innovation_query_args );
		if ( $innovation_query->have_posts() ) : ?>
		<div class="row">
			<h2 class="partners__catTitle"><?php echo get_cat_name( $category_id = 10 );?></h2>
			<div class="col-md-12 col-sm-12 px-15 partners__column">
				<?php while ( $innovation_query->have_posts() ) :
					$innovation_query->the_post();
					?>
						<a href="<?php the_field( 'partner_link' ); ?>" target="_blank"><?php the_post_thumbnail( 'full' ); ?></a>
					<?php
					endwhile;
				?>
			</div>
		</div><!-- .row innovation partners -->
		<?php 
		endif;
		wp_reset_postdata(); ?>
		<?php
		$networking_query_args = array(
			'post_type'     => 'partners',
			'nopaging'      => true,
			'category_name' => 'networking',
		);
		$networking_query = new WP_Query( $networking_query_args );
		if ( $networking_query->have_posts() ) : ?>
		<div class="row">
			<h2 class="partners__catTitle"><?php echo get_cat_name( $category_id = 11 );?></h2>
			<div class="col-md-12 col-sm-12 px-15 partners__column">
					<?php while ( $networking_query->have_posts() ) :
						$networking_query->the_post();
						?>
							<a href="<?php the_field( 'partner_link' ); ?>" target="_blank"><?php the_post_thumbnail( 'full' ); ?></a>
						<?php
						endwhile;
				?>
			</div>
		</div><!-- .row Networking partners -->
		<?php 
		endif;
		wp_reset_postdata(); ?>
		<?php
		$culinary_query_args = array(
			'post_type'     => 'partners',
			'nopaging'      => true,
			'category_name' => 'culinary',
		);
		$culinary_query = new WP_Query( $culinary_query_args );
		if ( $culinary_query->have_posts() ) : ?>
		<div class="row">
			<h2 class="partners__catTitle"><?php echo get_cat_name( $category_id = 9 );?></h2>
			<div class="col-md-12 col-sm-12 px-15 partners__column">
				<?php while ( $culinary_query->have_posts() ) :
					$culinary_query->the_post();
					?>
						<a href="<?php the_field( 'partner_link' ); ?>" target="_blank"><?php the_post_thumbnail( 'full' ); ?></a>
					<?php
					endwhile; 
				?>
			</div>
		</div><!-- .row Culinary partners -->
		<?php 
		endif;
		wp_reset_postdata(); ?>
		<?php
		$mediaentertainment_query_args = array(
			'post_type'     => 'partners',
			'nopaging'      => true,
			'category_name' => 'media-entertainment',
		);
		$mediaentertainment_query = new WP_Query( $mediaentertainment_query_args );
		if ( $mediaentertainment_query->have_posts() ) : ?>
		<div class="row">
			<h2 class="partners__catTitle"><?php echo get_cat_name( $category_id = 20 );?></h2>
			<div class="col-md-12 col-sm-12 px-15 partners__column">
				<?php while ( $mediaentertainment_query->have_posts() ) :
					$mediaentertainment_query->the_post();
					?>
						<a href="<?php the_field( 'partner_link' ); ?>" target="_blank"><?php the_post_thumbnail( 'full' ); ?></a>
					<?php
					endwhile;
				?>
			</div>
		</div><!-- .row Media & Entertainment partners -->
		<?php 
		endif;
		wp_reset_postdata(); ?>
	</div>
</section>
