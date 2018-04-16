<?php
/**
 * Core functions.
 *
 * @package eCommerce_Gem
 */

if ( ! function_exists( 'ecommerce_gem_get_option' ) ) :

    /**
     * Get theme option.
     *
     * @since 1.0.0
     *
     * @param string $key Option key.
     * @return mixed Option value.
     */
    function ecommerce_gem_get_option( $key ) {

        if ( empty( $key ) ) {

            return;

        }

        $ecommerce_gem_default = ecommerce_gem_get_default_theme_options();

        $default = ( isset( $ecommerce_gem_default[ $key ] ) ) ? $ecommerce_gem_default[ $key ] : '';
        $theme_options = get_theme_mod( 'theme_options', $ecommerce_gem_default );
        $theme_options = array_merge( $ecommerce_gem_default, $theme_options );
        $value = '';

        if ( isset( $theme_options[ $key ] ) ) {
            $value = $theme_options[ $key ];
        }

        return $value;

    }

endif;

if ( ! function_exists( 'ecommerce_gem_get_default_theme_options' ) ) :

    /**
     * Get default theme options.
     *
     * @since 1.0.0
     *
     * @return array Default theme options.
     */
    function ecommerce_gem_get_default_theme_options() {

        $defaults = array();

        // Header.
        $defaults['site_identity']      = 'title-text';
        $defaults['show_top_header']    = false;
        $defaults['top_left_type']      = 'store-info';
        $defaults['show_social_icons']  = false;
        $defaults['login_text']         = esc_html__( 'Login / Register', 'ecommerce-gem' );
        $defaults['login_icon']         = 'fa-user-o';
        $defaults['cart_icon']          = 'fa-shopping-cart';
        $defaults['show_top_search']    = true;

        // Layout.
        $defaults['global_layout']      = 'right-sidebar';
        $defaults['excerpt_length']     = 40;
        $defaults['readmore_text']      = esc_html__( 'Read More', 'ecommerce-gem' );

        // Footer.
        $defaults['copyright_text']     = esc_html__( 'Copyright &copy; All rights reserved.', 'ecommerce-gem' );
        $defaults['powerby_text']       = esc_html__( 'eCommerce Gem Plus by', 'ecommerce-gem' ) . ' <a target="_blank" rel="designer" href="https://promenadethemes.com/">Promenade Themes</a>';

        // Breadcrumb.
        $defaults['breadcrumb_type']    = 'simple';

        // Slider.
        $defaults['slider_status']                  = false;
        $defaults['button_text_1']                  = esc_html__( 'Shop Now', 'ecommerce-gem' );
        $defaults['button_text_2']                  = esc_html__( 'Shop Now', 'ecommerce-gem' );
        $defaults['button_text_3']                  = esc_html__( 'Shop Now', 'ecommerce-gem' );
        $defaults['button_text_4']                  = esc_html__( 'Shop Now', 'ecommerce-gem' );
        $defaults['button_text_5']                  = esc_html__( 'Shop Now', 'ecommerce-gem' );
        $defaults['caption_position_1']             = 'center';
        $defaults['caption_position_2']             = 'center';
        $defaults['caption_position_3']             = 'center';
        $defaults['caption_position_4']             = 'center';
        $defaults['caption_position_5']             = 'center';
        $defaults['slider_autoplay_status']         = true;
        $defaults['slider_pager_status']            = true;
        $defaults['slider_overlay_status']          = true;
        $defaults['slider_transition_effect']       = 'fade';
        $defaults['slider_transition_delay']        = 3;

        // colors
        $defaults['primary_color']              = '#e54242';
        $defaults['top_header_bg']              = '#e54242';
        $defaults['top_header_color']           = '#ffffff';
        $defaults['site_title_color']           = '#e54242';
        $defaults['site_tagline_color']         = '#515151';
        $defaults['main_menu_color']            = '#515151';
        $defaults['active_hover_color']         = '#e54242';
        $defaults['mobile_menu_color']          = '#e54242';
        $defaults['breadcrumb_bg']              = '#e54242';
        $defaults['breadcrumb_link']            = '#ffffff';
        $defaults['breadcrumb_active']          = '#dddddd';
        $defaults['top_footer_bg']              = '#101010';
        $defaults['top_footer_title_color']     = '#ffffff';
        $defaults['top_footer_text_color']      = '#707070';
        $defaults['bottom_footer_bg']           = '#171717';
        $defaults['bottom_footer_text_color']   = '#707070';
        $defaults['scroll_top_bg']              = '#e54242';
        $defaults['reset_colors']               = false;

        // Fonts
        $defaults['body_font']                  = 'Open+Sans:400,400italic,600,700';
        $defaults['site_identity_font']         = 'Open+Sans:400,400italic,600,700';
        $defaults['menu_font']                  = 'Raleway:400,300,500,600,700,900';
        $defaults['heading_font']               = 'Raleway:400,300,500,600,700,900';
        $defaults['paragraph_font']             = 'Open+Sans:400,400italic,600,700';
        $defaults['reset_fonts']                = false;

        return $defaults;
    }

