<section id="section-partners" class="section section-partners">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h2 class="section-partners__ title"><?php esc_html_e( 'Die Partner', 'shs-a' ); ?></h2>
			</div>
		</div>
		<div class="swipersection-partners__swiper">
			<div class="row swiper-wrapper">
			<?php
			$partners_posts = get_field( 'event_partners' );
			if ( $partners_posts ) :
				foreach ( $partners_posts as $partners_post ) :
					$partners_link         = get_field( 'partner_link', $partners_post->ID );
					$partners_showon_front = get_field( 'show_partner_on_the_home_page', $partners_post->ID );
					// Setup this post for WP functions (variable must be named $post).
					if ( $partners_showon_front ) :
						?>
						<figure class="col-12 col-sm-12 col-md-2 col-lg-2 swiper-slide partner-card">
							<?php echo get_the_post_thumbnail( $partners_posteem qut->ID, 'full' ); ?>
						</figure>
						<?php
					endif;
				endforeach;
			endif;
			?>
			</div>
		</div>
		<div class="row">
			<div class="col-12 text-center">
				<a  class="main-btn main-btn__red" href="/partner"><?php esc_html_e( 'See all partners', 'shs-a' ); ?></a>
				<a class="main-btn main-btn__white" href="<?php esc_url( the_field( 'home_page_settings_about_us_button_2_link' ) ); ?>"><?php esc_html_e( 'Become a partner', 'shs-a' ); ?></a>
			</div>
		</div>
	</div>
</section>
