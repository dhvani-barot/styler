<?php

function load_styler_scripts() {

    /* Global Js */
	wp_enqueue_script(
	    'jquery-1.11.3.min',
        get_stylesheet_directory_uri() .'/assets/plugins/jquery/jquery-1.11.3.min.js'
    );

	wp_enqueue_script(
	    'jquery-migrate-1.2.1',
        get_stylesheet_directory_uri() .'/assets/js/jquery-migrate-1.2.1.js'
    );

	wp_enqueue_script(
	    'bootstrap.min.js',
        get_stylesheet_directory_uri() .'/assets/plugins/bootstrap/js/bootstrap.min.js'
    );

    wp_enqueue_script(
        'modernizr.custom.js',
        get_stylesheet_directory_uri() .'/assets/js/modernizr.custom.js'
    );

    wp_enqueue_script(
        'jquery.isotope.min.js',
        get_stylesheet_directory_uri() .'/assets/plugins/isotope/jquery.isotope.min.js'
    );

    wp_enqueue_script(
        'owl.carousel.min.js',
        get_stylesheet_directory_uri() .'/assets/plugins/owl-carousel/owl.carousel.min.js'
    );

    wp_enqueue_script(
        'waypoints.min.js',
        get_stylesheet_directory_uri() .'/assets/js/waypoints.min.js'
    );

    wp_enqueue_script(
        'jquery.prettyPhoto.js',
        get_stylesheet_directory_uri() .'/assets/plugins/prettyphoto/js/jquery.prettyPhoto.js'
    );

    wp_enqueue_script(
        'jquery.easing.min.js',
        'http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'
    );

    wp_enqueue_script(
        'jquery.jelect.js',
        get_stylesheet_directory_uri() .'/assets/plugins/jelect/jquery.jelect.js'
    );

    wp_enqueue_script(
        'jquery.jelect.js',
        get_stylesheet_directory_uri() .'/assets/plugins/nouislider/jquery.nouislider.all.min.js'
    );

    wp_enqueue_script(
        'bootstrap-select.js',
        get_stylesheet_directory_uri() .'/assets/plugins/switcher/js/bootstrap-select.js'
    );

    /*wp_enqueue_script(
        'dmss.js',
        get_stylesheet_directory_uri() .'/assets/plugins/switcher/js/dmss.js' ,
        array('jquery'),
        null,
        true
    );*/

    wp_enqueue_script(
        'cssua.min.js',
        get_stylesheet_directory_uri() .'/assets/js/cssua.min.js'
    );

    wp_enqueue_script(
        'wow.min.js',
        get_stylesheet_directory_uri() .'/assets/js/wow.min.js'
    );

    wp_enqueue_script(
        'custom.js',
        get_stylesheet_directory_uri() .'/assets/js/custom.js'
    );

	/* End Global Js */

}
add_action( 'wp_enqueue_scripts', 'load_styler_scripts' );

function load_styler_css()
{
    /** Global Css */

    wp_enqueue_style(
        'master',
        get_stylesheet_directory_uri().'/assets/css/master.css'
    );

    wp_enqueue_style(
        'switcher',
        get_stylesheet_directory_uri().'/assets/plugins/switcher/css/switcher.css'
    );

    wp_enqueue_style(
        'color1',
        get_stylesheet_directory_uri().'/assets/plugins/switcher/css/color1.css'
    );

    wp_enqueue_style(
        'color2',
        get_stylesheet_directory_uri().'/assets/plugins/switcher/css/color2.css'
    );

    wp_enqueue_style(
        'color3',
        get_stylesheet_directory_uri().'/assets/plugins/switcher/css/color3.css'
    );

    wp_enqueue_style(
        'color4',
        get_stylesheet_directory_uri().'/assets/plugins/switcher/css/color4.css'
    );

    wp_enqueue_style(
        'color5',
        get_stylesheet_directory_uri().'/assets/plugins/switcher/css/color5.css'
    );

    /** End Global Css */
}
add_action( 'wp_enqueue_scripts', 'load_styler_css' );



/**
 * Provides activation/deactivation hook for wordpress theme.
 *
 * @author Krishna Kant Sharma (http://www.krishnakantsharma.com)
 *
 * Usage:
 * ----------------------------------------------
 * Include this file in your theme code.
 * ----------------------------------------------
 * function my_theme_activate() {
 *    // code to execute on theme activation
 * }
 * wp_register_theme_activation_hook('mytheme', 'my_theme_activate');
 *
 * function my_theme_deactivate() {
 *    // code to execute on theme deactivation
 * }
 * wp_register_theme_deactivation_hook('mytheme', 'my_theme_deactivate');
 * ----------------------------------------------
 *
 *
 */

function my_theme_activate() {
    //echo "here";
    //exit;
    // code to execute on theme activation
}
wp_register_theme_activation_hook('mytheme', 'my_theme_activate');

/**
 *
 * @desc registers a theme activation hook
 * @param string $code : Code of the theme. This can be the base folder of your theme. Eg if your theme is in folder 'mytheme' then code will be 'mytheme'
 * @param callback $function : Function to call when theme gets activated.
 */
function wp_register_theme_activation_hook($code, $function) {
    $optionKey="theme_is_activated_" . $code;
    if(!get_option($optionKey)) {
        call_user_func($function);
        update_option($optionKey , 1);
    }
}

/**
 * @desc registers deactivation hook
 * @param string $code : Code of the theme. This must match the value you provided in wp_register_theme_activation_hook function as $code
 * @param callback $function : Function to call when theme gets deactivated.
 */
function wp_register_theme_deactivation_hook($code, $function) {
    // store function in code specific global
    $GLOBALS["wp_register_theme_deactivation_hook_function" . $code]=$function;

    // create a runtime function which will delete the option set while activation of this theme and will call deactivation function provided in $function
    $fn=create_function('$theme', ' call_user_func($GLOBALS["wp_register_theme_deactivation_hook_function' . $code . '"]); delete_option("theme_is_activated_' . $code. '");');

    // add above created function to switch_theme action hook. This hook gets called when admin changes the theme.
    // Due to wordpress core implementation this hook can only be received by currently active theme (which is going to be deactivated as admin has chosen another one.
    // Your theme can perceive this hook as a deactivation hook.
    add_action("switch_theme", $fn);
}

?>