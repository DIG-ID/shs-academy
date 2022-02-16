		<footer id="main-footer">
			<div class="container">
				<div class="row">
					<div class="col-12 col-sm-12 col-md-12 col-xl-12 col-xxl-12 main-footer-wrapper">
						<?php dynamic_sidebar( 'footer' ); ?>
					</div>
				</div>
				<div class="row">
					<div class="col-12 copyright-wrapper">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'copyright',
								'menu_id'        => 'copyright-menu',
							)
						);
						?>
					</div>
				</div>
			</div>
		</footer>
		<?php wp_footer(); ?>
	</body>

</html>
