<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<link rel="stylesheet" href="https://use.typekit.net/usk0vgb.css">
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri() . '/src/images/favicon.ico' ?>" type="image/x-icon"/>
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-WP8Z9TT');</script>
		<!-- End Google Tag Manager -->
		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WP8Z9TT"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
		<?php do_action( 'wp_body_open' ); ?>
		<header>
			<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">
					<nav class="navbar navbar-expand-lg navbar-light navbar-toparea">
						<div class="container">
							<a href="mailto:info@shsacademy.ch" class="custom-menu-link" rel="home" aria-current="page"><?php esc_html_e('info@shsacademy.ch', 'shs' ); ?></a>
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
					<nav class="navbar navbar-expand-lg navbar-light navbar-main">
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
								<?php get_template_part( 'template-parts/header-mobile' ); ?>
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
							<div class="tooltiptext">
								<img src="<?php echo wp_upload_dir()['url'] . '/Top__bar.svg' ?>" width="45" height="45">
								<span><?php esc_html_e('Präsentationen und Fotos des Swiss Innovation Day 2022 werden in Kürze hier verfügbar sein.', 'shs' ) ?></span>
							</div>
						</div>
					</nav><!-- .site-navigation -->
				</div><!-- #wrapper-navbar end -->

				<?php get_template_part( 'template-parts/events-menu' ); ?>
				<?php get_template_part( 'template-parts/menu-mobile' ); ?>
				<?php get_template_part( 'template-parts/page-title' ); ?>
			</header>
