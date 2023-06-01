<?php
// Retrieve event posts.
$current_event_args = array(
	'post_type'      => 'events',
	'posts_per_page' => -1,
	'meta_query'     => array(
		array(
			'key'     => 'current_event',
			'value'   => '1',
			'compare' => '=',
		),
	),
);
$event_query = new WP_Query( $current_event_args );
// Start the WordPress loop for event posts.
if ( $event_query->have_posts() ) :
	while ( $event_query->have_posts() ) :
		$event_query->the_post();
		// Get the partners assigned to the current event post.
		$event_partners = get_field( 'event_partners', get_the_ID() );
		// Check if there are related partners.
		if ( $event_partners ) :
			?>
			<section id="page-partners-section" class="section section__partners">
				<div class="container container__inside">
					<div class="row align-items-center justify-content-center">
						<div class="col-md-12 col-sm-12 px-15">
							<p class="partners__topsection-title"><?php esc_html_e( 'Partner', 'shsa' ); ?></p>
						</div>
					</div>
					<?php
					// Loop through the related partners.
					$categories = array();
					foreach ( $event_partners as $event_partner ) :
						$partner_categories = wp_get_post_terms( $event_partner->ID, 'category' );
						// Loop through the partner categories.
						foreach ( $partner_categories as $category ) :
							$categories[ $category->term_id ] = $category->name;
						endforeach;
					endforeach;
					// Display a row for each category.
					foreach ( $categories as $category_id => $category_name ) :
						echo '<div class="row">';
						echo '<h2 class="partners__catTitle">' . $category_name . '</h2>';
						echo '<div class="col-md-12 col-sm-12 px-15 partners__column">';
						// Query partners within the category.
						$category_partner_args = array(
							'post_type' => 'partners',
							'nopaging'  => true,
							'cat'       => $category_id,
							'post__in'  => wp_list_pluck( $event_partners, 'ID' ),
						);
						$category_partner_query = new WP_Query( $category_partner_args );
						if ( $category_partner_query->have_posts() ) :
							while ( $category_partner_query->have_posts() ) :
								$category_partner_query->the_post();
								// Output partner content within the category row.
								?>
									<a href="<?php the_field( 'partner_link' ) ; ?>" target="_blank" class="thumbnail__bigger"><?php echo get_the_post_thumbnail( get_the_ID(), 'full' ); ?></a>
								<?php
							endwhile;
							wp_reset_postdata();
						endif;
						echo '</div></div><!-- .row -->';
					endforeach;
					?>
				</div>
			</section>
			<?php
		endif;
	endwhile;
	wp_reset_postdata();
endif;
