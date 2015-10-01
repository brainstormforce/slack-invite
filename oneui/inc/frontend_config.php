<?php
/**
 * frontend_config.php
 *
 * Author: pixelcave
 *
 * Frontend configuration file (overwrites some options from global configuration file - config.php)
 *
 */

// Frontend Included Files
$one->inc_side_overlay             = false;
$one->inc_sidebar                  = 'frontend_sidebar.php';
$one->inc_header                   = 'frontend_header.php';

// Frontend Header Options
$one->l_header_transparent         = true;     // True: Transparent header (if also fixed, it will get a solid dark background color on scrolling), False: White solid header

// Frontend Sidebar Options
$one->l_sidebar_mini               = true;     // True: Mini Sidebar Mode (> 991px), False: Disable mini mode

// Frontend Main Menu
$one->main_nav                     = array(
    array(
        'name'  => '<span class="sidebar-mini-hide">Home</span>',
        'icon'  => 'si si-home',
        'url'   => 'frontend_home.php'
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Features</span>',
        'icon'  => 'si si-energy',
        'url'   => 'frontend_features.php'
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Pricing</span>',
        'icon'  => 'si si-wallet',
        'url'   => 'frontend_pricing.php'
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Contact</span>',
        'icon'  => 'si si-envelope-open',
        'url'   => 'frontend_contact.php'
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Pages</span>',
        'icon'  => 'si si-book-open',
        'sub'   => array(
            array(
                'name'  => 'Team',
                'url'   => 'frontend_team.php',
            ),
            array(
                'name'  => 'Support',
                'url'   => 'frontend_support.php',
            ),
            array(
                'name'  => 'Search',
                'url'   => 'frontend_search.php',
            ),
            array(
                'name'  => 'About',
                'url'   => 'frontend_about.php',
            ),
            array(
                'name'  => 'Log In',
                'url'   => 'frontend_login.php',
            ),
            array(
                'name'  => 'Sign Up',
                'url'   => 'frontend_signup.php',
            )
        )
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Apps</span>',
        'type'  => 'heading'
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Backend</span>',
        'icon'  => 'si si-speedometer',
        'url'   => 'index.php'
    )
);