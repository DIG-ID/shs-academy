<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<link rel="stylesheet" href="https://use.typekit.net/usk0vgb.css">
		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>
		<?php do_action( 'wp_body_open' ); ?>

		<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">
				<nav class="navbar navbar-expand-xl navbar-light navbar-toparea">
					<div class="container">
						<a href="mailto:email@email.com" class="custom-menu-link" rel="home" aria-current="page">email@email.com</a>
						<?php
						wp_nav_menu(
							array(
								'theme_location'  => 'toparea',
								'container_class' => 'collapse navbar-collapse',
								'container_id'    => 'navbarNavDropdown',
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
				<nav class="navbar navbar-expand-xl navbar-light navbar-main">
					<div class="container">
							<!-- Your site title as branding in the menu -->
							<?php if ( ! has_custom_logo() ) { ?>
								<?php if ( is_front_page() && is_home() ) : ?>
									<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>
								<?php else : ?>
									<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>
								<?php endif; ?>
							<?php } else {
								the_custom_logo();
							} ?><!-- end custom logo -->
						<!-- The WordPress Menu goes here -->
						<?php
						wp_nav_menu(
							array(
								'theme_location'  => 'primary',
								'container_class' => 'collapse navbar-collapse',
								'container_id'    => 'navbarNavDropdown',
								'menu_class'      => 'navbar-nav ml-auto',
								'fallback_cb'     => '',
								'menu_id'         => 'main-menu',
								'depth'           => 2,
								'walker'          => '',
							)
						);
						?>
					</div>
				</nav><!-- .site-navigation -->
			</div><!-- #wrapper-navbar end -->
