<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/slick/slick.min.css">
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/slick/slick-theme.min.css">

<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Header -->
<div class="content bg-image overflow-hidden" style="background-image: url('<?php echo $one->assets_folder; ?>/img/photos/photo3@2x.jpg');">
    <div class="push-50-t push-15">
        <h1 class="h2 text-white animated zoomIn">Dashboard</h1>
        <h2 class="h5 text-white-op animated zoomIn">Welcome Administrator</h2>
    </div>
</div>
<!-- END Page Header -->

<!-- Stats -->
<div class="content bg-white border-b">
    <div class="row items-push text-uppercase">
        <div class="col-xs-6 col-sm-3">
            <div class="font-w700 text-gray-darker animated fadeIn">Product Sales</div>
            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> Today</small></div>
            <a class="h2 font-w300 text-primary animated flipInX" href="base_comp_charts.php">300</a>
        </div>
        <div class="col-xs-6 col-sm-3">
            <div class="font-w700 text-gray-darker animated fadeIn">Product Sales</div>
            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> This Month</small></div>
            <a class="h2 font-w300 text-primary animated flipInX" href="base_comp_charts.php">8,790</a>
        </div>
        <div class="col-xs-6 col-sm-3">
            <div class="font-w700 text-gray-darker animated fadeIn">Total Earnings</div>
            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> All Time</small></div>
            <a class="h2 font-w300 text-primary animated flipInX" href="base_comp_charts.php">$ 93,880</a>
        </div>
        <div class="col-xs-6 col-sm-3">
            <div class="font-w700 text-gray-darker animated fadeIn">Average Sale</div>
            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> All Time</small></div>
            <a class="h2 font-w300 text-primary animated flipInX" href="base_comp_charts.php">$ 270</a>
        </div>
    </div>
</div>
<!-- END Stats -->

