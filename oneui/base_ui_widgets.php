<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/slick/slick.min.css">
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/slick/slick-theme.min.css">

<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">
                Widgets <small>Beautifully designed and coded to meet all your needs.</small>
            </h1>
        </div>
        <div class="col-sm-5 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>UI Elements</li>
                <li><a class="link-effect" href="">Widgets</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content">
    <!-- User Widgets -->
    <h2 class="content-heading">User Widgets</h2>

    <!-- User Simple Widgets -->
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <a class="block block-rounded block-link-hover3" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="pull-right">
                        <?php $one->get_avatar('', 'female'); ?>
                    </div>
                    <div class="pull-left push-10-t">
                        <div class="font-w600 push-5"><?php $one->get_name('female'); ?></div>
                        <div class="text-muted">Web Designer</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a class="block block-rounded block-link-hover3" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="pull-right">
                        <?php $one->get_avatar('', 'female'); ?>
                    </div>
                    <div class="pull-left push-10-t">
                        <div class="font-w600 push-5"><?php $one->get_name('female'); ?></div>
                        <div class="text-muted">Copywriter</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a class="block block-rounded block-link-hover3" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="text-right pull-right push-10-t">
                        <div class="font-w600 push-5"><?php $one->get_name('male'); ?></div>
                        <div class="text-muted">Developer</div>
                    </div>
                    <div class="pull-left">
                        <?php $one->get_avatar('', 'male'); ?>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a class="block block-rounded block-link-hover3" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="text-right pull-right push-10-t">
                        <div class="font-w600 push-5"><?php $one->get_name('male'); ?></div>
                        <div class="text-muted">Photographer</div>
                    </div>
                    <div class="pull-left">
                        <?php $one->get_avatar('', 'male'); ?>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!-- END User Simple Widgets -->

    <!-- User Card Widgets -->
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <a class="block block-link-hover2" href="javascript:void(0)">
                <div class="block-content block-content-full text-center">
                    <div>
                        <?php $one->get_avatar('', 'female', 96); ?>
                    </div>
                    <div class="h5 push-15-t push-5"><?php $one->get_name('female'); ?></div>
                    <div class="text-muted">Web Designer</div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a class="block block-link-hover2" href="javascript:void(0)">
                <div class="block-content block-content-full text-center">
                    <div>
                        <?php $one->get_avatar('', 'female', 96); ?>
                    </div>
                    <div class="h5 push-15-t push-5"><?php $one->get_name('female'); ?></div>
                    <div class="text-muted">Graphic Designer</div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a class="block block-link-hover2" href="javascript:void(0)">
                <div class="block-content block-content-full text-center">
                    <div>
                        <?php $one->get_avatar('', 'male', 96); ?>
                    </div>
                    <div class="h5 push-15-t push-5"><?php $one->get_name('male'); ?></div>
                    <div class="text-muted">Web Developer</div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a class="block block-link-hover2" href="javascript:void(0)">
                <div class="block-content block-content-full text-center">
                    <div>
                        <?php $one->get_avatar('', 'male', 96); ?>
                    </div>
                    <div class="h5 push-15-t push-5"><?php $one->get_name('male'); ?></div>
                    <div class="text-muted">Photographer</div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a class="block block-link-hover3" href="javascript:void(0)">
                <div class="block-content block-content-full text-center">
                    <div>
                        <?php $one->get_avatar('', 'female', 96); ?>
                    </div>
                    <div class="h5 push-15-t push-5"><?php $one->get_name('female'); ?></div>
                </div>
                <div class="block-content block-content-mini block-content-full bg-gray-lighter">
                    <div class="text-center text-muted">Web Designer</div>
                </div>
                <div class="block-content">
                    <div class="row items-push text-center">
                        <div class="col-xs-6">
                            <div class="push-5"><i class="si si-badge fa-2x"></i></div>
                            <div class="h5 font-w300 text-muted">9 Badges</div>
                        </div>
                        <div class="col-xs-6">
                            <div class="push-5"><i class="si si-wallet fa-2x"></i></div>
                            <div class="h5 font-w300 text-muted">$ 3.100</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a class="block block-link-hover3" href="javascript:void(0)">
                <div class="block-content block-content-full text-center">
                    <div>
                        <?php $one->get_avatar('', 'female', 96); ?>
                    </div>
                    <div class="h5 push-15-t push-5"><?php $one->get_name('female'); ?></div>
                </div>
                <div class="block-content block-content-mini block-content-full bg-gray-lighter">
                    <div class="text-center text-muted">Web Developer</div>
                </div>
                <div class="block-content">
                    <div class="row items-push text-center">
                        <div class="col-xs-6">
                            <div class="push-5"><i class="si si-notebook fa-2x"></i></div>
                            <div class="h5 font-w300 text-muted">3 Notepads</div>
                        </div>
                        <div class="col-xs-6">
                            <div class="push-5"><i class="si si-camera fa-2x"></i></div>
                            <div class="h5 font-w300 text-muted">15 Photos</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a class="block block-link-hover3" href="javascript:void(0)">
                <div class="block-content block-content-full text-center">
                    <div>
                        <?php $one->get_avatar('', 'male', 96); ?>
                    </div>
                    <div class="h5 push-15-t push-5"><?php $one->get_name('male'); ?></div>
                </div>
                <div class="block-content block-content-mini block-content-full bg-gray-lighter">
                    <div class="text-center text-muted">Photographer</div>
                </div>
                <div class="block-content">
                    <div class="row items-push text-center">
                        <div class="col-xs-6">
                            <div class="push-5"><i class="si si-wallet fa-2x"></i></div>
                            <div class="h5 font-w300 text-muted">$ 2.580</div>
                        </div>
                        <div class="col-xs-6">
                            <div class="push-5"><i class="si si-trophy fa-2x"></i></div>
                            <div class="h5 font-w300 text-muted">3 Awards</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a class="block block-link-hover3" href="javascript:void(0)">
                <div class="block-content block-content-full text-center">
                    <div>
                        <?php $one->get_avatar('', 'male', 96); ?>
                    </div>
                    <div class="h5 push-15-t push-5"><?php $one->get_name('male'); ?></div>
                </div>
                <div class="block-content block-content-mini block-content-full bg-gray-lighter">
                    <div class="text-center text-muted">Copywriter</div>
                </div>
                <div class="block-content">
                    <div class="row items-push text-center">
                        <div class="col-xs-6">
                            <div class="push-5"><i class="si si-briefcase fa-2x"></i></div>
                            <div class="h5 font-w300 text-muted">36 Projects</div>
                        </div>
                        <div class="col-xs-6">
                            <div class="push-5"><i class="si si-users fa-2x"></i></div>
                            <div class="h5 font-w300 text-muted">290 Followers</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed">
                <div class="block-header bg-primary">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title"><?php $one->get_name('female'); ?></h3>
                </div>
                <div class="block-content block-content-full text-center">
                    <div>
                        <?php $one->get_avatar('', 'female', 96); ?>
                    </div>
                    <div class="text-muted push-15-t">Web Designer</div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed">
                <div class="block-header bg-info">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title"><?php $one->get_name('female'); ?></h3>
                </div>
                <div class="block-content block-content-full text-center">
                    <div>
                        <?php $one->get_avatar('', 'female', 96); ?>
                    </div>
                    <div class="text-muted push-15-t">Graphic Designer</div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed">
                <div class="block-header bg-warning">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title"><?php $one->get_name('male'); ?></h3>
                </div>
                <div class="block-content block-content-full text-center">
                    <div>
                        <?php $one->get_avatar('', 'male', 96); ?>
                    </div>
                    <div class="text-muted push-15-t">Photographer</div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed">
                <div class="block-header bg-danger">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title"><?php $one->get_name('male'); ?></h3>
                </div>
                <div class="block-content block-content-full text-center">
                    <div>
                        <?php $one->get_avatar('', 'male', 96); ?>
                    </div>
                    <div class="text-muted push-15-t">Web Developer</div>
                </div>
            </div>
        </div>
    </div>
    <!-- END User Card Widgets -->

    <!-- User Image Widgets -->
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <a class="block block-link-hover2" href="javascript:void(0)">
                <div class="block-content block-content-full text-center bg-image" style="background-image: url('<?php echo $one->assets_folder; ?>/img/photos/photo16.jpg');">
                    <?php $one->get_avatar('4', '', 96, true); ?>
                </div>
                <div class="block-content block-content-full text-center">
                    <div class="font-w600 push-5"><?php $one->get_name('female'); ?></div>
                    <div class="text-muted">Copywriter</div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a class="block block-link-hover2" href="javascript:void(0)">
                <div class="block-content block-content-full text-center bg-image" style="background-image: url('<?php echo $one->assets_folder; ?>/img/photos/photo2.jpg');">
                    <?php $one->get_avatar('3', '', 96, true); ?>
                </div>
                <div class="block-content block-content-full text-center">
                    <div class="font-w600 push-5"><?php $one->get_name('female'); ?></div>
                    <div class="text-muted">Web Developer</div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a class="block block-link-hover2" href="javascript:void(0)">
                <div class="block-content block-content-full text-center bg-image" style="background-image: url('<?php echo $one->assets_folder; ?>/img/photos/photo18.jpg');">
                    <?php $one->get_avatar('13', '', 96, true); ?>
                </div>
                <div class="block-content block-content-full text-center">
                    <div class="font-w600 push-5"><?php $one->get_name('male'); ?></div>
                    <div class="text-muted">Web Designer</div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a class="block block-link-hover2" href="javascript:void(0)">
                <div class="block-content block-content-full text-center bg-image" style="background-image: url('<?php echo $one->assets_folder; ?>/img/photos/photo17.jpg');">
                    <?php $one->get_avatar('15', '', 96, true); ?>
                </div>
                <div class="block-content block-content-full text-center">
                    <div class="font-w600 push-5"><?php $one->get_name('male'); ?></div>
                    <div class="text-muted">Photographer</div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title"><?php $one->get_name('female'); ?></h3>
                </div>
                <div class="block-content block-content-full text-center bg-image" style="background-image: url('<?php echo $one->assets_folder; ?>/img/photos/photo8.jpg');">
                    <?php $one->get_avatar('2', '', 96, true); ?>
                </div>
                <div class="block-content text-center">
                    <div class="row items-push">
                        <div class="col-xs-6">
                            <div class="h3 push-5">25</div>
                            <div class="h5 font-w300 text-muted">Projects</div>
                        </div>
                        <div class="col-xs-6">
                            <div class="h3 push-5">450</div>
                            <div class="h5 font-w300 text-muted">Followers</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title"><?php $one->get_name('female'); ?></h3>
                </div>
                <div class="block-content block-content-full text-center bg-image" style="background-image: url('<?php echo $one->assets_folder; ?>/img/photos/photo12.jpg');">
                    <?php $one->get_avatar('7', '', 96, true); ?>
                </div>
                <div class="block-content text-center">
                    <div class="row items-push">
                        <div class="col-xs-6">
                            <div class="h3 push-5">39</div>
                            <div class="h5 font-w300 text-muted">Projects</div>
                        </div>
                        <div class="col-xs-6">
                            <div class="h3 push-5">252</div>
                            <div class="h5 font-w300 text-muted">Followers</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title"><?php $one->get_name('male'); ?></h3>
                </div>
                <div class="block-content block-content-full text-center bg-image" style="background-image: url('<?php echo $one->assets_folder; ?>/img/photos/photo3.jpg');">
                    <?php $one->get_avatar('10', '', 96, true); ?>
                </div>
                <div class="block-content text-center">
                    <div class="row items-push">
                        <div class="col-xs-6">
                            <div class="h3 push-5">15</div>
                            <div class="h5 font-w300 text-muted">Projects</div>
                        </div>
                        <div class="col-xs-6">
                            <div class="h3 push-5">362</div>
                            <div class="h5 font-w300 text-muted">Followers</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title"><?php $one->get_name('male'); ?></h3>
                </div>
                <div class="block-content block-content-full text-center bg-image" style="background-image: url('<?php echo $one->assets_folder; ?>/img/photos/photo15.jpg');">
                    <?php $one->get_avatar('12', '', 96, true); ?>
                </div>
                <div class="block-content text-center">
                    <div class="row items-push">
                        <div class="col-xs-6">
                            <div class="h3 push-5">15</div>
                            <div class="h5 font-w300 text-muted">Projects</div>
                        </div>
                        <div class="col-xs-6">
                            <div class="h3 push-5">16</div>
                            <div class="h5 font-w300 text-muted">Followers</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END User Image Widgets -->
    <!-- END User Widgets -->

    <!-- Statistics Widgets -->
    <h2 class="content-heading">Statistics Widgets</h2>

    <!-- Jquery Sparkline (initialized in js/pages/base_ui_widgets.js), for more examples you can check out http://omnipotent.net/jquery.sparkline/#s-about -->
    <div class="row">
        <div class="col-lg-4">
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Weekly Sales</h3>
                </div>
                <div class="block-content block-content-full text-center bg-gray-lighter">
                    <!-- Sparkline Bar 1 Container -->
                    <span class="js-widget-line1">12,16,15,16,17,15,14,18</span>
                </div>
                <div class="block-content">
                    <div class="row items-push text-center">
                        <div class="col-xs-6">
                            <div class="push-5"><i class="si si-graph fa-2x"></i></div>
                            <div class="h5 font-w300 text-muted">250 Sales</div>
                        </div>
                        <div class="col-xs-6">
                            <div class="push-5"><i class="si si-users fa-2x"></i></div>
                            <div class="h5 font-w300 text-muted">+ 15% Clients</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Weekly Tickets</h3>
                </div>
                <div class="block-content block-content-full text-center bg-gray-lighter">
                    <!-- Sparkline Bar 2 Container -->
                    <span class="js-widget-line2">5,6,3,7,2,6,5,6</span>
                </div>
                <div class="block-content">
                    <div class="row items-push text-center">
                        <div class="col-xs-6">
                            <div class="push-5"><i class="si si-support fa-2x"></i></div>
                            <div class="h5 font-w300 text-muted">29 Tickets</div>
                        </div>
                        <div class="col-xs-6">
                            <div class="push-5"><i class="si si-check fa-2x"></i></div>
                            <div class="h5 font-w300 text-muted">15 Resolved</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Weekly Earnings</h3>
                </div>
                <div class="block-content block-content-full text-center bg-gray-lighter">
                    <!-- Sparkline Bar 3 Container -->
                    <span class="js-widget-line3">50,90,80,90,80,70,110,100</span>
                </div>
                <div class="block-content">
                    <div class="row items-push text-center">
                        <div class="col-xs-6">
                            <div class="push-5"><i class="si si-wallet fa-2x"></i></div>
                            <div class="h5 font-w300 text-muted">$ 1.900</div>
                        </div>
                        <div class="col-xs-6">
                            <div class="push-5"><i class="si si-graph fa-2x"></i></div>
                            <div class="h5 font-w300 text-muted">+ 50% Earnings</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Jquery Sparkline -->

    <!-- Easy Pie Chart (.js-pie-chart class is initialized in App() -> uiHelperEasyPieChart()) -->
    <!-- For more info and examples you can check out http://rendro.github.io/easy-pie-chart/ -->
    <div class="row">
        <div class="col-lg-4">
            <div class="block block-themed">
                <div class="block-header bg-amethyst">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Storage</h3>
                </div>
                <div class="block-content block-content-full text-center">
                    <!-- Pie Chart Container -->
                    <div class="js-pie-chart pie-chart" data-percent="70" data-line-width="2" data-size="150" data-bar-color="#a48ad4" data-track-color="#eeeeee">
                        <span class="h4">0,7 <br><small class="h5 font-w400 text-muted">/1GB</small></span>
                    </div>
                </div>
                <div class="block-content bg-gray-lighter">
                    <div class="row items-push text-center">
                        <div class="col-xs-6">
                            <div class="push-5"><i class="si si-rocket fa-2x"></i></div>
                            <div class="h5 font-w300 text-muted">VIP Plan</div>
                        </div>
                        <div class="col-xs-6">
                            <div class="push-5"><i class="si si-cloud-upload fa-2x"></i></div>
                            <div class="h5 font-w300 text-muted"><a href="javascript:void(0)">Upgrade</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="block block-themed">
                <div class="block-header bg-primary">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Updating..</h3>
                </div>
                <div class="block-content block-content-full text-center">
                    <!-- Pie Chart Container -->
                    <div class="js-pie-chart pie-chart" data-percent="40" data-line-width="2" data-size="150" data-bar-color="#5c90d2" data-track-color="#eeeeee">
                        <span class="h4">40%</span>
                    </div>
                </div>
                <div class="block-content bg-gray-lighter">
                    <div class="row items-push text-center">
                        <div class="col-xs-6">
                            <div class="push-5"><i class="si si-target fa-2x"></i></div>
                            <div class="h5 font-w300 text-muted">v1.2</div>
                        </div>
                        <div class="col-xs-6">
                            <div class="push-5"><i class="si si-speedometer fa-2x"></i></div>
                            <div class="h5 font-w300 text-muted">3 min left</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="block block-themed">
                <div class="block-header bg-modern">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Tasks</h3>
                </div>
                <div class="block-content block-content-full text-center">
                    <!-- Pie Chart Container -->
                    <div class="js-pie-chart pie-chart" data-percent="100" data-line-width="2" data-size="150" data-bar-color="#14adc4" data-track-color="#eeeeee">
                        <span class="h4"><i class="si si-check fa-3x text-modern"></i></span>
                    </div>
                </div>
                <div class="block-content bg-gray-lighter">
                    <div class="row items-push text-center">
                        <div class="col-xs-6">
                            <div class="push-5"><i class="si si-list fa-2x"></i></div>
                            <div class="h5 font-w300 text-muted">10 Tasks</div>
                        </div>
                        <div class="col-xs-6">
                            <div class="push-5"><i class="si si-like fa-2x"></i></div>
                            <div class="h5 font-w300 text-muted">10 Completed</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="block block-themed block-bordered">
                <div class="block-content block-content-full text-center">
                    <!-- Pie Chart Container -->
                    <div class="js-pie-chart pie-chart" data-percent="90" data-line-width="3" data-size="100" data-bar-color="#abe37d" data-track-color="#eeeeee" data-scale-color="#dddddd">
                        <span>
                            <?php $one->get_avatar(); ?>
                        </span>
                    </div>
                </div>
                <div class="block-content border-t">
                    <div class="row items-push text-center">
                        <div class="col-xs-6 border-r">
                            <div class="push-5"><i class="si si-briefcase fa-2x"></i></div>
                            <div class="h5 font-w300 text-muted">15 Projects</div>
                        </div>
                        <div class="col-xs-6">
                            <div class="push-5"><i class="si si-users fa-2x"></i></div>
                            <div class="h5 font-w300 text-muted">1500 Followers</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="block block-themed block-bordered">
                <div class="block-content block-content-full text-center">
                    <!-- Pie Chart Container -->
                    <div class="js-pie-chart pie-chart" data-percent="60" data-line-width="3" data-size="100" data-bar-color="#faad7d" data-track-color="#eeeeee" data-scale-color="#dddddd">
                        <span>
                            <?php $one->get_avatar(); ?>
                        </span>
                    </div>
                </div>
                <div class="block-content border-t">
                    <div class="row items-push text-center">
                        <div class="col-xs-6 border-r">
                            <div class="push-5"><i class="si si-briefcase fa-2x"></i></div>
                            <div class="h5 font-w300 text-muted">15 Projects</div>
                        </div>
                        <div class="col-xs-6">
                            <div class="push-5"><i class="si si-users fa-2x"></i></div>
                            <div class="h5 font-w300 text-muted">1500 Followers</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="block block-themed block-bordered">
                <div class="block-content block-content-full text-center">
                    <!-- Pie Chart Container -->
                    <div class="js-pie-chart pie-chart" data-percent="20" data-line-width="3" data-size="100" data-bar-color="#fadb7d" data-track-color="#eeeeee" data-scale-color="#dddddd">
                        <span>
                            <?php $one->get_avatar(); ?>
                        </span>
                    </div>
                </div>
                <div class="block-content border-t">
                    <div class="row items-push text-center">
                        <div class="col-xs-6 border-r">
                            <div class="push-5"><i class="si si-briefcase fa-2x"></i></div>
                            <div class="h5 font-w300 text-muted">15 Projects</div>
                        </div>
                        <div class="col-xs-6">
                            <div class="push-5"><i class="si si-users fa-2x"></i></div>
                            <div class="h5 font-w300 text-muted">1500 Followers</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Easy Pie Chart -->
    <!-- END Statistics Widgets -->

    <!-- Slider Widgets -->
    <!-- Slick slider (.js-slider class is initialized in App() -> uiHelperSlick()) -->
    <!-- For more info and examples you can check out http://kenwheeler.github.io/slick/ -->
    <h2 class="content-heading">Slider Widgets</h2>
    <div class="row">
        <div class="col-lg-4">
            <div class="block">
                <div class="js-slider remove-margin-b" data-slider-autoplay="true">
                    <div>
                        <?php $one->get_photo(2, false, 'img-responsive'); ?>
                    </div>
                    <div>
                        <?php $one->get_photo(3, false, 'img-responsive'); ?>
                    </div>
                    <div>
                        <?php $one->get_photo(4, false, 'img-responsive'); ?>
                    </div>
                </div>
                <div class="block-content">
                    <div class="row items-push text-center">
                        <div class="col-xs-6 border-r">
                            <div class="push-5"><i class="si si-camera fa-2x"></i></div>
                            <div class="h5 font-w300 text-muted">3 Photos</div>
                        </div>
                        <div class="col-xs-6">
                            <div class="push-5"><i class="si si-eye fa-2x"></i></div>
                            <div class="h5 font-w300 text-muted">100 Views</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="block">
                <div class="js-slider slick-nav-white slick-nav-hover remove-margin-b" data-slider-arrows="true">
                    <div>
                        <?php $one->get_photo(6, false, 'img-responsive'); ?>
                    </div>
                    <div>
                        <?php $one->get_photo(8, false, 'img-responsive'); ?>
                    </div>
                    <div>
                        <?php $one->get_photo(9, false, 'img-responsive'); ?>
                    </div>
                </div>
                <div class="block-content">
                    <div class="row items-push text-center">
                        <div class="col-xs-6 border-r">
                            <div class="push-5"><i class="si si-camera fa-2x"></i></div>
                            <div class="h5 font-w300 text-muted">3 Photos</div>
                        </div>
                        <div class="col-xs-6">
                            <div class="push-5"><i class="si si-eye fa-2x"></i></div>
                            <div class="h5 font-w300 text-muted">250 Views</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="block block-themed">
                <div class="block-header bg-primary-dark">
                    <ul class="block-options">
                        <li>
                            <span>3 Photos</span>
                        </li>
                    </ul>
                    <h3 class="block-title">Gallery</h3>
                </div>
                <div class="js-slider slick-padding-dots" data-slider-dots="true">
                    <div>
                        <?php $one->get_photo(10, false, 'img-responsive'); ?>
                    </div>
                    <div>
                        <?php $one->get_photo(11, false, 'img-responsive'); ?>
                    </div>
                    <div>
                        <?php $one->get_photo(12, false, 'img-responsive'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Slider Widgets -->

    <!-- Various Widgets -->
    <h2 class="content-heading">Various Widgets</h2>
    <div class="row">
        <div class="col-lg-4">
            <!-- Email Center Widget -->
            <div class="block block-bordered">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                        </li>
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                        <li>
                            <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Email Center</h3>
                </div>
                <div class="block-content">
                    <div class="pull-r-l pull-t push">
                        <table class="block-table text-center bg-gray-lighter border-b">
                            <tbody>
                                <tr>
                                    <td class="border-r" style="width: 50%;">
                                        <div class="h1 font-w700">3</div>
                                        <div class="h5 text-muted text-uppercase push-5-t">New Messages</div>
                                    </td>
                                    <td>
                                        <div class="push-30 push-30-t">
                                            <i class="si si-envelope fa-3x text-black-op"></i>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="list-group">
                        <a class="list-group-item active" href="javascript:void(0)">
                            <span class="badge">3</span>
                            <i class="fa fa-fw fa-inbox push-5-r"></i> Inbox
                        </a>
                        <a class="list-group-item" href="javascript:void(0)">
                            <i class="fa fa-fw fa-send push-5-r"></i> Sent
                        </a>
                        <a class="list-group-item" href="javascript:void(0)">
                            <i class="fa fa-fw fa-edit push-5-r"></i> Drafts
                        </a>
                        <a class="list-group-item" href="javascript:void(0)">
                            <i class="fa fa-fw fa-archive push-5-r"></i> Archive
                        </a>
                        <a class="list-group-item" href="javascript:void(0)">
                            <i class="fa fa-fw fa-trash push-5-r"></i> Trash
                        </a>
                    </div>
                </div>
            </div>
            <!-- END Email Center Widget -->
        </div>
        <div class="col-lg-4">
            <!-- Notifications Widget -->
            <div class="block block-bordered">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                        </li>
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                        <li>
                            <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Notifications</h3>
                </div>
                <div class="block-content">
                    <div class="pull-r-l pull-t push">
                        <table class="block-table text-center bg-gray-lighter border-b">
                            <tbody>
                                <tr>
                                    <td class="border-r" style="width: 50%;">
                                        <div class="h1 font-w700">3</div>
                                        <div class="h5 text-muted text-uppercase push-5-t">New Notifications</div>
                                    </td>
                                    <td>
                                        <div class="push-30 push-30-t">
                                            <i class="si si-directions fa-3x text-black-op"></i>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <p><i class="fa fa-check"></i> The <a class="alert-link" href="javascript:void(0)">App</a> was updated successfully!</p>
                    </div>
                    <div class="alert alert-info alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <p><i class="fa fa-info-circle"></i> Just an information <a class="alert-link" href="javascript:void(0)">message</a>!</p>
                    </div>
                    <div class="alert alert-warning alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <p><i class="fa fa-warning"></i> Please pay <a class="alert-link" href="javascript:void(0)">attention</a>!</p>
                    </div>
                </div>
            </div>
            <!-- END Notifications Widget -->
        </div>
        <div class="col-lg-4">
            <!-- Friends Widget -->
            <div class="block block-bordered">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                        </li>
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                        <li>
                            <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Friends</h3>
                </div>
                <div class="block-content">
                    <div class="pull-r-l pull-t push">
                        <table class="block-table text-center bg-gray-lighter border-b">
                            <tbody>
                                <tr>
                                    <td class="border-r" style="width: 50%;">
                                        <div class="h1 font-w700">3</div>
                                        <div class="h5 text-muted text-uppercase push-5-t">New Friends</div>
                                    </td>
                                    <td>
                                        <div class="push-30 push-30-t">
                                            <i class="si si-users fa-3x text-black-op"></i>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <ul class="nav-users push">
                        <li>
                            <a href="base_pages_profile.php">
                                <?php $one->get_avatar('', 'female'); ?>
                                <i class="fa fa-circle text-success"></i> <?php $one->get_name('female'); echo "\n"; ?>
                                <div class="font-w400 text-muted"><small>Web Designer</small></div>
                            </a>
                        </li>
                        <li>
                            <a href="base_pages_profile.php">
                                <?php $one->get_avatar('', 'male'); ?>
                                <i class="fa fa-circle text-success"></i> <?php $one->get_name('male'); echo "\n"; ?>
                                <div class="font-w400 text-muted"><small>Graphic Designer</small></div>
                            </a>
                        </li>
                        <li>
                            <a href="base_pages_profile.php">
                                <?php $one->get_avatar('', 'female'); ?>
                                <i class="fa fa-circle text-success"></i> <?php $one->get_name('female'); echo "\n"; ?>
                                <div class="font-w400 text-muted"><small>Photographer</small></div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END Friends Widget -->
        </div>
    </div>
    <!-- END Various Widgets -->
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>

<!-- Page JS Plugins -->
<script src="<?php echo $one->assets_folder; ?>/js/plugins/sparkline/jquery.sparkline.min.js"></script>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/slick/slick.min.js"></script>

<!-- Page JS Code -->
<script src="<?php echo $one->assets_folder; ?>/js/pages/base_ui_widgets.js"></script>
<script>
    $(function(){
        // Init page helpers (Slick Slider + Easy Pie Chart plugins)
        App.initHelpers(['slick', 'easy-pie-chart']);
    });
</script>

<?php require 'inc/views/template_footer_end.php'; ?>