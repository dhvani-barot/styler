<?php
/**
 * eCommerce Gem Theme Customizer.
 *
 * @package eCommerce_Gem
 */

/**
 * Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function ecommerce_gem_customize_register( $wp_customize ) {

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
		$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'            => '.site-title a',
			'container_inclusive' => false,
			'render_callback'     => 'ecommerce_gem_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'            => '.site-description',
			'container_inclusive' => false,
			'render_callback'     => 'ecommerce_gem_customize_partial_blogdescription',
		) );
	}

	// Sanitization.
	require_once trailingslashit( get_template_directory() ) . '/includes/customizer/sanitize.php';

	// Active callback.
	require_once trailingslashit( get_template_directory() ) . '/includes/customizer/active.php';

	// Load options.
	require_once trailingslashit( get_template_directory() ) . '/includes/customizer/options/options.php';

}
add_action( 'customize_register', 'ecommerce_gem_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @since 1.0.0
 *
 * @return void
 */
function ecommerce_gem_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since 1.0.0
 *
 * @return void
 */
function ecommerce_gem_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Enqueue style for custom customize control.
 */
function ecommerce_gem_custom_customize_enqueue() {
	wp_enqueue_style( 'ecommerce-gem-customize', get_template_directory_uri() . '/includes/customizer/css/customize-controls.css' );
}
add_action( 'customize_controls_enqueue_scripts', 'ecommerce_gem_custom_customize_enqueue' );