<?php

if ( ! is_front_page() ) : ?>
<div id="wrapper-banner">
	<div class="container"><div class="row">
		<div class="col-12 col-sm-12 col-md-12 px-15 page__title"><?php echo get_the_title(); ?></div>
	</div></div>
</div>
<?php endif;
