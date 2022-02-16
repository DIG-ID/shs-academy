<?php
/**
 * Register theme customizer
 */


// Import custom controls
//require get_parent_theme_file_path( '/inc/customizer/custom-controls/TinyMCE.php' );

function shs_theme_customizer_register( $wp_customize ) {
	// New panel for the theme options.
	$wp_customize->add_panel(
		'shs_theme_panel',
		array(
			'priority'       => 20,
			'capability'     => 'edit_theme_options',
			'theme_supports' => '',
			'title'          => __( 'SHS Academy Theme Options', 'shs-a' ),
			'description'    => __( 'Theme options for the Kreuz Bern Theme', 'shs-a' ),
		)
	);

	//require get_parent_theme_file_path( '/inc/customizer/footer.php' );
	require get_parent_theme_file_path( '/inc/customizer/socials.php' );

}
add_action( 'customize_register', 'shs_theme_customizer_register' );
