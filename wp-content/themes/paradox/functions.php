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
    wp_register_style('style', get_template_directory_uri() . '/style.css', array());

    wp_enqueue_style('nunitosans_cdn');
    wp_enqueue_style('bootstrap_css');
    wp_enqueue_style('font-awesome');
    wp_enqueue_style('elegant-icon');
    wp_enqueue_style('magnific-popup');
    wp_enqueue_style('nice-select');
    wp_enqueue_style('owl-carousel');
    wp_enqueue_style('slicknav');
    wp_enqueue_style('stylesheet');
    wp_enqueue_style('style');

}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function wpc_styles()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array());
    wp_register_style('font-awesome', get_template_directory_uri() . '/assets/fontawesome/css/all.min.css', array());
    wp_register_style('slick', get_template_directory_uri() . '/assets/slick/slick.css', array());
    wp_register_style('slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css', array());
    wp_register_style('main', get_template_directory_uri() . '/assets/css/main.css', array());
    wp_register_style('style', get_template_directory_uri() . '/style.css', array());
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('font-awesome');
    wp_enqueue_style('slick');
    wp_enqueue_style('slick-theme');
    wp_enqueue_style('main');
    wp_enqueue_style('style');
}
//add_action( 'wp_enqueue_scripts', 'wpc_styles' );


// Javascript Linking
function load_javascript()
{

    // wp_register_script('jquery_js', get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js', 'jquery', 1, 'all');
    wp_register_script('bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', 'jquery', 1, 'all');
    wp_register_script('jquer-nice-select', get_template_directory_uri() . '/assets/jquery.nice-select.min.js', 'jquery', 1, 'all');
    wp_register_script('jquery-nicescroll', get_template_directory_uri() . '/assets/js/jquery.nicescroll.min.js', 'jquery', 1, 'all');
    wp_register_script('jquery-magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', 'jquery', 1, 'all');
    wp_register_script('jquery-countdown', get_template_directory_uri() . '/assets/js/jquery.countdown.min.js', 'jquery', 1, 'all');
    wp_register_script('jquery-slicknav', get_template_directory_uri() . '/assets/js/jquery.slicknav.js', 'jquery', 1, 'all');
    wp_register_script('mixitup_js', get_template_directory_uri() . '/assets/js/mixitup.min.js', 'jquery', 1, 'all');
    wp_register_script('owl-carousel_js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', 'jquery', 1, 'all');
    wp_register_script('custom_js', get_template_directory_uri() . '/assets/js/main.js', 'jquery', 1, 'all');

    // wp_enqueue_script('jquery_js');
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
add_action('after_setup_theme', function ()
{

    add_theme_support('title-tag');

});

// Creating Custom Menu
// function custom_menu()
// {
//     register_nav_menu( 'top-menu', __( 'Custom Menu', 'custommenu' ) );
// }
// add_action( 'init', 'custom_menu');
function custom_menu()
{
    register_nav_menus(array(
        // menu_id/location_id => menu name
        "theme_header_menu" => "Header Menu",
        "theme_footer_menu_one" => "Footer Menu One",
        "theme_footer_menu_two" => "Footer Menu Two"
    ));

    // register theme support
    add_theme_support("post-thumbnails");
}
add_action("after_setup_theme", "custom_menu");


/*--- Woocommerce Theme Setup ---*/
function mytheme_add_woocommerce_support()
{
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
    add_filter('woocommerce_show_page_title', '__return_false');
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
/*--- Woocommerce Theme Setup ---*/

/* -----------------------------------------------------------------------------
 * =Theme Options Start
 * ========================================================================== */
if (function_exists('acf_add_options_page'))
{
    acf_add_options_page(array(
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}

/****************Loop Product*******************/
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
remove_action( 'woocommerce_shop_loop_item_title','woocommerce_template_loop_product_title', 10 ); // Remove title form original position
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
add_action('woocommerce_before_shop_loop_item_title', 'template_loop_product_thumbnail', 11);
if (!function_exists('template_loop_product_thumbnail'))
{
    function template_loop_product_thumbnail()
    {
        global $product, $post;
        $size = 'full';
        if (has_post_thumbnail())
        {
            $image_id = get_post_thumbnail_id($post->ID);
            $image_url = wp_get_attachment_image_src($image_id, $size, false);
            $attachment_ids = $product->get_gallery_image_ids();
            foreach (array_slice($attachment_ids, 0, 1) as $attachment_id);
            //$thumbnail_url = wp_get_attachment_image_src($attachment_id, 'shop-image') [0];
?>
            <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="<?php echo esc_url( $image_url[0]); ?>">
                    <ul class="product__hover">
                        <li>
                            <a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/img/icon/heart.png" alt=""></a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url( get_permalink( $product->get_id() ) ); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/icon/Details.png" alt=""> <span>Details</span></a>
                        </li>
                        <!--<li>
                            <a href="#"><img src="<?php //bloginfo('template_url'); ?>/assets/img/icon/search.png" alt=""></a>
                        </li>-->
                    </ul>
                </div>
                <div class="product__item__text">
                    <h6><?php echo wp_trim_words(get_the_title(), 8,'...'); ?></h6>
                    <a href="<?php echo esc_url( get_permalink( $product->get_id() ) ); ?>" class="add-cart">+ Add To Cart</a>
                    <h5><?php if ( function_exists('woocommerce_template_loop_price' ) ) echo woocommerce_template_loop_price(); ?></h5>
                </div>
            </div>
        <?php
        }
        else
        {
?>

            <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="<?php echo wc_placeholder_img_src(); ?>">
                    <ul class="product__hover">
                        <li>
                            <a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/img/icon/heart.png" alt=""></a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url( get_permalink( $product->get_id() ) ); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/icon/Details.png" alt=""> <span>Details</span></a>
                        </li>
                        <!--<li>
                            <a href="#"><img src="<?php //bloginfo('template_url'); ?>/assets/img/icon/search.png" alt=""></a>
                        </li>-->
                    </ul>
                </div>
                <div class="product__item__text">
                    <h6><?php echo wp_trim_words(get_the_title(), 8,'...'); ?></h6>
                    <a href="<?php echo esc_url( get_permalink( $product->get_id() ) ); ?>" class="add-cart">+ Add To Cart</a>
                    <h5><?php if ( function_exists('woocommerce_template_loop_price' ) ) echo woocommerce_template_loop_price(); ?></h5>
                </div>
            </div>
        <?php
        }
    }
}
/****************Loop Product******************/

