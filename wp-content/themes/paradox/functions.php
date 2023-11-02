
<?php


// Stylesheet linking
function load_stylesheets()
{
    
    wp_register_style('nunitosans_cdn', 'https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap', array());
    wp_register_style('bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array());
    wp_register_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array());
    wp_register_style('elegant-icon', get_template_directory_uri() . '/assets/css/elegant-icons.css', array());
    wp_register_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array());
    wp_register_style('nice-select', get_template_directory_uri() . '/assets/css/nice-select.css', array());
    wp_register_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array());
    wp_register_style('slicknav', get_template_directory_uri() . '/assets/css/slicknav.min.css', array());
    wp_register_style('stylesheet', get_template_directory_uri() . '/assets/css/style.css', array());

    
    wp_enqueue_style('nunitosans_cdn');
    wp_enqueue_style('bootstrap_css');
    wp_enqueue_style('font-awesome');
    wp_enqueue_style('elegant-icon');
    wp_enqueue_style('magnific-popup');
    wp_enqueue_style('nice-select');
    wp_enqueue_style('owl-carousel');
    wp_enqueue_style('slicknav');
    wp_enqueue_style('stylesheet');

}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function wpc_styles()
{
	wp_register_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array() );
    wp_register_style( 'font-awesome', get_template_directory_uri() . '/assets/fontawesome/css/all.min.css', array() );
    wp_register_style( 'slick', get_template_directory_uri() . '/assets/slick/slick.css', array() );
    wp_register_style( 'slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css', array() );
    wp_register_style( 'main', get_template_directory_uri() . '/assets/css/main.css', array() );
	wp_register_style( 'style', get_template_directory_uri() . '/style.css', array() );
    wp_enqueue_style( 'bootstrap' );
    wp_enqueue_style( 'font-awesome' );
    wp_enqueue_style( 'slick' );
    wp_enqueue_style( 'slick-theme' );
    wp_enqueue_style( 'main' );
    wp_enqueue_style( 'style' );
}
//add_action( 'wp_enqueue_scripts', 'wpc_styles' );



// Javascript Linking
function load_javascript()
{


    wp_register_script('jquery_js', get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js', 'jquery', 1, 'all');
    wp_register_script('bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', 'jquery', 1, 'all');
    wp_register_script('jquer-nice-select', get_template_directory_uri() . '/assets/jquery.nice-select.min.js', 'jquery', 1, 'all');
    wp_register_script('jquery-nicescroll', get_template_directory_uri() . '/assets/js/jquery.nicescroll.min.js', 'jquery', 1, 'all');
    wp_register_script('jquery-magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', 'jquery', 1, 'all');
    wp_register_script('jquery-countdown', get_template_directory_uri() . '/assets/js/jquery.countdown.min.js', 'jquery', 1, 'all');
    wp_register_script('jquery-slicknav', get_template_directory_uri() . '/assets/js/jquery.slicknav.js', 'jquery', 1, 'all');
    wp_register_script('mixitup_js', get_template_directory_uri() . '/assets/js/mixitup.min.js', 'jquery', 1, 'all');
    wp_register_script('owl-carousel_js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', 'jquery', 1, 'all');
    wp_register_script('custom_js', get_template_directory_uri() . '/assets/js/main.js', 'jquery', 1, 'all');

    wp_enqueue_script('jquery_js');
    wp_enqueue_script('bootstrap_js');
    wp_enqueue_script('jquery-nice-select');
    wp_enqueue_script('jquery-nicescroll');
    wp_enqueue_script('jquery-magnific-popup');
    wp_enqueue_script('jquery-countdown');
    wp_enqueue_script('jquery-slicknav');
    wp_enqueue_script('mixitup_js');
    wp_enqueue_script('owl-carousel_js');
    wp_enqueue_script('custom_js');


}
add_action('wp_enqueue_scripts', 'load_javascript');




// Site Name
add_action( 'after_setup_theme', function() {

    add_theme_support( 'title-tag' );

});



// Creating Custom Menu
function custom_menu()
{
    register_nav_menu( 'top-menu', __( 'Custom Menu', 'custommenu' ) );
}
add_action( 'init', 'custom_menu');



// Woocommerce
if(class_exists( 'WooCommerce' )) {

    // Woocommerce Support
    function woocommerce_support()
    {
        add_theme_support( 'woocommerce' );
    }
    add_action( 'after_setup_theme', 'woocommerce_support' );


    // Remove Woocommerce Styles
    // add_filter( 'woocommerce_enqueue_styles', '__return_false' );

    // Remove Shop Title
    // add_filter( 'woocommerce_shop_page_title', '__return_false' );

    // Add Support
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );


}


/* -----------------------------------------------------------------------------
 * =Theme Options Start
 * ========================================================================== */
if(function_exists('acf_add_options_page'))
{
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}