<?php if ( ! is_front_page() ) : ?>
<div id="wrapper-banner">
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 px-15 page__title-col">
				<h1 class="page__title"><?php the_title(); ?></h1>
				<?php
				if ( is_page_template( 'page-templates/page-program-v2.php' ) ) :
					$curr_program = get_field( 'program_file_v2', shs_theme_get_current_program() );
					if ( $curr_program ) :
						echo '<a class="main-btn main-btn__red programs__dl-btn" target="_blank" href="' . esc_url( $curr_program ) . '">' . esc_html__( 'Programm downloaden', 'shs-a' ) . '</a>';
					endif;
				endif;
				?>
			</div>
		</div>
	</div>
</div>
<?php endif;