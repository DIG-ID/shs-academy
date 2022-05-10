<div id="opener__menu" class="closed">
	<nav class="navbar navbar-mobile">
	<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'megamenu',
				'container_class' => 'container navbar-collapse mega-navbar',
				'container_id'    => 'navbar-pmenu',
				'menu_class'      => 'navbar-nav ml-auto',
				'fallback_cb'     => '',
				'menu_id'         => 'mega-menu',
				'depth'           => 2,
				'walker'          => '',
			)
		);
	?>
	<div class="container menu__container--mobile">
	<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'primary',
				'container_class' => 'navbar-collapse',
				'container_id'    => 'navbar-mobile-toparea',
				'menu_class'      => 'navbar-nav ml-auto',
				'fallback_cb'     => '',
				'menu_id'         => 'toparea-menu',
				'depth'           => 2,
				'walker'          => '',
			)
		);
	?>
	
		<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'toparea',
					'container_class' => 'navbar-collapse',
					'container_id'    => 'navbar-mobile-toparea',
					'menu_class'      => 'navbar-nav ml-auto',
					'fallback_cb'     => '',
					'menu_id'         => 'toparea-menu',
					'depth'           => 2,
					'walker'          => '',
				)
			);
		?>
	</div>
	</nav>
</div>
