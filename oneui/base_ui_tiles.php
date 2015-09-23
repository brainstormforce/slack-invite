<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">
                Tiles <small>Small UI component that can become really useful.</small>
            </h1>
        </div>
        <div class="col-sm-5 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>UI Elements</li>
                <li><a class="link-effect" href="">Tiles</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content content-narrow">
    <!-- Icon Tiles -->
    <h2 class="content-heading">Icon Tiles</h2>
    <div class="content-grid push-50">
        <div class="row">
            <div class="col-xs-6 col-sm-4 col-lg-2">
                <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <i class="si si-music-tone fa-4x text-primary-darker"></i>
                        <div class="font-w600 push-15-t">Songs</div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-4 col-lg-2">
                <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <i class="si si-trash fa-4x text-danger"></i>
                        <div class="font-w600 push-15-t">Trash</div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-4 col-lg-2">
                <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <i class="si si-star fa-4x text-warning"></i>
                        <div class="font-w600 push-15-t">Ratings</div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-4 col-lg-2">
                <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <i class="si si-bar-chart fa-4x text-success"></i>
                        <div class="font-w600 push-15-t">Sales</div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-4 col-lg-2">
                <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <i class="si si-support fa-4x text-muted"></i>
                        <div class="font-w600 push-15-t">Support</div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-4 col-lg-2">
                <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <i class="si si-speedometer fa-4x text-danger"></i>
                        <div class="font-w600 push-15-t">Dashboard</div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-4 col-lg-2">
                <a class="block block-link-hover2 text-center" href="javascript:void(0)">
                    <div class="block-content block-content-full bg-primary">
                        <i class="si si-shuffle fa-4x text-white"></i>
                        <div class="font-w600 text-white-op push-15-t">Shuffle</div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-4 col-lg-2">
                <a class="block block-link-hover2 text-center" href="javascript:void(0)">
                    <div class="block-content block-content-full bg-success">
                        <i class="si si-calculator fa-4x text-white"></i>
                        <div class="font-w600 text-white-op push-15-t">Calc</div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-4 col-lg-2">
                <a class="block block-link-hover2 text-center" href="javascript:void(0)">
                    <div class="block-content block-content-full bg-primary-dark">
                        <i class="si si-film fa-4x text-white"></i>
                        <div class="font-w600 text-white-op push-15-t">Movies</div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-4 col-lg-2">
                <a class="block block-link-hover2 text-center" href="javascript:void(0)">
                    <div class="block-content block-content-full bg-modern">
                        <i class="si si-crop fa-4x text-white"></i>
                        <div class="font-w600 text-white-op push-15-t">Crop</div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-4 col-lg-2">
                <a class="block block-link-hover2 text-center" href="javascript:void(0)">
                    <div class="block-content block-content-full bg-amethyst">
                        <i class="si si-settings fa-4x text-white"></i>
                        <div class="font-w600 text-white-op push-15-t">Settings</div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-4 col-lg-2">
                <a class="block block-link-hover2 text-center" href="javascript:void(0)">
                    <div class="block-content block-content-full bg-city">
                        <i class="si si-game-controller fa-4x text-white"></i>
                        <div class="font-w600 text-white-op push-15-t">Games</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- END Icon Tiles -->

    <!-- One Row Tiles -->
    <h2 class="content-heading">One Row Tiles</h2>
    <div class="content-grid push-50">
        <!-- Simple Tiles -->
        <div class="row">
            <div class="col-lg-4">
                <a class="block block-link-hover3" href="javascript:void(0)">
                    <div class="block-content block-content-full clearfix">
                        <i class="si si-envelope fa-2x text-muted pull-right"></i>
                        <span class="h4 font-w700">5</span> <span class="h4 text-muted">messages</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a class="block block-link-hover3" href="javascript:void(0)">
                    <div class="block-content block-content-full clearfix">
                        <i class="si si-users fa-2x text-muted pull-right"></i>
                        <span class="h4 font-w700">15k</span> <span class="h4 text-muted">users</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a class="block block-link-hover3" href="javascript:void(0)">
                    <div class="block-content block-content-full clearfix">
                        <i class="si si-user-follow fa-2x text-muted pull-right"></i>
                        <span class="h4 font-w700">12</span> <span class="h4 text-muted">clients</span>
                    </div>
                </a>
            </div>
        </div>
        <!-- END Simple Tiles -->

        <!-- Colored Tiles -->
        <div class="row">
            <div class="col-lg-4">
                <a class="block block-link-hover1" href="javascript:void(0)">
                    <div class="block-content block-content-full clearfix">
                        <i class="si si-envelope fa-2x text-warning pull-right"></i>
                        <span class="h4 font-w700">2</span> <span class="h4 text-muted">messages</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a class="block block-link-hover1" href="javascript:void(0)">
                    <div class="block-content block-content-full clearfix">
                        <i class="si si-users fa-2x text-danger pull-right"></i>
                        <span class="h4 font-w700">65k</span> <span class="h4 text-muted">users</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a class="block block-link-hover1" href="javascript:void(0)">
                    <div class="block-content block-content-full clearfix">
                        <i class="si si-user-follow fa-2x text-primary pull-right"></i>
                        <span class="h4 font-w700">30</span> <span class="h4 text-muted">clients</span>
                    </div>
                </a>
            </div>
        </div>
        <!-- END Colored Tiles -->

        <!-- Background Colored Tiles -->
        <div class="row">
            <div class="col-lg-4">
                <a class="block block-link-hover2" href="javascript:void(0)">
                    <div class="block-content block-content-full bg-primary clearfix">
                        <i class="si si-envelope fa-2x text-white pull-right"></i>
                        <span class="h4 font-w700 text-white">9</span> <span class="h4 text-white-op">messages</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a class="block block-link-hover2" href="javascript:void(0)">
                    <div class="block-content block-content-full bg-city clearfix">
                        <i class="si si-users fa-2x text-white pull-right"></i>
                        <span class="h4 font-w700 text-white">12k</span> <span class="h4 text-white-op">users</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a class="block block-link-hover2" href="javascript:void(0)">
                    <div class="block-content block-content-full bg-flat clearfix">
                        <i class="si si-user-follow fa-2x text-white pull-right"></i>
                        <span class="h4 font-w700 text-white">19</span> <span class="h4 text-white-op">clients</span>
                    </div>
                </a>
            </div>
        </div>
        <!-- END Background Colored Tiles -->
    </div>
    <!-- END One Row Tiles -->

    <!-- Multi Rows Tiles -->
    <h2 class="content-heading">Multi Rows Tiles</h2>

    <!-- Simple Tiles -->
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                <div class="block-content block-content-full border-b">
                    <i class="si si-social-twitter fa-5x text-gray"></i>
                </div>
                <div class="block-content block-content-full block-content-mini bg-gray-lighter">
                    <strong>5000</strong> Followers
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                <div class="block-content block-content-full border-b">
                    <i class="si si-social-facebook fa-5x text-gray"></i>
                </div>
                <div class="block-content block-content-full block-content-mini bg-gray-lighter">
                    <strong>2390</strong> Likes
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                <div class="block-content block-content-full border-b">
                    <i class="si si-social-dropbox fa-5x text-gray"></i>
                </div>
                <div class="block-content block-content-full block-content-mini bg-gray-lighter">
                    <strong>0.5</strong>/1 TB
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                <div class="block-content block-content-full border-b">
                    <i class="si si-social-youtube fa-5x text-gray"></i>
                </div>
                <div class="block-content block-content-full block-content-mini bg-gray-lighter">
                    <strong>250k</strong> Views
                </div>
            </a>
        </div>
    </div>
    <!-- END Simple Tiles -->

    <!-- Colored Tiles -->
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <a class="block block-link-hover2 text-center" href="javascript:void(0)">
                <div class="block-content block-content-full border-b">
                    <i class="si si-social-twitter fa-5x text-info"></i>
                </div>
                <div class="block-content block-content-full block-content-mini bg-gray-lighter">
                    <strong>2600</strong> Followers
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a class="block block-link-hover2 text-center" href="javascript:void(0)">
                <div class="block-content block-content-full border-b">
                    <i class="si si-social-facebook fa-5x text-primary"></i>
                </div>
                <div class="block-content block-content-full block-content-mini bg-gray-lighter">
                    <strong>6820</strong> Likes
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a class="block block-link-hover2 text-center" href="javascript:void(0)">
                <div class="block-content block-content-full border-b">
                    <i class="si si-social-dropbox fa-5x text-primary-dark"></i>
                </div>
                <div class="block-content block-content-full block-content-mini bg-gray-lighter">
                    <strong>0.8</strong>/1 TB
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a class="block block-link-hover2 text-center" href="javascript:void(0)">
                <div class="block-content block-content-full border-b">
                    <i class="si si-social-youtube fa-5x text-danger"></i>
                </div>
                <div class="block-content block-content-full block-content-mini bg-gray-lighter">
                    <strong>680k</strong> Views
                </div>
            </a>
        </div>
    </div>
    <!-- END Colored Tiles -->

    <!-- Background Colored Tiles -->
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <a class="block block-link-hover1 text-center" href="javascript:void(0)">
                <div class="block-content block-content-full bg-info">
                    <i class="si si-social-twitter fa-5x text-white"></i>
                </div>
                <div class="block-content block-content-full block-content-mini">
                    <strong>9510</strong> Followers
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a class="block block-link-hover1 text-center" href="javascript:void(0)">
                <div class="block-content block-content-full bg-primary">
                    <i class="si si-social-facebook fa-5x text-white"></i>
                </div>
                <div class="block-content block-content-full block-content-mini">
                    <strong>1800</strong> Likes
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a class="block block-link-hover1 text-center" href="javascript:void(0)">
                <div class="block-content block-content-full bg-modern-dark">
                    <i class="si si-social-dropbox fa-5x text-white"></i>
                </div>
                <div class="block-content block-content-full block-content-mini">
                    <strong>0.1</strong>/1 TB
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a class="block block-link-hover1 text-center" href="javascript:void(0)">
                <div class="block-content block-content-full bg-danger">
                    <i class="si si-social-youtube fa-5x text-white"></i>
                </div>
                <div class="block-content block-content-full block-content-mini">
                    <strong>120k</strong> Views
                </div>
            </a>
        </div>
    </div>
    <!-- END Background Colored Tiles -->
    <!-- END Multi Rows Tiles -->

    <!-- Texts Tiles -->
    <h2 class="content-heading">Text Tiles</h2>

    <!-- Simple Text Tiles -->
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <a class="block block-bordered block-link-hover3 text-center" href="javascript:void(0)">
                <div class="block-content block-content-full bg-gray-lighter border-b">
                    <div class="h1 font-w700"><span class="h2 text-muted">$</span> 1.250,00</div>
                    <div class="h5 text-muted text-uppercase push-5-t">Earnings</div>
                </div>
                <div class="block-content block-content-full block-content-mini">
                    <i class="fa fa-arrow-up text-success"></i> +50% This week
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a class="block block-bordered block-link-hover3 text-center" href="javascript:void(0)">
                <div class="block-content block-content-full bg-gray-lighter border-b">
                    <div class="h1 font-w700">21.000</div>
                    <div class="h5 text-muted text-uppercase push-5-t">Downloads</div>
                </div>
                <div class="block-content block-content-full block-content-mini">
                    <i class="fa fa-arrow-down text-danger"></i> -5% This week
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a class="block block-bordered block-link-hover3 text-center" href="javascript:void(0)">
                <div class="block-content block-content-full bg-gray-lighter border-b">
                    <div class="h1 font-w700"><span class="h2 text-muted">+</span> 180</div>
                    <div class="h5 text-muted text-uppercase push-5-t">Sales</div>
                </div>
                <div class="block-content block-content-full block-content-mini">
                    <i class="fa fa-chevron-up text-success"></i> +5% This week
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a class="block block-bordered block-link-hover3 text-center" href="javascript:void(0)">
                <div class="block-content block-content-full bg-gray-lighter border-b">
                    <div class="h1 font-w700"><span class="h2 text-muted">+</span> 1920</div>
                    <div class="h5 text-muted text-uppercase push-5-t">Users</div>
                </div>
                <div class="block-content block-content-full block-content-mini">
                    <i class="fa fa-chevron-down text-danger"></i> -2% This week
                </div>
            </a>
        </div>
    </div>
    <!-- END Simple Text Tiles -->

    <!-- Background Colored Text Tiles -->
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <a class="block block-rounded block-link-hover3 text-center" href="javascript:void(0)">
                <div class="block-content block-content-full bg-success">
                    <div class="h1 font-w700 text-white"><span class="h2 text-white-op">$</span> 2.980,00</div>
                    <div class="h5 text-white-op text-uppercase push-5-t">Earnings</div>
                </div>
                <div class="block-content block-content-full block-content-mini">
                    <i class="fa fa-arrow-up text-success"></i> +90% This week
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a class="block block-rounded block-link-hover3 text-center" href="javascript:void(0)">
                <div class="block-content block-content-full bg-danger">
                    <div class="h1 font-w700 text-white">18.800</div>
                    <div class="h5 text-white-op text-uppercase push-5-t">Downloads</div>
                </div>
                <div class="block-content block-content-full block-content-mini">
                    <i class="fa fa-arrow-down text-danger"></i> -5% This week
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a class="block block-rounded block-link-hover3 text-center" href="javascript:void(0)">
                <div class="block-content block-content-full bg-warning">
                    <div class="h1 font-w700 text-white"><span class="h2 text-white-op">+</span> 360</div>
                    <div class="h5 text-white-op text-uppercase push-5-t">Sales</div>
                </div>
                <div class="block-content block-content-full block-content-mini">
                    <i class="fa fa-chevron-up text-warning"></i> +10% This week
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a class="block block-rounded block-link-hover3 text-center" href="javascript:void(0)">
                <div class="block-content block-content-full bg-info">
                    <div class="h1 font-w700 text-white"><span class="h2 text-white-op">+</span> 320</div>
                    <div class="h5 text-white-op text-uppercase push-5-t">Users</div>
                </div>
                <div class="block-content block-content-full block-content-mini">
                    <i class="fa fa-chevron-down text-info"></i> -2% This week
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a class="block block-rounded block-link-hover3 text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="h1 font-w700"><span class="h2 text-muted">$</span> 2.320,00</div>
                    <div class="h5 text-muted text-uppercase push-5-t">Earnings</div>
                </div>
                <div class="block-content block-content-full block-content-mini bg-success text-white">
                    <i class="fa fa-arrow-up text-black-op"></i> +60% This week
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a class="block block-rounded block-link-hover3 text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="h1 font-w700">28.600</div>
                    <div class="h5 text-muted text-uppercase push-5-t">Downloads</div>
                </div>
                <div class="block-content block-content-full block-content-mini bg-danger text-white">
                    <i class="fa fa-arrow-down text-black-op"></i> -15% This week
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a class="block block-rounded block-link-hover3 text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="h1 font-w700"><span class="h2 text-muted">+</span> 245</div>
                    <div class="h5 text-muted text-uppercase push-5-t">Sales</div>
                </div>
                <div class="block-content block-content-full block-content-mini bg-warning text-white">
                    <i class="fa fa-chevron-up text-black-op"></i> +15% This week
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a class="block block-rounded block-link-hover3 text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="h1 font-w700"><span class="h2 text-muted">+</span> 750</div>
                    <div class="h5 text-muted text-uppercase push-5-t">Users</div>
                </div>
                <div class="block-content block-content-full block-content-mini bg-primary text-white">
                    <i class="fa fa-chevron-down text-black-op"></i> -2% This week
                </div>
            </a>
        </div>
    </div>
    <!-- END Background Colored Text Tiles -->
    <!-- END Texts Tiles -->

    <!-- Vertical Tiles -->
    <h2 class="content-heading">Vertical Tiles</h2>

    <!-- Simple Vertical Tiles -->
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <a class="block block-bordered block-link-hover3" href="javascript:void(0)">
                <table class="block-table text-center">
                    <tbody>
                        <tr>
                            <td class="bg-gray-lighter border-r" style="width: 50%;">
                                <div class="push-30 push-30-t">
                                    <i class="si si-users fa-3x text-black-op"></i>
                                </div>
                            </td>
                            <td style="width: 50%;">
                                <div class="h1 font-w700"><span class="h2 text-muted">+</span> 750</div>
                                <div class="h5 text-muted text-uppercase push-5-t">Users</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a class="block block-bordered block-link-hover3" href="javascript:void(0)">
                <table class="block-table text-center">
                    <tbody>
                        <tr>
                            <td class="bg-gray-lighter border-r" style="width: 50%;">
                                <div class="push-30 push-30-t">
                                    <i class="si si-trophy fa-3x text-black-op"></i>
                                </div>
                            </td>
                            <td style="width: 50%;">
                                <div class="h1 font-w700"><span class="h2 text-muted">+</span> 3</div>
                                <div class="h5 text-muted text-uppercase push-5-t">Achievements</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a class="block block-bordered block-link-hover3" href="javascript:void(0)">
                <table class="block-table text-center">
                    <tbody>
                        <tr>
                            <td style="width: 50%;">
                                <div class="h1 font-w700"><span class="h2 text-muted">+</span> 3</div>
                                <div class="h5 text-muted text-uppercase push-5-t">New Games</div>
                            </td>
                            <td class="bg-gray-lighter border-l" style="width: 50%;">
                                <div class="push-30 push-30-t">
                                    <i class="si si-game-controller fa-3x text-black-op"></i>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a class="block block-bordered block-link-hover3" href="javascript:void(0)">
                <table class="block-table text-center">
                    <tbody>
                        <tr>
                            <td style="width: 50%;">
                                <div class="h1 font-w700"><span class="h2 text-muted">+</span> 10</div>
                                <div class="h5 text-muted text-uppercase push-5-t">New Followers</div>
                            </td>
                            <td class="bg-gray-lighter border-l" style="width: 50%;">
                                <div class="push-30 push-30-t">
                                    <i class="si si-social-dribbble fa-3x text-black-op"></i>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </a>
        </div>
    </div>
    <!-- END Simple Vertical Tiles -->

    <!-- Background Colored Vertical Tiles -->
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <div class="block">
                <table class="block-table text-center">
                    <tbody>
                        <tr>
                            <td class="bg-primary" style="width: 50%;">
                                <div class="push-30 push-30-t">
                                    <i class="si si-calendar fa-3x text-white-op"></i>
                                </div>
                            </td>
                            <td style="width: 50%;">
                                <div class="h1 font-w700"><span class="h2 text-muted">+</span> 2</div>
                                <div class="h5 text-muted text-uppercase push-5-t">Events</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block">
                <table class="block-table text-center">
                    <tbody>
                        <tr>
                            <td class="bg-gray-darker" style="width: 50%;">
                                <div class="push-30 push-30-t">
                                    <i class="si si-speech fa-3x text-white-op"></i>
                                </div>
                            </td>
                            <td style="width: 50%;">
                                <div class="h1 font-w700"><span class="h2 text-muted">+</span> 9</div>
                                <div class="h5 text-muted text-uppercase push-5-t">Comments</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block">
                <table class="block-table text-center">
                    <tbody>
                        <tr>
                            <td style="width: 50%;">
                                <div class="h1 font-w700"><span class="h2 text-muted">+</span> 3</div>
                                <div class="h5 text-muted text-uppercase push-5-t">New Sales</div>
                            </td>
                            <td class="bg-success" style="width: 50%;">
                                <div class="push-30 push-30-t">
                                    <i class="si si-wallet fa-3x text-white-op"></i>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block">
                <table class="block-table text-center">
                    <tbody>
                        <tr>
                            <td style="width: 50%;">
                                <div class="h1 font-w700"><span class="h2 text-muted">+</span> 10</div>
                                <div class="h5 text-muted text-uppercase push-5-t">New Followers</div>
                            </td>
                            <td class="bg-info" style="width: 50%;">
                                <div class="push-30 push-30-t">
                                    <i class="si si-social-twitter fa-3x text-white-op"></i>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- END Background Colored Vertical Tiles -->
    <!-- END Vertical Tiles -->
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>
<?php require 'inc/views/template_footer_end.php'; ?>