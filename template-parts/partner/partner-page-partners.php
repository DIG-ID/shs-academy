<section id="page-partners-section" class="section section__partners">
	<div class="container container__inside">
		<div class="row align-items-center justify-content-center">
			<div class="col-md-12 col-sm-12 px-15">
				<p class="partners__topsection-title">Partners</p>
			</div>
		</div>
		<div class="row">
			<h2 class="partners__catTitle">Institutional Partner</h2>
			<div class="col-md-12 col-sm-12 px-15 partners__column">
				<?php
				$institutional_query_args = array(
					'post_type' => 'partners',
					'nopaging'  => true,
					'category_name'  => 'institutional',
				);
				$institutional_query = new WP_Query( $institutional_query_args );
				if ( $institutional_query->have_posts() ) :
					while ( $institutional_query->have_posts() ) :
						$institutional_query->the_post();
						?>
							<a href="<?php echo get_field('partner_link'); ?>" target="_blank" class="thumbnail__bigger"><?php the_post_thumbnail('full'); ?></a>
						<?php
						endwhile;
					endif;
					wp_reset_postdata();
				?>
			</div>
		</div><!-- .row institutional partners -->
		<div class="row">
			<h2 class="partners__catTitle">Presenting Partner</h2>
			<div class="col-md-12 col-sm-12 px-15 partners__column">
				<?php
				$presenting_query_args = array(
					'post_type'     => 'partners',
					'nopaging'      => true,
					'category_name' => 'presenting-partner',
				);
				$presenting_query = new WP_Query( $presenting_query_args );
				if ( $presenting_query->have_posts() ) :
					while ( $presenting_query->have_posts() ) :
						$presenting_query->the_post();
						?>
							<a href="<?php echo get_field('partner_link'); ?>" target="_blank"><?php the_post_thumbnail('full'); ?></a>
						<?php
						endwhile;
					endif;
					wp_reset_postdata();
				?>
			</div>
		</div><!-- .row presenting partners -->
		<div class="row">
			<h2 class="partners__catTitle">Innovation Partner</h2>
			<div class="col-md-12 col-sm-12 px-15 partners__column">
				<?php
				$innovation_query_args = array(
					'post_type'     => 'partners',
					'nopaging'      => true,
					'category_name' => 'innovation',
				);
				$innovation_query = new WP_Query( $innovation_query_args );
				if ( $innovation_query->have_posts() ) :
					while ( $innovation_query->have_posts() ) :
						$innovation_query->the_post();
						?>
							<a href="<?php echo get_field('partner_link'); ?>" target="_blank"><?php the_post_thumbnail('full'); ?></a>
						<?php
						endwhile;
					endif;
					wp_reset_postdata();
				?>
			</div>
		</div><!-- .row innovation partners -->
		<div class="row">
			<h2 class="partners__catTitle">Networking Partner</h2>
			<div class="col-md-12 col-sm-12 px-15 partners__column">
				<?php
				$networking_query_args = array(
					'post_type'     => 'partners',
					'nopaging'      => true,
					'category_name' => 'networking',
				);
				$networking_query = new WP_Query( $networking_query_args );
				if ( $networking_query->have_posts() ) :
					while ( $networking_query->have_posts() ) :
						$networking_query->the_post();
						?>
							<a href="<?php echo get_field('partner_link'); ?>" target="_blank"><?php the_post_thumbnail('full'); ?></a>
						<?php
						endwhile;
					endif;
					wp_reset_postdata();
				?>
			</div>
		</div><!-- .row Networking partners -->
	</div>
</section>
