<?php
/**
 * 
 *style="background:url(<?php echo esc_url( get_field( 'home_page_settings_banner_background_image' ) ); ?>);background-position:center;background-repeat:no-repeat;background-size:cover;background-attachment: fixed;"
 * */ 
$banner = get_field( 'home_page_settings' );
if ( $banner ) : ?>
	<section id="section-banner" class="section-banner" >
		<img src="<?php echo esc_url( get_field( 'home_page_settings_banner_background_image' ) ); ?>" alt="" class="rellax" data-rellax-speed="-3" data-rellax-percentage="0.5">
		<div class="section-banner__content rellax" data-rellax-speed="3" data-rellax-percentage="0.5">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-12 col-sm-12 col-md-10 col-lg-8">
						<p class="section-banner__subtitle"><?php the_field( 'home_page_settings_banner_subtitle' ); ?></p>
						<h1 class="section-banner__title "><?php the_field( 'home_page_settings_banner_title' ); ?></h1>
						<div class="section-banner__description"><?php the_field( 'home_page_settings_banner_content' ); ?></div>
						<a class="section-banner__link main-btn main-btn__red" href="<?php esc_url( the_field( 'home_page_settings_banner_button_1_link' ) ); ?>"><?php esc_html_e( 'Get Ticket Now', 'shs-a' ); ?></a>
						<a class="section-banner__link  main-btn main-btn__white" href="<?php esc_url( the_field( 'home_page_settings_banner_button_2_link' ) ); ?>"><?php esc_html_e( 'Download Program', 'shs-a' ); ?></a>
					</div>
				</div>
			</div>
		</div>
		<?php get_template_part( 'template-parts/home/countdown' ); ?>
	</section>
<?php endif;
