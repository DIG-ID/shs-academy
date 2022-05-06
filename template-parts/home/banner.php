<?php
/**
 *
 *style="background:url(<?php echo esc_url( get_field( 'home_page_settings_banner_background_image' ) ); ?>);background-position:center;background-repeat:no-repeat;background-size:cover;background-attachment: fixed;"
 * */
$banner = get_field( 'home_page_settings' );
if ( $banner ) : ?>
	<section id="section-banner" class="section section-banner" >
		<?php
		if ( get_field( 'home_page_settings_banner_background_video' ) ) :
			?>
			<div class="section-banner__video-wrapper rellax" data-rellax-speed="2" data-rellax-percentage="0.5">
				<video class="section-banner__video" playsinline="playsinline" loop="" autoplay="autoplay" muted="muted">
					<source src="<?php the_field( 'home_page_settings_banner_background_video' ); ?>" type="video/mp4">
					<img src="<?php echo wp_upload_dir()['url'] . '/Header-Fallback.jpg' ?>" title="Your browser does not support the <video> tag">
				</video>
			</div>
			<?php
		else :
			?>
			<img src="<?php echo esc_url( get_field( 'home_page_settings_banner_background_image' ) ); ?>" alt="" class="rellax" data-rellax-speed="-3" data-rellax-percentage="0.5">
			<?php
		endif;
		?>
		<div class="section-banner__content rellax" data-rellax-speed="2" data-rellax-percentage="0.5">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-12 col-sm-12 col-md-11 col-lg-8">
						<p class="section-banner__subtitle"><?php the_field( 'home_page_settings_banner_subtitle' ); ?></p>
						<p class="section-banner__keywords"><?php the_field( 'home_page_settings_banner_keywords' ); ?></p>
						<h1 class="section-banner__title "><?php the_field( 'home_page_settings_banner_title' ); ?></h1>
						<div class="section-banner__description"><?php the_field( 'home_page_settings_banner_content' ); ?></div>
						<a class="section-banner__link main-btn main-btn__red" href="<?php esc_url( the_field( 'home_page_settings_banner_button_1_link' ) ); ?>"><?php the_field( 'home_page_settings_banner_button_1_text' ); ?></a>
						<a class="section-banner__link  main-btn main-btn__white" href="<?php esc_url( the_field( 'home_page_settings_banner_button_2_link' ) ); ?>"><?php the_field( 'home_page_settings_banner_button_2_text' ); ?></a>
					</div>
				</div>
			</div>
		</div>
		<?php get_template_part( 'template-parts/home/countdown' ); ?>
	</section>
<?php endif;
