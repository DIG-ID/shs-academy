<?php

// Adds customizer section.
$wp_customize->add_section(
	'footer_section',
	array(
		'priority'       => 90,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __( 'Footer', 'shs-a' ),
		'description'    => __( 'Place to edit the footer content', 'shs-a' ),
		'panel'          => 'shs_theme_panel',
	)
);

// Block 1
$wp_customize->add_setting(
	'block-1',
	array(
		'default'           => '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => 'wp_kses_post',
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'block-1',
		array(
			'label'       => __( 'Block 1', 'shs-a' ),
			'description' => '',
			'section'     => 'footer_section',
			'type'        => 'textarea',
		)
	)
);

// Block 2
$wp_customize->add_setting(
	'block-2',
	array(
		'default'           => '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => 'wp_kses_post',
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'block-2',
		array(
			'label'       => __( 'Block 2', 'shs-a' ),
			'description' => '',
			'section'     => 'footer_section',
			'type'        => 'textarea',
		)
	)
);

// Block 3
$wp_customize->add_setting(
	'block-3',
	array(
		'default'           => '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => 'wp_kses_post',
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'block-3',
		array(
			'label'       => __( 'Block 3', 'shs-a' ),
			'description' => '',
			'section'     => 'footer_section',
			'type'        => 'textarea',
		)
	)
);

// Block 4
$wp_customize->add_setting(
	'block-4',
	array(
		'default'           => '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => 'wp_kses_post',
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'block-4',
		array(
			'label'       => __( 'Block 4', 'shs-a' ),
			'description' => '',
			'section'     => 'footer_section',
			'type'        => 'textarea',
		)
	)
);
