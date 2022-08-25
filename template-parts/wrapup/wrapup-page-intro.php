<section id="wrapup-intro-section" class="section section__wrapupintro">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 col-lg-12 col-xl-6 wrapup-intro__col p-0">
                <img src="<?php the_field('wrap_up_section_wrap_up_section_image'); ?>" alt="" title="">
            </div>
			<div class="col-md-12 col-lg-12 col-xl-6">
                <div class="wrapup-intro__wrapper">
                    <p class="wrapup-intro__ante-title"><span><?php the_field('wrap_up_section_wrap_up_section_subtitle'); ?></span></p>
                    <h2 class="wrapup-intro__title"><?php the_field('wrap_up_section_wrap_up_section_title'); ?></h2>
                    <p class="aboutus__text-intro"><?php the_field('wrap_up_section_wrap_up_section_description'); ?></p>
                    <a class="main-btn main-btn__red" href="<?php the_field('wrap_up_section_wrap_up_section_link'); ?>">Zu den Präsentationen</a>
                </div>
            </div>
		</div>
	</div>
</section>

<section id="section-program" class="section section-program section-program__wrapup">
	<div class="container">
		<div class="row align-items-center justify-content-center">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12">
				<div class="section-program__content wrap_up_section__program_content">
					<h2 class="section-program__title"><?php the_field( 'program_section_program_title' ); ?></h2>
					<p class="section-program__description wrap_up_section__program_description"><?php the_field( 'program_section_program_description' ); ?></p>
					<a class="main-btn main-btn__white btn wrap_up_section__button" target="_blank" href="<?php the_field( 'program_section_button_link' ); ?>"><?php the_field( 'program_section_button_name' ); ?></a>
                </div>
			</div>
		</div>
	</div>
	<div class="section-program__thumbnails">
		<div class="container">
			<div class="row justify-space-between">
				<?php
				$images = get_field( 'home_page_settings_program_thumbnails' );
				$size = 'full'; // (thumbnail, medium, large, full or custom size)
				if ( $images ): ?>
					<?php foreach ( $images as $image_id ): ?>
						<div class="col-12 col-sm-12 col-md-4 col-lg-4">
							<?php echo wp_get_attachment_image( $image_id, $size ); ?>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>