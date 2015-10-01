<?php
/**
 * frontend_header.php
 *
 * Author: pixelcave
 *
 * The header of each page (Frontend)
 *
 */
?>

<!-- Header -->
<header id="header-navbar" class="content-mini content-mini-full hidden-md hidden-lg">
    <div class="content-boxed">
        <!-- Header Navigation Right -->
        <ul class="nav-header pull-right">
            <li>
                <!-- Themes functionality initialized in App() -> uiHandleTheme() -->
                <div class="btn-group">
                    <button class="btn btn-link text-white dropdown-toggle" data-toggle="dropdown" type="button">
                        <i class="si si-drop"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right sidebar-mini-hide font-s13">
                        <li>
                            <a data-toggle="theme" data-theme="default" tabindex="-1" href="javascript:void(0)">
                                <i class="fa fa-circle text-default pull-right"></i> <span class="font-w600">Default</span>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="theme" data-theme="<?php echo $one->assets_folder; ?>/css/themes/amethyst.min.css" tabindex="-1" href="javascript:void(0)">
                                <i class="fa fa-circle text-amethyst pull-right"></i> <span class="font-w600">Amethyst</span>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="theme" data-theme="<?php echo $one->assets_folder; ?>/css/themes/city.min.css" tabindex="-1" href="javascript:void(0)">
                                <i class="fa fa-circle text-city pull-right"></i> <span class="font-w600">City</span>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="theme" data-theme="<?php echo $one->assets_folder; ?>/css/themes/flat.min.css" tabindex="-1" href="javascript:void(0)">
                                <i class="fa fa-circle text-flat pull-right"></i> <span class="font-w600">Flat</span>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="theme" data-theme="<?php echo $one->assets_folder; ?>/css/themes/modern.min.css" tabindex="-1" href="javascript:void(0)">
                                <i class="fa fa-circle text-modern pull-right"></i> <span class="font-w600">Modern</span>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="theme" data-theme="<?php echo $one->assets_folder; ?>/css/themes/smooth.min.css" tabindex="-1" href="javascript:void(0)">
                                <i class="fa fa-circle text-smooth pull-right"></i> <span class="font-w600">Smooth</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                <button class="btn btn-link text-white pull-right" type="button" data-toggle="layout" data-action="sidebar_open">
                    <i class="fa fa-navicon"></i>
                </button>
            </li>
        </ul>
        <!-- END Header Navigation Right -->

        <!-- Header Navigation Left -->
        <ul class="nav-header pull-left">
            <li class="header-content">
                <a class="h5" href="frontend_home.php">
                    <i class="fa fa-circle-o-notch text-primary"></i> <span class="h4 font-w600 text-white">ne</span>
                </a>
            </li>
        </ul>
        <!-- END Header Navigation Left -->
    </div>
</header>
<!-- END Header -->
