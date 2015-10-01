<?php
/**
 * config.php
 *
 * Author: pixelcave
 *
 * Global configuration file
 *
 */

// Include Template class
require 'classes/Template.php';

// Create a new Template Object
$one                               = new Template('OneUI', '1.0', 'assets'); // Name, version and assets folder's name

// Global Meta Data
$one->author                       = 'pixelcave';
$one->robots                       = 'noindex, nofollow';
$one->title                        = 'OneUI - Admin Dashboard Template & UI Framework';
$one->description                  = 'OneUI - Admin Dashboard Template & UI Framework created by pixelcave and published on Themeforest';

// Global Included Files (eg useful for adding different sidebars or headers per page)
$one->inc_side_overlay             = 'base_side_overlay.php';
$one->inc_sidebar                  = 'base_sidebar.php';
$one->inc_header                   = 'base_header.php';

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
$one->main_nav_active              = basename($_SERVER['PHP_SELF']);

// Global Main Menu
$one->main_nav                     = array(
    array(
        'name'  => '<span class="sidebar-mini-hide">Dashboard</span>',
        'icon'  => 'si si-speedometer',
        'url'   => 'index.php'
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">User Interface</span>',
        'type'  => 'heading'
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">UI Elements</span>',
        'icon'  => 'si si-badge',
        'sub'   => array(
            array(
                'name'  => 'Widgets',
                'url'   => 'base_ui_widgets.php',
            ),
            array(
                'name'  => 'Blocks',
                'sub'   => array(
                    array(
                        'name'  => 'Styles',
                        'url'   => 'base_ui_blocks.php',
                    ),
                    array(
                        'name'  => 'Blocks API',
                        'url'   => 'base_ui_blocks_api.php',
                    ),
                    array(
                        'name'  => 'Draggable',
                        'url'   => 'base_ui_blocks_draggable.php',
                    )
                )
            ),
            array(
                'name'  => 'Grid',
                'url'   => 'base_ui_grid.php',
            ),
            array(
                'name'  => 'Typography',
                'url'   => 'base_ui_typography.php',
            ),
            array(
                'name'  => 'Icons',
                'url'   => 'base_ui_icons.php',
            ),
            array(
                'name'  => 'Buttons',
                'url'   => 'base_ui_buttons.php',
            ),
            array(
                'name'  => 'Activity',
                'url'   => 'base_ui_activity.php',
            ),
            array(
                'name'  => 'Tabs',
                'url'   => 'base_ui_tabs.php',
            ),
            array(
                'name'  => 'Tiles',
                'url'   => 'base_ui_tiles.php',
            ),
            array(
                'name'  => 'Timeline',
                'url'   => 'base_ui_timeline.php',
            ),
            array(
                'name'  => 'Navigation',
                'url'   => 'base_ui_navigation.php',
            ),
            array(
                'name'  => 'Modals &amp; Tooltips',
                'url'   => 'base_ui_modals_tooltips.php',
            ),
            array(
                'name'  => 'Color Themes',
                'url'   => 'base_ui_color_themes.php',
            )
        )
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Tables</span>',
        'icon'  => 'si si-grid',
        'sub'   => array(
            array(
                'name'  => 'Styles',
                'url'   => 'base_tables_styles.php',
            ),
            array(
                'name'  => 'Responsive',
                'url'   => 'base_tables_responsive.php',
            ),
            array(
                'name'  => 'Tools',
                'url'   => 'base_tables_tools.php',
            ),
            array(
                'name'  => 'Pricing',
                'url'   => 'base_tables_pricing.php',
            ),
            array(
                'name'  => 'DataTables',
                'url'   => 'base_tables_datatables.php',
            )
        )
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Forms</span>',
        'icon'  => 'si si-note',
        'sub'   => array(
            array(
                'name'  => 'Pre-made',
                'url'   => 'base_forms_premade.php',
            ),
            array(
                'name'  => 'Elements',
                'url'   => 'base_forms_elements.php',
            ),
            array(
                'name'  => 'Pickers &amp; More',
                'url'   => 'base_forms_pickers_more.php',
            ),
            array(
                'name'  => 'Text Editors',
                'url'   => 'base_forms_editors.php',
            ),
            array(
                'name'  => 'Validation',
                'url'   => 'base_forms_validation.php',
            ),
            array(
                'name'  => 'Wizard',
                'url'   => 'base_forms_wizard.php',
            )
        )
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Develop</span>',
        'type'  => 'heading'
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Components</span>',
        'icon'  => 'si si-wrench',
        'sub'   => array(
            array(
                'name'  => 'Images',
                'url'   => 'base_comp_images.php',
            ),
            array(
                'name'  => 'Charts',
                'url'   => 'base_comp_charts.php',
            ),
            array(
                'name'  => 'Calendar',
                'url'   => 'base_comp_calendar.php',
            ),
            array(
                'name'  => 'Sliders',
                'url'   => 'base_comp_sliders.php',
            ),
            array(
                'name'  => 'Maps',
                'url'   => 'base_comp_maps.php',
            ),
            array(
                'name'  => 'Animations',
                'url'   => 'base_comp_animations.php',
            ),
            array(
                'name'  => 'Syntax Highlighting',
                'url'   => 'base_comp_syntax_highlighting.php',
            ),
            array(
                'name'  => 'Gallery',
                'sub'   => array(
                    array(
                        'name'  => 'Simple',
                        'url'   => 'base_comp_gallery_simple.php',
                    ),
                    array(
                        'name'  => 'Advanced',
                        'url'   => 'base_comp_gallery_advanced.php',
                    )
                )
            ),
        )
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Layouts</span>',
        'icon'  => 'si si-magic-wand',
        'sub'   => array(
            array(
                'name'  => 'Layout API',
                'url'   => 'base_layouts_api.php',
            ),
            array(
                'name'  => 'Default',
                'url'   => 'base_layouts_default.php',
            ),
            array(
                'name'  => 'Default Flipped',
                'url'   => 'base_layouts_default_flipped.php',
            ),
            array(
                'name'  => 'Static Header',
                'url'   => 'base_layouts_header_static.php',
            ),
            array(
                'name'  => 'Mini Sidebar (Hoverable)',
                'url'   => 'base_layouts_sidebar_mini_hoverable.php',
            ),
            array(
                'name'  => 'Side Overlay (Hoverable)',
                'url'   => 'base_layouts_side_overlay_hoverable.php',
            ),
            array(
                'name'  => 'Side Overlay (Open)',
                'url'   => 'base_layouts_side_overlay_open.php',
            ),
            array(
                'name'  => 'Side Native Scrolling',
                'url'   => 'base_layouts_side_native_scrolling.php',
            ),
            array(
                'name'  => 'Hidden Sidebar',
                'url'   => 'base_layouts_sidebar_hidden.php',
            )
        )
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Multi Level Menu</span>',
        'icon'  => 'si si-puzzle',
        'sub'   => array(
            array(
                'name'  => 'Link 1-1',
                'url'   => '#',
            ),
            array(
                'name'  => 'Link 1-2',
                'url'   => '#',
            ),
            array(
                'name'  => 'Sub Level 2',
                'sub'   => array(
                    array(
                        'name'  => 'Link 2-1',
                        'url'   => '#',
                    ),
                    array(
                        'name'  => 'Link 2-2',
                        'url'   => '#',
                    ),
                    array(
                        'name'  => 'Sub Level 3',
                        'sub'   => array(
                            array(
                                'name'  => 'Link 3-1',
                                'url'   => '#',
                            ),
                            array(
                                'name'  => 'Link 3-2',
                                'url'   => '#',
                            ),
                            array(
                                'name'  => 'Sub Level 4',
                                'sub'   => array(
                                    array(
                                        'name'  => 'Link 4-1',
                                        'url'   => '#',
                                    ),
                                    array(
                                        'name'  => 'Link 4-2',
                                        'url'   => '#',
                                    ),
                                    array(
                                        'name'  => 'Sub Level 5',
                                        'sub'   => array(
                                            array(
                                                'name'  => 'Link 5-1',
                                                'url'   => '#',
                                            ),
                                            array(
                                                'name'  => 'Link 5-2',
                                                'url'   => '#',
                                            ),
                                            array(
                                                'name'  => 'Sub Level 6',
                                                'sub'   => array(
                                                    array(
                                                        'name'  => 'Link 6-1',
                                                        'url'   => '#',
                                                    ),
                                                    array(
                                                        'name'  => 'Link 6-2',
                                                        'url'   => '#',
                                                    )
                                                )
                                            )
                                        )
                                    )
                                )
                            )
                        )
                    )
                )
            )
        )
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Pages</span>',
        'type'  => 'heading'
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Generic</span>',
        'icon'  => 'si si-layers',
        'sub'    => array(
            array(
                'name'  => 'Blank',
                'url'   => 'base_pages_blank.php',
            ),
            array(
                'name'  => 'User Profile',
                'url'   => 'base_pages_profile.php',
            ),
            array(
                'name'  => 'Search Results',
                'url'   => 'base_pages_search.php',
            ),
            array(
                'name'  => 'Invoice',
                'url'   => 'base_pages_invoice.php',
            ),
            array(
                'name'  => 'FAQ',
                'url'   => 'base_pages_faq.php',
            ),
            array(
                'name'  => 'Inbox',
                'url'   => 'base_pages_inbox.php',
            ),
            array(
                'name'  => 'Log In',
                'url'   => 'base_pages_login.php',
            ),
            array(
                'name'  => 'Register',
                'url'   => 'base_pages_register.php',
            ),
            array(
                'name'  => 'Lock Screen',
                'url'   => 'base_pages_lock.php',
            ),
            array(
                'name'  => 'Password Reminder',
                'url'   => 'base_pages_reminder.php',
            ),
            array(
                'name'  => 'Coming Soon',
                'url'   => 'base_pages_coming_soon.php',
            )
        )
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Error Pages</span>',
        'icon'  => 'si si-fire',
        'sub'    => array(
            array(
                'name'  => '400',
                'url'   => 'base_pages_400.php',
            ),
            array(
                'name'  => '401',
                'url'   => 'base_pages_401.php',
            ),
            array(
                'name'  => '403',
                'url'   => 'base_pages_403.php',
            ),
            array(
                'name'  => '404',
                'url'   => 'base_pages_404.php',
            ),
            array(
                'name'  => '500',
                'url'   => 'base_pages_500.php',
            ),
            array(
                'name'  => '503',
                'url'   => 'base_pages_503.php',
            )
        )
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Apps</span>',
        'type'  => 'heading'
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Frontend</span>',
        'icon'  => 'si si-rocket',
        'url'   => 'frontend_home.php'
    )
);