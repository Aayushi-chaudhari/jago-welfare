<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jago-welfare
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <script id="mcjs">
    ! function(c, h, i, m, p) {
        m = c.createElement(h), p = c.getElementsByTagName(h)[0], m.async = 1, m.src = i, p.parentNode.insertBefore(m,
            p)
    }(document, "script",
        "https://chimpstatic.com/mcjs-connected/js/users/569f15492b7f5adc1ab3006ff/2fd7603990c1f0f4c3c8cada2.js");
    </script>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <!--  -->


    <header class="main_header_arae">
        <!-- Top Bar -->
        <div class="topbar-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <ul class="topbar-list">

                            <li><a href="#!"><img src="<?php the_field('contact_mail', 'options'); ?>"><i
                                        class="fa fa-envelope"></i><span><?php the_field('mail-id', 'options'); ?></span></a>
                            </li>
                            <li><a href="#!"><img src="<?php the_field('contact_phone_image', 'options'); ?>"><i
                                        class="fa fa-phone"></i><span><?php the_field('contact_number', 'options'); ?></span></a>
                            </li>
                            <li><a href="http://localhost/jago-welfare/faq/"><span>Faqs</span></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <ul class="topbar-list-right">
                            <?php if( have_rows('social_media_icons','options') ): ?>
                            <?php while( have_rows('social_media_icons', 'options') ): the_row(); 
                                    $image = get_sub_field('social_media_images', 'options');
                                    ?>
                            <li>
                                <a href="#!"><img src="<?php the_sub_field('social_media_images', 'options'); ?>"><i
                                        class=""></i></a>
                            </li>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="search-container">
                <a href="#" class="search-icon">
                    <i class="fa fa-search"></i>
                </a>

                <div class="search-form">
                    <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
                        <input type="search" class="search-field" placeholder="Search..."
                            value="<?php echo get_search_query(); ?>" name="s" />
                        <button type="submit" class="search-submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
            </div> -->
        <!-- Navbar Bar -->
        <div class="navbar-area">
            <div class="main-responsive-nav">
                <div class="container">
                    <div class="main-responsive-menu">
                        <div class="logo">
                            <a href="http://localhost/jago-welfare/">
                                <img src="wp-content/themes/jago-welfare/assests/img/logo.png" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-navbar">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="http://localhost/jago-welfare/">
                            <img src="<?php the_field('site_logo', 'options'); ?>" alt="logo">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <?php
        // Use custom walker class
        wp_nav_menu(array('menu' => 'Header Menu', 'walker' => new Custom_Walker_Nav_Menu()));
        ?>
                                </li>
                            </ul>


                            <div class="others-options d-flex align-items-center">
                                <div class="option-item">
                                    <a href="#" class="search-box"> <img
                                            src="<?php the_field('search_icon', 'options'); ?>" alt="icon"></a>
                                </div>
                                <div class="option-item">
                                    <a href="make-donation.html"
                                        class="btn btn_navber"><?php the_field('donate_now_button_text', 'options'); ?></a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="others-option-for-responsive">
                <div class="container">
                    <div class="dot-menu">
                        <div class="inner">
                            <div class="circle circle-one"></div>
                            <div class="circle circle-two"></div>
                            <div class="circle circle-three"></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="option-inner">
                            <div class="others-options d-flex align-items-center">
                                <div class="option-item">
                                    <a href="#" class="search-box"><i class="fas fa-search"></i></a>
                                </div>
                                <div class="option-item">
                                    <a href="make-donation.html" class="btn  btn_navber">Donate now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    </header><!-- #masthead -->