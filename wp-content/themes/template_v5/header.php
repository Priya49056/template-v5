<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package template_v5
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- #keywords -->
    <meta name="keywords" content="Finxcart - Market Place">
    <!-- #description -->
    <meta name="description" content="Finxcart - Market Place">
    <!-- #title -->
    <title>Finxcart - Market Place</title>
    <!-- #favicon -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.svg" type="image/x-icon">
    <!-- ==== css dependencies start ==== -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/custom.css">
	<?php wp_head(); ?>
</head>

<body>
    <!-- Scroll To Top Start-->
    <button class="scrollToTop d-none d-md-flex d-center" aria-label="scroll Bar Button">
        <i class="ti ti-chevron-up fs-four p6-color"></i>
    </button>
    <!-- Scroll To Top End -->


    <!-- header-section start -->
    <header class="header-section header-menu w-100 pt-1 pt-lg-0 pb-3 pb-lg-0">
        <div class="navbar_mainhead header-fixed w-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <nav class="navbar navbar-expand-lg position-relative py-md-3 py-lg-6 workready">
                            <a href="<?php echo home_url(); ?>" class="navbar-brand d-flex align-items-center gap-2">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-3.svg" class="logo" alt="logo">
                            </a>
                            <div class="collapse navbar-collapse justify-content-between" id="navbar-content">
                                <ul
                                    class="navbar-nav d-flex align-items-lg-center gap-5 gap-lg-1 gap-xl-4 gap-xxl-7 py-2 py-lg-0 ms-2 ms-xl-10 ms-xxl-20 ps-0 ps-xxl-10 align-self-center">
                                    <li class="dropdown">
                                        <a href="<?php echo home_url(); ?>" class="fs-ten">Home</a>
                                    </li>
                                    <li class="dropdown show-dropdown">
                                        <button type="button" aria-label="Navbar Dropdown Button"
                                            class="dropdown-toggle dropdown-nav d-flex align-items-center fs-ten">About<i class="ti ti-chevron-down"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item fs-ten" href="<?php echo home_url(); ?>/about-us">About Us</a>
                                            </li>
                                            <li><a class="dropdown-item fs-ten" href="<?php echo home_url(); ?>/contact-us">Contact Us</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown show-dropdown">
                                        <button type="button" aria-label="Navbar Dropdown Button"
                                            class="dropdown-toggle dropdown-nav d-flex align-items-center fs-ten">Products <i
                                                class="ti ti-chevron-down"></i></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item fs-ten" href="<?php echo home_url(); ?>/forex">Forex</a></li>
                                            <li><a class="dropdown-item fs-ten" href="<?php echo home_url(); ?>/indices">Indices</a>
                                            </li>
                                            <li><a class="dropdown-item fs-ten" href="<?php echo home_url(); ?>/commodities">Commodities</a></li>
                                            <li><a class="dropdown-item fs-ten" href="<?php echo home_url(); ?>/deposits-withdrawals">Deposits & Withdrawals</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown show-dropdown">
                                        <button type="button" aria-label="Navbar Dropdown Button"
                                            class="dropdown-toggle dropdown-nav d-flex align-items-center fs-ten">Platforms
                                            <i class="ti ti-chevron-down"></i></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item fs-ten" href="<?php echo home_url(); ?>/metatrader-4">Metatrader 4</a></li>
                                            <li><a class="dropdown-item fs-ten" href="<?php echo home_url(); ?>/metatrader-5">Metatrader 5</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown show-dropdown">
                                        <button type="button" aria-label="Navbar Dropdown Button"
                                            class="dropdown-toggle dropdown-nav d-flex align-items-center fs-ten">Accounts<i class="ti ti-chevron-down"></i></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item fs-ten" href="<?php echo home_url(); ?>/standard">Standard</a>
                                            </li>
                                            <li><a class="dropdown-item fs-ten" href="<?php echo home_url(); ?>/premier">Premier</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown show-dropdown">
                                        <button type="button" aria-label="Navbar Dropdown Button"
                                            class="dropdown-toggle dropdown-nav d-flex align-items-center fs-ten">Insights<i
                                                class="ti ti-chevron-down"></i></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item fs-ten" href="<?php echo home_url(); ?>/education">Education</a></li>
                                            <li><a class="dropdown-item fs-ten" href="<?php echo home_url(); ?>/partnership">Partnership</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <div class="right-area custom-pos position-relative d-flex gap-0 gap-lg-2 align-items-center">
                                <div class="header-section__modalstyle">
                                    <!-- Button trigger modal -->
                                    <button type="button"
                                        class="cmn-btn px-3 px-sm-5 px-md-6 py-2 py-sm-3 d-flex align-items-center gap-1">
                                        <span class="p7-color fw-semibold d-none d-sm-block"></span>
                                        Sign In
                                    </button>
                                </div>

                            </div>

                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                aria-label="Navbar Toggler" data-bs-target="#navbar-content" aria-expanded="true"
                                id="nav-icon3">
                                <span></span><span></span><span></span><span></span>
                            </button>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
