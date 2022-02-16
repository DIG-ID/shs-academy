<div id="opener__menu" class="closed">

<?php
wp_nav_menu(
	array(
		'theme_location'  => 'primary',
		'container_class' => 'navbar-collapse',
		'container_id'    => 'navbar-mobile',
		'menu_class'      => 'navbar-nav ml-auto',
		'fallback_cb'     => '',
		'menu_id'         => 'main-menu',
		'depth'           => 2,
		'walker'          => '',
	)
);
?>

<div class="container menu__container--mobile">

</div>
</div>