<!-- Page Content -->
<div class="content">
    <div class="row">
        <div class="col-lg-8">
            <!-- Main Dashboard Chart -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Weekly Overview</h3>
                </div>
                <div class="block-content block-content-full bg-gray-lighter text-center">
                    <!-- Chart.js Charts (initialized in js/pages/base_pages_dashboard.js), for more examples you can check out http://www.chartjs.org/docs/ -->
                    <div style="height: 374px;"><canvas class="js-dash-chartjs-lines"></canvas></div>
                </div>
                <div class="block-content text-center">
                    <div class="row items-push text-center">
                        <div class="col-xs-6 col-lg-3">
                            <div class="push-10"><i class="si si-graph fa-2x"></i></div>
                            <div class="h5 font-w300 text-muted">+ 205 Sales</div>
                        </div>
                        <div class="col-xs-6 col-lg-3">
                            <div class="push-10"><i class="si si-users fa-2x"></i></div>
                            <div class="h5 font-w300 text-muted">+ 25% Clients</div>
                        </div>
                        <div class="col-xs-6 col-lg-3 visible-lg">
                            <div class="push-10"><i class="si si-star fa-2x"></i></div>
                            <div class="h5 font-w300 text-muted">+ 10 Ratings</div>
                        </div>
                        <div class="col-xs-6 col-lg-3 visible-lg">
                            <div class="push-10"><i class="si si-share fa-2x"></i></div>
                            <div class="h5 font-w300 text-muted">+ 35 Followers</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Main Dashboard Chart -->
        </div>
        <div class="col-lg-4">
            <!-- Latest Sales Widget -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Latest Sales</h3>
                </div>
                <div class="block-content bg-gray-lighter">
                    <div class="row items-push">
                        <div class="col-xs-4">
                            <div class="text-muted"><small><i class="si si-calendar"></i> 24 hrs</small></div>
                            <div class="font-w600">18 Sales</div>
                        </div>
                        <div class="col-xs-4">
                            <div class="text-muted"><small><i class="si si-calendar"></i> 7 days</small></div>
                            <div class="font-w600">78 Sales</div>
                        </div>
                        <div class="col-xs-4 h1 font-w300 text-right">$769</div>
                    </div>
                </div>
                <div class="block-content">
                    <div class="pull-t pull-r-l">
                        <!-- Slick slider (.js-slider class is initialized in App() -> uiHelperSlick()) -->
                        <!-- For more info and examples you can check out http://kenwheeler.github.io/slick/ -->
                        <div class="js-slider remove-margin-b" data-slider-autoplay="true" data-slider-autoplay-speed="2500">
                            <div>
                                <table class="table remove-margin-b font-s13">
                                    <tbody>
                                        <tr>
                                            <td class="font-w600">
                                                <a href="javascript:void(0)">Admin Template</a>
                                            </td>
                                            <td class="hidden-xs text-muted text-right" style="width: 70px;">23:01</td>
                                            <td class="font-w600 text-success text-right" style="width: 70px;">+ $21</td>
                                        </tr>
                                        <tr>
                                            <td class="font-w600"><a href="javascript:void(0)">WP Theme</a></td>
                                            <td class="hidden-xs text-muted text-right">22:15</td>
                                            <td class="font-w600 text-success text-right">+ $52</td>
                                        </tr>
                                        <tr>
                                            <td class="font-w600"><a href="javascript:void(0)">HTML Template</a></td>
                                            <td class="hidden-xs text-muted text-right">22:01</td>
                                            <td class="font-w600 text-success text-right">+ $16</td>
                                        </tr>
                                        <tr>
                                            <td class="font-w600"><a href="javascript:void(0)">Admin Template</a></td>
                                            <td class="hidden-xs text-muted text-right">21:45</td>
                                            <td class="font-w600 text-success text-right">+ $23</td>
                                        </tr>
                                        <tr>
                                            <td class="font-w600"><a href="javascript:void(0)">WP Theme</a></td>
                                            <td class="hidden-xs text-muted text-right">21:15</td>
                                            <td class="font-w600 text-success text-right">+ $48</td>
                                        </tr>
                                        <tr>
                                            <td class="font-w600"><a href="javascript:void(0)">Admin Template</a></td>
                                            <td class="hidden-xs text-muted text-right">20:11</td>
                                            <td class="font-w600 text-success text-right">+ $23</td>
                                        </tr>
                                        <tr>
                                            <td class="font-w600"><a href="javascript:void(0)">WP Theme</a></td>
                                            <td class="hidden-xs text-muted text-right">20:01</td>
                                            <td class="font-w600 text-success text-right">+ $50</td>
                                        </tr>
                                        <tr>
                                            <td class="font-w600"><a href="javascript:void(0)">HTML Template</a></td>
                                            <td class="hidden-xs text-muted text-right">19:35</td>
                                            <td class="font-w600 text-success text-right">+ $16</td>
                                        </tr>
                                        <tr>
                                            <td class="font-w600"><a href="javascript:void(0)">WP Theme</a></td>
                                            <td class="hidden-xs text-muted text-right">19:17</td>
                                            <td class="font-w600 text-success text-right">+ $60</td>
                                        </tr>
                                        <tr>
                                            <td class="font-w600"><a href="javascript:void(0)">WP Theme</a></td>
                                            <td class="hidden-xs text-muted text-right">17:49</td>
                                            <td class="font-w600 text-success text-right">+ $59</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div>
                                <table class="table remove-margin-b font-s13">
                                    <tbody>
                                        <tr>
                                            <td class="font-w600">
                                                <a href="javascript:void(0)">Admin Template</a>
                                            </td>
                                            <td class="hidden-xs text-muted text-right" style="width: 70px;">16:10</td>
                                            <td class="font-w600 text-success text-right" style="width: 70px;">+ $21</td>
                                        </tr>
                                        <tr>
                                            <td class="font-w600"><a href="javascript:void(0)">WP Theme</a></td>
                                            <td class="hidden-xs text-muted text-right">16:06</td>
                                            <td class="font-w600 text-success text-right">+ $48</td>
                                        </tr>
                                        <tr>
                                            <td class="font-w600"><a href="javascript:void(0)">WP Theme</a></td>
                                            <td class="hidden-xs text-muted text-right">15:21</td>
                                            <td class="font-w600 text-success text-right">+ $52</td>
                                        </tr>
                                        <tr>
                                            <td class="font-w600"><a href="javascript:void(0)">Admin Template</a></td>
                                            <td class="hidden-xs text-muted text-right">12:10</td>
                                            <td class="font-w600 text-success text-right">+ $23</td>
                                        </tr>
                                        <tr>
                                            <td class="font-w600"><a href="javascript:void(0)">Admin Template</a></td>
                                            <td class="hidden-xs text-muted text-right">12:09</td>
                                            <td class="font-w600 text-success text-right">+ $23</td>
                                        </tr>
                                        <tr>
                                            <td class="font-w600"><a href="javascript:void(0)">HTML Template</a></td>
                                            <td class="hidden-xs text-muted text-right">11:39</td>
                                            <td class="font-w600 text-success text-right">+ $16</td>
                                        </tr>
                                        <tr>
                                            <td class="font-w600"><a href="javascript:void(0)">Admin Template</a></td>
                                            <td class="hidden-xs text-muted text-right">11:33</td>
                                            <td class="font-w600 text-success text-right">+ $23</td>
                                        </tr>
                                        <tr>
                                            <td class="font-w600"><a href="javascript:void(0)">Admin Template</a></td>
                                            <td class="hidden-xs text-muted text-right">11:18</td>
                                            <td class="font-w600 text-success text-right">+ $23</td>
                                        </tr>
                                        <tr>
                                            <td class="font-w600"><a href="javascript:void(0)">WP Theme</a></td>
                                            <td class="hidden-xs text-muted text-right">09:49</td>
                                            <td class="font-w600 text-success text-right">+ $50</td>
                                        </tr>
                                        <tr>
                                            <td class="font-w600"><a href="javascript:void(0)">HTML Template</a></td>
                                            <td class="hidden-xs text-muted text-right">09:35</td>
                                            <td class="font-w600 text-success text-right">+ $16</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END Slick slider -->
                    </div>
                </div>
            </div>
            <!-- END Latest Sales Widget -->
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <!-- News -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title"> Updates</h3>
                </div>
                <div class="block-content bg-gray-lighter">
                    <!-- Slick slider (.js-slider class is initialized in App() -> uiHelperSlick()) -->
                    <!-- For more info and examples you can check out http://kenwheeler.github.io/slick/ -->
                    <div class="js-slider remove-margin-b" data-slider-autoplay="true" data-slider-autoplay-speed="4000">
                        <div>
                            <blockquote>
                                <p>Be yourself; everyone else is already taken.</p>
                                <footer>Oscar Wilde</footer>
                            </blockquote>
                        </div>
                        <div>
                            <blockquote>
                                <p>Don't cry because it's over, smile because it happened.</p>
                                <footer>Dr. Seuss</footer>
                            </blockquote>
                        </div>
                        <div>
                            <blockquote>
                                <p>Strive not to be a success, but rather to be of value.</p>
                                <footer>Albert Einstein</footer>
                            </blockquote>
                        </div>
                        <div>
                            <blockquote>
                                <p>Every child is an artist. The problem is how to remain an artist once he grows up.</p>
                                <footer>Pablo Picasso</footer>
                            </blockquote>
                        </div>
                        <div>
                            <blockquote>
                                <p>There is only one way to avoid criticism: do nothing, say nothing, and be nothing.</p>
                                <footer>Aristotle</footer>
                            </blockquote>
                        </div>
                    </div>
                    <!-- END Slick slider -->
                </div>
                <div class="block-content">
                    <ul class="list list-timeline pull-t">
                        <!-- Twitter Notification -->
                        <li>
                            <div class="list-timeline-time">12 hrs ago</div>
                            <i class="fa fa-twitter list-timeline-icon bg-info"></i>
                            <div class="list-timeline-content">
                                <p class="font-w600">+ 1150 Followers</p>
                                <p class="font-s13">You’re getting more and more followers, keep it up!</p>
                            </div>
                        </li>
                        <!-- END Twitter Notification -->

                        <!-- Generic Notification -->
                        <li>
                            <div class="list-timeline-time">4 hrs ago</div>
                            <i class="fa fa-briefcase list-timeline-icon bg-city"></i>
                            <div class="list-timeline-content">
                                <p class="font-w600">+ 3 New Products were added!</p>
                                <p class="font-s13">Congratulations!</p>
                            </div>
                        </li>
                        <!-- END Generic Notification -->

                        <!-- System Notification -->
                        <li>
                            <div class="list-timeline-time">1 day ago</div>
                            <i class="fa fa-check list-timeline-icon bg-success"></i>
                            <div class="list-timeline-content">
                                <p class="font-w600">Database backup completed!</p>
                                <p class="font-s13">Download the <a href="javascript:void(0)">latest backup</a>.</p>
                            </div>
                        </li>
                        <!-- END System Notification -->

                        <!-- Facebook Notification -->
                        <li>
                            <div class="list-timeline-time">3 hrs ago</div>
                            <i class="fa fa-facebook list-timeline-icon bg-default"></i>
                            <div class="list-timeline-content">
                                <p class="font-w600">+ 290 Page Likes</p>
                                <p class="font-s13">This is great, keep it up!</p>
                            </div>
                        </li>
                        <!-- END Facebook Notification -->

                        <!-- Social Notification -->
                        <li>
                            <div class="list-timeline-time">2 days ago</div>
                            <i class="fa fa-user-plus list-timeline-icon bg-modern"></i>
                            <div class="list-timeline-content">
                                <p class="font-w600">+ 3 Friend Requests</p>
                                <ul class="nav-users push-10-t push">
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
                                            <i class="fa fa-circle text-warning"></i> <?php $one->get_name('female'); echo "\n"; ?>
                                            <div class="font-w400 text-muted"><small>Photographer</small></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="base_pages_profile.php">
                                            <?php $one->get_avatar('', 'male'); ?>
                                            <i class="fa fa-circle text-danger"></i> <?php $one->get_name('male'); echo "\n"; ?>
                                            <div class="font-w400 text-muted"><small>UI Designer</small></div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- END Social Notification -->

                        <!-- System Notification -->
                        <li class="push-5">
                            <div class="list-timeline-time">1 week ago</div>
                            <i class="fa fa-cog list-timeline-icon bg-primary-dark"></i>
                            <div class="list-timeline-content">
                                <p class="font-w600">System updated to v2.02</p>
                                <p class="font-s13">Check the complete changelog at the <a href="javascript:void(0)">activity page</a>.</p>
                            </div>
                        </li>
                        <!-- END System Notification -->
                    </ul>
                </div>
            </div>
            <!-- END News -->
        </div>
        <div class="col-lg-4">
            <!-- Content Grid -->
            <div class="content-grid">
                <div class="row">
                    <div class="col-xs-12">
                        <!-- Author of the Month -->
                        <a class="block block-link-hover2" href="base_pages_profile.php">
                            <div class="block-header">
                                <h3 class="block-title text-center">Author of the Month</h3>
                            </div>
                            <div class="block-content block-content-full text-center bg-image" style="background-image: url('<?php echo $one->assets_folder; ?>/img/photos/photo2.jpg');">
                                <div>
                                    <?php $one->get_avatar(1, '', 96, true); ?>
                                </div>
                                <div class="h5 text-white push-15-t push-5"><?php $one->get_name('female'); ?></div>
                                <div class="h5 text-white-op">Web Developer</div>
                            </div>
                            <div class="block-content">
                                <div class="row items-push text-center">
                                    <div class="col-xs-6">
                                        <div class="push-5"><i class="si si-briefcase fa-2x"></i></div>
                                        <div class="h5 font-w300 text-muted">9 Projects</div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="push-5"><i class="si si-camera fa-2x"></i></div>
                                        <div class="h5 font-w300 text-muted">74 Photos</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!-- END Author of the Month -->

                        <!-- Mini Stats -->
                        <a class="block block-link-hover3" href="javascript:void(0)">
                            <table class="block-table text-center">
                                <tbody>
                                    <tr>
                                        <td style="width: 50%;">
                                            <div class="push-30 push-30-t">
                                                <i class="si si-graph fa-3x text-primary"></i>
                                            </div>
                                        </td>
                                        <td class="bg-gray-lighter" style="width: 50%;">
                                            <div class="h1 font-w700"><span class="h2 text-muted">+</span> 78</div>
                                            <div class="h5 text-muted text-uppercase push-5-t">Sales</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </a>
                        <a class="block block-link-hover3" href="javascript:void(0)">
                            <table class="block-table text-center">
                                <tbody>
                                    <tr>
                                        <td style="width: 50%;">
                                            <div class="push-30 push-30-t">
                                                <i class="si si-social-dribbble fa-3x text-smooth"></i>
                                            </div>
                                        </td>
                                        <td class="bg-gray-lighter" style="width: 50%;">
                                            <div class="h1 font-w700"><span class="h2 text-muted">+</span> 69</div>
                                            <div class="h5 text-muted text-uppercase push-5-t">Likes</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </a>
                        <a class="block block-link-hover3" href="javascript:void(0)">
                            <table class="block-table text-center">
                                <tbody>
                                    <tr>
                                        <td style="width: 50%;">
                                            <div class="push-30 push-30-t">
                                                <i class="si si-social-youtube fa-3x text-city"></i>
                                            </div>
                                        </td>
                                        <td class="bg-gray-lighter" style="width: 50%;">
                                            <div class="h1 font-w700"><span class="h2 text-muted">+</span> 88</div>
                                            <div class="h5 text-muted text-uppercase push-5-t">Subs</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </a>
                        <a class="block block-link-hover3" href="javascript:void(0)">
                            <table class="block-table text-center">
                                <tbody>
                                    <tr>
                                        <td style="width: 50%;">
                                            <div class="push-30 push-30-t">
                                                <i class="si si-users fa-3x text-primary-dark"></i>
                                            </div>
                                        </td>
                                        <td class="bg-gray-lighter" style="width: 50%;">
                                            <div class="h1 font-w700"><span class="h2 text-muted">+</span> 96</div>
                                            <div class="h5 text-muted text-uppercase push-5-t"> Followers</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </a>
                        <!-- END Mini Stats -->
                    </div>
                </div>
            </div>
            <!-- END Content Grid -->
        </div>
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>

<!-- Page Plugins -->
<script src="<?php echo $one->assets_folder; ?>/js/plugins/slick/slick.min.js"></script>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/chartjs/Chart.min.js"></script>

<!-- Page JS Code -->
<script src="<?php echo $one->assets_folder; ?>/js/pages/base_pages_dashboard.js"></script>
<script>
    $(function(){
        // Init page helpers (Slick Slider plugin)
        App.initHelpers('slick');
    });
</script>

<?php require 'inc/views/template_footer_end.php'; ?>