endif;

//=============================================================
// Get all options in array
//=============================================================
if ( ! function_exists( 'ecommerce_gem_get_options' ) ) :

    /**
     * Get all theme options in array.
     *
     * @since 1.0.0
     *
     * @return array Theme options.
     */
    function ecommerce_gem_get_options() {

        $value = array();

        $value = get_theme_mods();

        return $value;

    }

endif;

//=============================================================
// Get only color options in array
//=============================================================
if ( ! function_exists( 'ecommerce_gem_get_default_color_options' ) ) :

    /**
     * Get default color options.
     *
     * @since 1.0.0
     *
     * @return array Default theme options.
     */
    function ecommerce_gem_get_default_color_options() {

        $defaults = array();

        $defaults['primary_color']              = '#e54242';
        $defaults['top_header_bg']              = '#e54242';
        $defaults['top_header_color']           = '#ffffff';
        $defaults['site_title_color']           = '#e54242';
        $defaults['site_tagline_color']         = '#515151';
        $defaults['main_menu_color']            = '#515151';
        $defaults['active_hover_color']         = '#e54242';
        $defaults['mobile_menu_color']          = '#e54242';
        $defaults['breadcrumb_bg']              = '#e54242';
        $defaults['breadcrumb_link']            = '#ffffff';
        $defaults['breadcrumb_active']          = '#dddddd';
        $defaults['top_footer_bg']              = '#101010';
        $defaults['top_footer_title_color']     = '#ffffff';
        $defaults['top_footer_text_color']      = '#707070';
        $defaults['bottom_footer_bg']           = '#171717';
        $defaults['bottom_footer_text_color']   = '#707070';
        $defaults['scroll_top_bg']              = '#e54242';
        $defaults['reset_colors']               = false;

        return $defaults;
    }

endif;

//=============================================================
// Color reset
//=============================================================
if ( ! function_exists( 'ecommerce_gem_reset_colors' ) ) :

    function ecommerce_gem_reset_colors( $data ) {

        $reset_colors = ecommerce_gem_get_option( 'reset_colors' );

        if ( true == $reset_colors ) {

            $options = ecommerce_gem_get_options();

            $options['theme_options']['reset_colors']       = false;

            $color_settings = ecommerce_gem_get_default_color_options();

            if ( ! empty( $color_settings ) ) {

                foreach ( $color_settings as $key => $val ) {

                    $options['theme_options'][ $key ] = $val;

                }
            }

            update_option( 'theme_mods_ecommerce-gem-plus', $options );

        }

    }

endif;

add_action( 'customize_save_after', 'ecommerce_gem_reset_colors' );

//=============================================================
// Get only font options in array
//=============================================================
if ( ! function_exists( 'ecommerce_gem_get_default_font_options' ) ) :

    /**
     * Get default font options.
     *
     * @since 1.0.0
     *
     * @return array Default theme options.
     */
    function ecommerce_gem_get_default_font_options() {

        $defaults = array();

        // Fonts
        $defaults['body_font']                  = 'Open+Sans:400,400italic,600,700';
        $defaults['site_identity_font']         = 'Open+Sans:400,400italic,600,700';
        $defaults['menu_font']                  = 'Raleway:400,300,500,600,700,900';
        $defaults['heading_font']               = 'Raleway:400,300,500,600,700,900';
        $defaults['paragraph_font']             = 'Open+Sans:400,400italic,600,700';
        $defaults['reset_fonts']                = false;

        return $defaults;
    }

endif;

//=============================================================
// Font reset
//=============================================================
if ( ! function_exists( 'ecommerce_gem_reset_fonts' ) ) :

    function ecommerce_gem_reset_fonts( $data ) {

        $reset_fonts = ecommerce_gem_get_option( 'reset_fonts' );

        if ( true == $reset_fonts ) {

            $options = ecommerce_gem_get_options();

            $options['theme_options']['reset_fonts'] = false;

            $font_settings = ecommerce_gem_get_default_font_options();

            if ( ! empty( $font_settings ) ) {

                foreach ( $font_settings as $key => $val ) {

                    $options['theme_options'][ $key ] = $val;

                }
            }

            update_option( 'theme_mods_ecommerce-gem-plus', $options );

        }

    }

endif;

add_action( 'customize_save_after', 'ecommerce_gem_reset_fonts' );