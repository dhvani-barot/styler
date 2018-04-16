<?php
/**
 * Functions for active_callback.
 *
 * @package eCommerce_Gem
 */

if ( ! function_exists( 'ecommerce_gem_is_featured_slider_active' ) ) :

	/**
	 * Check if featured slider is active.
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function ecommerce_gem_is_featured_slider_active( $control ) {

		if ( true == $control->manager->get_setting( 'theme_options[slider_status]' )->value() ) {
			return true;
		} else {
			return false;
		}

	}

endif;


if ( ! function_exists( 'ecommerce_gem_is_top_header_active' ) ) :

	/**
	 * Check if featured slider is active.
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function ecommerce_gem_is_top_header_active( $control ) {

		if ( true == $control->manager->get_setting( 'theme_options[show_top_header]' )->value() ) {
			return true;
		} else {
			return false;
		}

	}

endif;

if ( ! function_exists( 'ecommerce_gem_is_top_header_information_active' ) ) :

	/**
	 * Check if top header is active and store information is selected slider is active.
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function ecommerce_gem_is_top_header_information_active( $control ) {

		if ( true == $control->manager->get_setting( 'theme_options[show_top_header]' )->value() && $control->manager->get_setting( 'theme_options[top_left_type]' )->value() == 'store-info' ) {
			return true;
		} else {
			return false;
		}

	}

endif;