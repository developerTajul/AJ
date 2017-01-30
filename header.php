<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AJ
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>




<!-- 
<div id="loading" class="preloader">
    <div class="loading-center">
        <div class="loading-center-absolute">
            <div class="object object_one"></div>
            <div class="object object_two"></div>
            <div class="object object_three"></div>
            <div class="object object_four"></div>
        </div>
    </div>
</div> -->
<!-- Body main wrapper start -->
<div class="wrapper fix">

<!-- Header Area Start -->
<div id="header-area" class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
               
                <!-- Logo -->
                <a href="index.html" class="logo float-left"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo"></a>
                
                <!-- Menu Tottle -->
                <button class="menu-open float-right"><i class="icon_ul"></i></button>
                
            </div>
        </div>
    </div>
</div>
<!-- Header Area End -->

<!-- Menu Area Start -->
<div id="menu-area" class="menu-area">
    <div class="main-menu text-center">
        
        <!-- Menu Close Button -->
        <button class="menu-close"><i class="icon_close"></i></button>
        
        <!-- Menu Nav -->
        <nav>
            <ul>
                <li class="active"><a href="#hero-area">home</a></li>
                <li><a href="#about-area">about</a></li>
                <li><a href="#service-area">service</a></li>
                <li><a href="#work-area">work</a></li>
                <li><a href="#testimonial-area">testimonial</a></li>
                <li><a href="#blog-area">blog</a></li>
                <li><a href="#contact-area">contact</a></li>
            </ul>
        </nav>
        
        <!-- Social -->
        <div class="social">
            <a href="#"><i class="social_facebook"></i></a>
            <a href="#"><i class="social_twitter"></i></a>
            <a href="#"><i class="social_linkedin"></i></a>
            <a href="#"><i class="social_googleplus"></i></a>
            <a href="#"><i class="social_pinterest"></i></a>
        </div>
        
    </div>
</div>
<!-- Menu Area End -->

<!-- Hero Area Start -->
<div id="hero-area" class="hero-area bg-pattern">
    <div class="container">
        <div class="row">

            <!-- Hero Wrapper Start -->
            <div class="hero-wrapper col-xs-12">

                <!-- Hero Image -->
                <div class="image float-left"><img src="<?php echo get_template_directory_uri(); ?>/img/hero-image.png" alt="hero image"></div>

                <!-- Hero Content -->
                <div class="content float-left">

                    <h1>JOHAN <span>SMITH</span></h1>
                    <h2>UX/UI DESIGNER AND SEO</h2>

                    <!-- Work Sample -->
                    <div class="work-sample float-left">
                        <a href="#" class="sample"><img src="<?php echo get_template_directory_uri(); ?>/img/work/sample-1.jpg" alt=""></a>
                        <a href="#" class="sample"><img src="<?php echo get_template_directory_uri(); ?>/img/work/sample-2.jpg" alt=""></a>
                        <a href="#work-area" data-scroll class="more-work">latest <span>work <i class="arrow_right"></i></span></a>
                    </div>

                </div>

            </div>
            <!-- Hero Wrapper End -->

        </div>
    </div>
</div>
<!-- Hero Area End -->