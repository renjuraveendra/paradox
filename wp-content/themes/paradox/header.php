<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <title>Paradox - Online Store</title> -->

    <?php wp_head(); ?>

    <!-- Google Font
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
        rel="stylesheet">

    Css Styles
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css"> -->
</head>

<body <?php body_class(); ?>>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__option">
            <div class="offcanvas__links">
                <a href="#">Sign in</a>
                <a href="#">FAQs</a>
            </div>
            <!-- <div class="offcanvas__top__hover">
                <span>Usd <i class="arrow_carrot-down"></i></span>
                <ul>
                    <li>USD</li>
                    <li>EUR</li>
                    <li>USD</li>
                </ul>
            </div> -->
        </div>
        <div class="offcanvas__nav__option">
            <a href="#" class="search-switch"><img src="<?php bloginfo('template_url'); ?>/assets/img/icon/search.png" alt="search-img"></a>
            <a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/img/icon/heart.png" alt=""></a>
            <a href="./shopping-cart.html"><img src=<?php get_template_directory_uri().'/assets/img/icon/cart.png' ?>> <span>0</span></a>
            <div class="price">₹2000</div>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__text">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <div class="header__top__left">
                            <p><?php the_field('top_bar_content', 'option'); ?></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="header__top__right">
                            <div class="header__top__links">
                                <a href="#">Sign in</a>
                                <a href="#">FAQs</a>
                            </div>
                            <!-- <div class="header__top__hover">
                                <span>Usd <i class="arrow_carrot-down"></i></span>
                                <ul>
                                    <li>USD</li>
                                    <li>EUR</li>
                                    <li>USD</li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="./index.html">
                            <!-- <img src="img/paradox-logo.png" alt=""> -->
                            <?php
                                $logo = get_field('logo', 'option');
                                if($logo): 
                                ?>
                                    <img src="<?php echo($logo);?>" alt="Site Logo">
                                <?php
                                endif;
                            ?>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <!-- <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="./index.html">Home</a></li>
                            <li><a href="./shop.html">Shop</a></li>
                            <li><a href="./about.html">About Us</a></li>
                            <li><a href="./blog.html">Blog</a></li>
                            <li><a href="./contact.html">Contacts</a></li>
                        </ul>
                            wp_nav_menu( array(
                                'theme_location' => 'top-menu',
                                'container' => false
                            ));
                    </nav> -->
                    <?php 

                        wp_nav_menu(array(
                            "theme_location" => "theme_header_menu",
                            "container" => "nav",
                            "container_class" => "header__menu mobile-menu"
                        ));

                    ?>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="header__nav__option">
                        <a href="#" class="search-switch"><img src="<?php bloginfo('template_url'); ?>/assets/img/icon/search.png" alt="search-img"></a>
                        <a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/img/icon/heart.png" alt=""></a>
                        <a href="./shopping-cart.html">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/icon/cart.png" alt=""> 
                            <!-- <img src="img/icon/cart.png" alt="">  -->
                            <span>0</span></a>
                        <div class="price">₹2000</div>
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End -->
