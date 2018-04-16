<?php
/**
 * Footer Options.
 *
 * @package eCommerce_Gem
 */

// Footer Section.
$wp_customize->add_section( 'section_footer',
	array(
		'title'      => esc_html__( 'Footer Options', 'ecommerce-gem' ),
		'priority'   => 100,
		'panel'      => 'theme_option_panel',
	)
);

// Setting copyright_text.
$wp_customize->add_setting( 'theme_options[copyright_text]',
	array(
		'default'           => $default['copyright_text'],
		'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control( 'theme_options[copyright_text]',
	array(
		'label'    => esc_html__( 'Copyright Text', 'ecommerce-gem' ),
		'section'  => 'section_footer',
		'type'     => 'text',
		'priority' => 100,
	)
);

$wp_customize->add_setting( 'theme_options[powerby_text]',
	array(
		'default'           => $default['powerby_text'],
		'sanitize_callback' => 'ecommerce_gem_sanitize_credit',
	)
);
$wp_customize->add_control( 'theme_options[powerby_text]',
	array(
		'label'    		=> esc_html__( 'Powerby Text', 'ecommerce-gem' ),
		'description' 	=> esc_html__( 'This will override default powerby text in footer of theme. Leave empty if you like to hide powerby text.', 'ecommerce-gem' ),
		'section'  		=> 'section_footer',
		'type'     		=> 'textarea',
		'priority' 		=> 100,
	)
);