<?php
/**
 * config.php
 *
 * Author: 
 *BrainstormForce
 *
 * Global configuration file
 *
 */

// Include Template class
require 'classes/sia-template.php';

// Create a new Template Object
$one                               = new Template('Slack Invite', '1.0', 'assets'); // Name, version and assets folder's name

// Global Meta Data
$one->author                       = 'Brainstormforce';
$one->robots                       = 'noindex, nofollow';
$one->title                        = 'SlackInvite - Admin Dashboard Template & UI Framework';
$one->description                  = 'SlackInvite - Admin Dashboard Template & UI Framework created by Brainstormforce and published openSource';

// Global Included Files (eg useful for adding different sidebars or headers per page)
$one->inc_sidebar                  = 'sia-base-sidebar.php';
$one->inc_header                   = 'sia-base-header.php';

// Global Color Theme
$one->theme                        = '';       // '' for default theme or 'amethyst', 'city', 'flat', 'modern', 'smooth'

// Global Body Background Image
$one->body_bg                      = '';       // eg 'assets/img/photos/photo10@2x.jpg' Useful for login/lockscreen pages

// Global Header Options
$one->l_header_fixed               = true;     // True: Fixed Header, False: Static Header

// Global Sidebar Options
$one->l_sidebar_position           = 'left';   // 'left': Left Sidebar and right Side Overlay, 'right;: Flipped position
$one->l_sidebar_mini               = false;    // True: Mini Sidebar Mode (> 991px), False: Disable mini mode
$one->l_sidebar_visible_desktop    = true;     // True: Visible Sidebar (> 991px), False: Hidden Sidebar (> 991px)
$one->l_sidebar_visible_mobile     = false;    // True: Visible Sidebar (< 992px), False: Hidden Sidebar (< 992px)

// Global Side Overlay Options
$one->l_side_overlay_hoverable     = false;    // True: Side Overlay hover mode (> 991px), False: Disable hover mode
$one->l_side_overlay_visible       = false;    // True: Visible Side Overlay, False: Hidden Side Overlay

// Global Sidebar and Side Overlay Custom Scrolling
$one->l_side_scroll                = true;     // True: Enable custom scrolling (> 991px), False: Disable it (native scrolling)

// Global Active Page (it will get compared with the url of each menu link to make the link active and set up main menu accordingly)
//$one->main_nav_active              = basename($_SERVER['PHP_SELF']); -- This is Previous Line Changed to show rewrite url active
$one->main_nav_active              = basename($_SERVER['REQUEST_URI']);

// Global Main Menu
$one->main_nav                     = array(
    array(
        'name'  => '<span class="sidebar-mini-hide">Dashboard</span>',
        'icon'  => 'si si-speedometer',
        'url'   => 'sia-dashboard.php'
        ),
            array(
                'name'  => '<span class="sidebar-mini-hide">Slack Settings</span>',
                'url'   => 'sia-token.php',
                'icon'  => 'si si-settings',
                'class' => 'display_slack_settings',
            ),
            array(
                'name'  => '<span class="sidebar-mini-hide">Email Settings</span>',
                'icon'  => 'si si-envelope-open',
                'url'   => 'sia-email-list.php',
            ) ,
     array('name' => '<span class="sidebar-mini-hide">Invitees</span>' ,
        'icon'  => 'si si-grid',
        'url'   => 'sia-invitees.php',
         )
    
);