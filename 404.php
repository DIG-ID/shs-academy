<?php get_header(); ?>
	<?php do_action( 'before_main_content' ); ?>
    <style></style>
			<section class="page-content notfound-content">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center">
                            <h1 class="page404__title">404</h1>
							<h2 class="page404__subtitle">Wir bitten um Entschuldigung!</h2>
							<h3 class="page404__text">Diese Seite konnte nicht gefunden werden.</h3>
							<a href="<?php echo get_home_url(); ?>" class="main-btn main-btn__red main-btn__mob-centered page404__btn">zur Startseite</a>
						</div>
					</div>
				</div>
			</section>
	<?php do_action( 'after_main_content' ); ?>
<?php get_footer(); ?>