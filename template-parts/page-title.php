<?php if ( ! is_front_page() ) : ?>
<div id="wrapper-banner">
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 px-15 page__title-col">
				<h1 class="page__title"><?php the_title(); ?></h1>
				<?php if ( is_page('programm') ) : ?>
					<a href="<?php echo get_field('program_file'); ?>" class="programm__page-sublink">Programm downloaden</a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php endif;