<?php

// Retrieve event posts.
$current_event_args = array(
	'post_type'      => 'events', // Replace 'event' with the slug of your event custom post type.
	'posts_per_page' => -1, // To display all event posts, set this to -1.
	'meta_query'     => array(
		array(
			'key'     => 'current_event', // Replace 'current_event' with the actual field name for the current event custom field.
			'value'   => '1', // Set the desired value to match for the current event (e.g., 'true' or '1').
			'compare' => '=', // Compare the value for an exact match.
		),
	),
);

$event_query = new WP_Query( $current_event_args );

// Start the WordPress loop for event posts.
if ( $event_query->have_posts() ) :
	while ( $event_query->have_posts() ) :
		$event_query->the_post();

		// Get the partners assigned to the current event post.
		// Replace 'relationship_field_name' with the actual field name you set in ACF.
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
					$categories = array(); // Array to store the categories.
					foreach ( $event_partners as $event_partner) :
						// Replace 'category' with the actual taxonomy name for the partner category.
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
							'post_type' => 'partners', // Replace 'partner' with the slug of your partner custom post type.
							'nopaging'  => true,
							'cat'       => $category_id,
						);

						$category_partner_query = new WP_Query( $category_partner_args );
						if ( $category_partner_query->have_posts() ) :
							while ( $category_partner_query->have_posts() ) :
								$category_partner_query->the_post();
								//var_dump( get_the_ID() );
								// Output partner content within the category row.
								?>
									<a href="<?php the_field( 'partner_link' ) ; ?>" target="_blank" class="thumbnail__bigger"><?php the_post_thumbnail( 'full' ); ?></a>
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
