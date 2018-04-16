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

    wp_enqueue_style(
        'style-css',
        get_stylesheet_directory_uri().'/style.css'
    );
    /** End Global Css */

}
add_action( 'wp_enqueue_scripts', 'load_styler_scripts' );


// Add theme support + menus
function styler_setup() {
    add_theme_support( 'title-tag' );
    load_theme_textdomain( 'styler' );
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'styler-featured-image', 2000, 1200, true );
    add_image_size( 'styler-thumbnail-avatar', 100, 100, true );
    // This theme uses wp_nav_menu() in two locations.
    register_nav_menus( array(
        'main'    => __( 'Main Menu', 'styler' ),
        'social' => __( 'Social Links Menu', 'styler' ),
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );

    /*
     * Enable support for Post Formats.
     *
     * See: https://codex.wordpress.org/Post_Formats
     */
    add_theme_support( 'post-formats', array(
        'aside',
        'image',
        'video',
        'quote',
        'link',
        'gallery',
        'audio',
    ) );

    add_theme_support( 'woocommerce' );

}
add_action( 'after_setup_theme', 'styler_setup' );

// Register widget area.
function twentyseventeen_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Blog Sidebar', 'styler' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'styler' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 1', 'styler' ),
        'id'            => 'sidebar-2',
        'description'   => __( 'Add widgets here to appear in your footer.', 'styler' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 2', 'styler' ),
        'id'            => 'sidebar-3',
        'description'   => __( 'Add widgets here to appear in your footer.', 'styler' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'twentyseventeen_widgets_init' );


/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ... and
 * a 'Continue reading' link.
 * @param string $link Link to single post/page.
 * @return string 'Continue reading' link prepended with an ellipsis.
 */
function styler_excerpt_more( $link ) {
    if ( is_admin() ) {
        return $link;
    }

    $link = sprintf( '<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
        esc_url( get_permalink( get_the_ID() ) ),
        /* translators: %s: Name of current post */
        sprintf( __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'styler' ), get_the_title( get_the_ID() ) )
    );
    return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'styler_excerpt_more' );

remove_action('woocommerce_before_shop_loop_item','woocommerce_template_loop_product_link_open',10);
add_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open_new', 10 );
function woocommerce_template_loop_product_link_open_new() {
    echo '<a href="' . get_the_permalink() . '" class="products__foto">';
}

remove_action('woocommerce_shop_loop_item_title','woocommerce_template_loop_product_title',10);
add_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title_new', 10 );
function woocommerce_template_loop_product_title_new() {
    echo '<h4 class="products__name"><a href="#">' . get_the_title() . '</a></h4>';
}

remove_action( 'woocommerce_shop_loop_subcategory_title', 'woocommerce_template_loop_category_title', 10 );
add_action( 'woocommerce_shop_loop_subcategory_title', 'woocommerce_template_loop_category_title_new', 10 );
function woocommerce_template_loop_category_title_new( $category ) { ?>
    <div class="products__category xxx">
        <?php echo "<a href='#'>".esc_html( $category->name )."</a>"; ?>
    </div>
    <?php
}

remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );

add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 20 );


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
