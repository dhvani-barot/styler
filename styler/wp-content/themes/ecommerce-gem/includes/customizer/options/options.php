<?php
/**
 * Options.
 *
 * @package eCommerce_Gem
 */

$default = ecommerce_gem_get_default_theme_options();

// Load custom controls
require_once trailingslashit( get_template_directory() ) . '/includes/customizer/controls/custom-controls.php';

// Add Theme Options Panel.
$wp_customize->add_panel( 'theme_option_panel',
	array(
		'title'      => esc_html__( 'Theme Options', 'ecommerce-gem' ),
		'priority'   => 100,
	)
);

// Load header options.
require_once trailingslashit( get_template_directory() ) . '/includes/customizer/options/header.php';

// Load blog options.
require_once trailingslashit( get_template_directory() ) . '/includes/customizer/options/blog.php';

// Load breadcrumb options.
require_once trailingslashit( get_template_directory() ) . '/includes/customizer/options/breadcrumb.php';

// Load footer options.
require_once trailingslashit( get_template_directory() ) . '/includes/customizer/options/footer.php';

// Load slider options.
require_once trailingslashit( get_template_directory() ) . '/includes/customizer/options/slider.php';