<?php
/**
 * Header template.
 * 
 * 
 * @package Kiante
 * 
 */

 ?>


<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Kiante - Newspaper Magazine Blog Html5 Template</title>

    <!-- favicon -->
    <link rel="icon" href="demo-landing/img/favicon.png">
    
    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?> /assets/css/vendor.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?> /assets/css/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?> /assets/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?> /assets/css/responsive.css">

</head>
<body>

    <!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- search popup area start -->
    <div class="search-popup" id="search-popup">
        <form action="home.html" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- //. search Popup -->
    <div class="body-overlay" id="body-overlay"></div>

    <header id="theme-header-one" class="header-style-one">	
		<div class="top-header-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-sm-6">
                        <div class="header-weather"><i class="fa fa-weather"></i>   38°C</div>                  
                        <div class="header-date">August 6, 2022</div>
                    </div>
                    <div class="col-md-6 col-sm-6 text-end">
                        <div class="htop_social">
                            <a href="#" class="social-list__link"><i class="fa fa-facebook-f"></i></a>
                            <a href="#" class="social-list__link"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="social-list__link"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="social-list__link"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>	
        </div>
    </header>

    <!-- navbar start -->
    <div class="navbar-area">
        <nav class="navbar navbar-expand-lg">
            <div class="container nav-container">
                <a class="main-logo" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?> /assets/img/logo.png" alt="img"></a>
                <div class="responsive-mobile-menu">
                    <div class="logo d-lg-none d-block">
                        <a class="main-logo" href="index.html"><img src="assets/img/logo.png" alt="img"></a>
                    </div>
                    <button class="menu toggle-btn d-block d-lg-none" data-target="#miralax_main_menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-left"></span>
                        <span class="icon-right"></span>
                    </button>
                </div>
                <div class="nav-right-part nav-right-part-mobile">
                    <a class="search header-search" href="#"><i class="fa fa-search"></i></a>
                </div>
                <div class="collapse navbar-collapse" id="miralax_main_menu">
                    <ul class="navbar-nav menu-open">


                        <?php wp_nav_menu(array('
                        theme_location'=>'primary-menu',
                        'menu_class'=>'nav')) ?>

                        <!-- <li class="menu-item-has-children current-menu-item">
                            <a href="#">Home</a>
                            <ul class="sub-menu">
                                <li><a href="index.html">Home 01</a></li>
                                <li><a href="index-2.html">Home 02</a></li>
                                <li><a href="index-3.html">Home 03</a></li>
                                <li><a href="index-4.html">Home 04</a></li>
                            </ul>
                        </li>
                        <li><a href="blog-category.html">Business</a></li>
                        <li><a href="blog-category.html">Politics</a></li>
                        <li><a href="blog-category.html">Tech</a></li>
                        <li class="menu-item-has-children current-menu-item">
                            <a href="#">Features</a>
                            <ul class="sub-menu">
                                <li><a href="blog.html">Blog Layout</a></li>
                                <li><a href="blog-category.html">Category Layout</a></li>
                                <li><a href="blog-details.html">Post Layout</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li> -->
                    </ul>
                </div>
                <div class="nav-right-part nav-right-part-desktop">
                    <a class="search header-search" href="#"><i class="fa fa-search"></i></a>
                </div>
            </div>
        </nav>
    </div>
    <!-- navbar end -->