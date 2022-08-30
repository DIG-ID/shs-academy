<section id="section-form" class="section-form section__form-wrapup">
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-12 col-sm-12 col-md-6 text-center">
					<h2 class="wrap-up__form-title"><?php the_field('wrap_up_form_wrap_up_form_title'); ?></h2>
					<p class="wrap-up__form-desc"><?php the_field('wrap_up_form_wrap_up_form_description'); ?></p>
					<?php echo do_shortcode( '[contact-form-7 id="1180" title="Wrap Up Contact Form"]' ); ?>
			</div>
		</div>
	</div>
</section>