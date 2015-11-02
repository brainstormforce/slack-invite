<?php
/**
 * base_header.php
 *
 * Author: 
BrainstormForce
 *
 * The header of each page (Backend)
 *
 */
?>

<!-- Header -->
<header id="header-navbar" class="content-mini content-mini-full">
    <!-- Header Navigation Right -->
    <ul class="nav-header pull-right">
        <li>
            <div class="btn-group">
                <button class="btn btn-default btn-image dropdown-toggle" data-toggle="dropdown" type="button">
                    <img src="<?php echo $one->assets_folder; ?>/img/avatars/avatar10.jpg" alt="Avatar">
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li>
                        <a tabindex="-1" href="notificationemails.php">
                            <i class="si si-settings pull-right"></i>Settings
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <?php if(isset($_SESSION['login_user'])){  ?>
                        <a tabindex="-1" href="../admin/adminfunctions/logout.php">
                            <i class="si si-logout pull-right"></i>Log out
                        </a><?php }else{?>
                            <a tabindex="-1" href="../admin/index.php">
                            <i class="si si-user pull-right"></i> Login</a>
                        <?php }?>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
    <!-- END Header Navigation Right -->

    <!-- Header Navigation Left -->
    <ul class="nav-header pull-left">
        <li class="hidden-md hidden-lg">
            <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
            <button class="btn btn-default" data-toggle="layout" data-action="sidebar_toggle" type="button">
                <i class="fa fa-navicon"></i>
            </button>
        </li>
        <li class="hidden-xs hidden-sm">
            <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
            <button class="btn btn-default" data-toggle="layout" data-action="sidebar_mini_toggle" type="button">
                <i class="fa fa-ellipsis-v"></i>
            </button>
        </li>
    </ul>
    <!-- END Header Navigation Left -->
</header>
<!-- END Header -->
