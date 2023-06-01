<section id="section-partners" class="section section-partners">
	<div class="container-fluid px-5">
		<div class="row">
			<div class="col-12 text-center">
				<h2 class="section-partners__title"><?php esc_html_e( 'Partner', 'shs-a' ); ?></h2>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="partners-swiper">
					<div class="swiper-wrapper">
						<?php
						$partners_posts = get_field( 'event_partners' );
						if ( $partners_posts ) :
							foreach ( $partners_posts as $partners_post ) :
								$partners_link         = get_field( 'partner_link', $partners_post->ID );
								$partners_showon_front = get_field( 'show_partner_on_the_home_page', $partners_post->ID );
								// Setup this post for WP functions (variable must be named $post).
								if ( $partners_showon_front ) :
									?>
									<a href="<?php echo esc_url( $partners_link ); ?>" class="swiper-slide partner-card">
										<?php echo get_the_post_thumbnail( $partners_post->ID, 'full' ); ?>
									</a>
									<?php
								endif;
							endforeach;
						endif;
						?>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 text-center">
				<a class="main-btn main-btn__red" href="/partner"><?php esc_html_e( 'Partner treffen', 'shs-a' ); ?></a>
			</div>
		</div>
	</div>
</section>
