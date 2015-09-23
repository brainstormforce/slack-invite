<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">
                Charts <small>Showcase your important data in a meaningful and empowering way.</small>
            </h1>
        </div>
        <div class="col-sm-5 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>Components</li>
                <li><a class="link-effect" href="">Charts</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content content-narrow">
    <!-- Chart.js Charts (initialized in js/pages/base_comp_charts.js), for more examples you can check out http://www.chartjs.org/docs/ -->
    <h2 class="content-heading">Chart.js</h2>
    <div class="row">
        <div class="col-lg-6">
            <!-- Lines Chart -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Lines</h3>
                </div>
                <div class="block-content block-content-full text-center">
                    <!-- Lines Chart Container -->
                    <div style="height: 330px;"><canvas class="js-chartjs-lines"></canvas></div>
                </div>
            </div>
            <!-- END Lines Chart -->
        </div>
        <div class="col-lg-6">
            <!-- Bars Chart -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Bars</h3>
                </div>
                <div class="block-content block-content-full text-center">
                    <!-- Bars Chart Container -->
                    <div style="height: 330px;"><canvas class="js-chartjs-bars"></canvas></div>
                </div>
            </div>
            <!-- END Bars Chart -->
        </div>
        <div class="col-lg-6">
            <!-- Radar Chart -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Radar</h3>
                </div>
                <div class="block-content block-content-full text-center">
                    <!-- Radar Chart Container -->
                    <div style="height: 330px;"><canvas class="js-chartjs-radar"></canvas></div>
                </div>
            </div>
            <!-- END Radar Chart -->
        </div>
        <div class="col-lg-6">
            <!-- Polar Area Chart -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Polar Area</h3>
                </div>
                <div class="block-content block-content-full text-center">
                    <!-- Polar Area Chart Container -->
                    <div style="height: 330px;"><canvas class="js-chartjs-polar"></canvas></div>
                </div>
            </div>
            <!-- END Polar Area Chart -->
        </div>
        <div class="col-lg-6">
            <!-- Pie Chart -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Pie</h3>
                </div>
                <div class="block-content block-content-full text-center">
                    <!-- Pie Chart Container -->
                    <div style="height: 330px;"><canvas class="js-chartjs-pie"></canvas></div>
                </div>
            </div>
            <!-- END Pie Chart -->
        </div>
        <div class="col-lg-6">
            <!-- Donut Chart -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Donut</h3>
                </div>
                <div class="block-content block-content-full text-center">
                    <!-- Donut Chart Container -->
                    <div style="height: 330px;"><canvas class="js-chartjs-donut"></canvas></div>
                </div>
            </div>
            <!-- END Donut Chart -->
        </div>
    </div>
    <!-- END Chart.js Charts -->

    <!-- Jquery Sparkline (initialized in js/pages/base_comp_charts.js), for more examples you can check out http://omnipotent.net/jquery.sparkline/#s-about -->
    <h2 class="content-heading">Sparkline</h2>
    <div class="row">
        <div class="col-lg-6">
            <!-- Bars -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Bars</h3>
                </div>
                <div class="block-content">
                    <div class="row items-push-2x text-center">
                        <div class="col-xs-6 col-sm-4">
                            <!-- Sparkline Bar 1 Container -->
                            <span class="js-slc-bar1">4,3,2,4,5,7,8,4</span>
                            <div class="push-10-t"><i class="fa fa-ticket text-muted"></i> Tickets</div>
                        </div>
                        <div class="col-xs-6 col-sm-4">
                            <!-- Sparkline Bar 2 Container -->
                            <span class="js-slc-bar2">980,1210,1350,900,500,700,1500,1485</span>
                            <div class="push-10-t"><i class="fa fa-line-chart text-muted"></i> Earnings</div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <!-- Sparkline Bar 3 Container -->
                            <span class="js-slc-bar3">8,11,9,8,7,5,10,12</span>
                            <div class="push-10-t"><i class="fa fa-suitcase text-muted"></i> Sales</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Bars -->
        </div>
        <div class="col-lg-6">
            <!-- Lines -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Lines</h3>
                </div>
                <div class="block-content">
                    <div class="row items-push-2x text-center">
                        <div class="col-xs-6 col-sm-4">
                            <!-- Sparkline Line 1 Container -->
                            <span class="js-slc-line1">4,3,2,4,5,7,8,4</span>
                            <div class="push-10-t"><i class="fa fa-ticket text-muted"></i> Tickets</div>
                        </div>
                        <div class="col-xs-6 col-sm-4">
                            <!-- Sparkline Line 2 Container -->
                            <span class="js-slc-line2">980,1210,1350,900,500,700,1500,1485</span>
                            <div class="push-10-t"><i class="fa fa-line-chart text-muted"></i> Earnings</div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <!-- Sparkline Line 3 Container -->
                            <span class="js-slc-line3">8,11,9,8,7,5,10,12</span>
                            <div class="push-10-t"><i class="fa fa-suitcase text-muted"></i> Sales</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Lines -->
        </div>
        <div class="col-lg-6">
            <!-- Pie -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Pie</h3>
                </div>
                <div class="block-content">
                    <div class="row items-push-2x text-center">
                        <div class="col-xs-6 col-sm-4">
                            <!-- Sparkline Pie 1 Container -->
                            <span class="js-slc-pie1">4,3,2,4</span>
                            <div class="push-10-t"><i class="fa fa-ticket text-muted"></i> Tickets</div>
                        </div>
                        <div class="col-xs-6 col-sm-4">
                            <!-- Sparkline Pie 2 Container -->
                            <span class="js-slc-pie2">980,1210,1350,900</span>
                            <div class="push-10-t"><i class="fa fa-line-chart text-muted"></i> Earnings</div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <!-- Sparkline Pie 3 Container -->
                            <span class="js-slc-pie3">8,11,9,8</span>
                            <div class="push-10-t"><i class="fa fa-suitcase text-muted"></i> Sales</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Pie -->
        </div>
        <div class="col-lg-6">
            <!-- Tristate -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Tristate</h3>
                </div>
                <div class="block-content">
                    <div class="row items-push-2x text-center">
                        <div class="col-xs-6 col-sm-4">
                            <!-- Sparkline Tristate 1 Container -->
                            <span class="js-slc-tristate1">-1,1,0,1,1,-1,0,1</span>
                        </div>
                        <div class="col-xs-6 col-sm-4">
                            <!-- Sparkline Tristate 2 Container -->
                            <span class="js-slc-tristate2">1,1,0,1,-1,-1,1,-1</span>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <!-- Sparkline Tristate 3 Container -->
                            <span class="js-slc-tristate3">1,-1,0,-1,-1,0,0,1</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Tristate -->
        </div>
    </div>
    <!-- END Sparkline Charts -->

    <!-- Easy Pie Chart (.js-pie-chart class is initialized in App() -> uiHelperEasyPieChart()) -->
    <!-- For more info and examples you can check out http://rendro.github.io/easy-pie-chart/ -->
    <!-- Randomize Values Buttons functionality initialized in js/pages/base_comp_charts.js -->
    <h2 class="content-heading">Easy Pie Chart</h2>
    <div class="row">
        <div class="col-lg-6">
            <!-- Simple -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button class="js-pie-randomize" type="button" data-toggle="tooltip" title="Randomize"><i class="fa fa-random"></i></button>
                        </li>
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Simple</h3>
                </div>
                <div class="block-content">
                    <div class="row items-push-2x text-center">
                        <div class="col-xs-6 col-sm-4">
                            <!-- Pie Chart Container -->
                            <div class="js-pie-chart pie-chart" data-percent="80" data-line-width="3" data-size="100" data-bar-color="#abe37d" data-track-color="#eeeeee" data-scale-color="#dddddd">
                                <span>8 <br><small class="text-muted">/100</small></span>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4">
                            <!-- Pie Chart Container -->
                            <div class="js-pie-chart pie-chart" data-percent="45" data-line-width="3" data-size="100" data-bar-color="#fadb7d" data-track-color="#eeeeee" data-scale-color="#dddddd">
                                <span>45%</span>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4">
                            <!-- Pie Chart Container -->
                            <div class="js-pie-chart pie-chart" data-percent="25" data-line-width="3" data-size="100" data-bar-color="#faad7d" data-track-color="#eeeeee" data-scale-color="#dddddd">
                                <span>25.00 <br><small class="text-muted">/100mb</small></span>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4">
                            <!-- Pie Chart Container -->
                            <div class="js-pie-chart pie-chart" data-percent="80" data-line-width="3" data-size="100" data-bar-color="#abe37d" data-track-color="#eeeeee">
                                <span>8 <br><small class="text-muted">/100</small></span>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4">
                            <!-- Pie Chart Container -->
                            <div class="js-pie-chart pie-chart" data-percent="45" data-line-width="3" data-size="100" data-bar-color="#fadb7d" data-track-color="#eeeeee">
                                <span>45%</span>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4">
                            <!-- Pie Chart Container -->
                            <div class="js-pie-chart pie-chart" data-percent="25" data-line-width="3" data-size="100" data-bar-color="#faad7d" data-track-color="#eeeeee">
                                <span>25.00 <br><small class="text-muted">/100mb</small></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Simple -->
        </div>
        <div class="col-lg-6">
            <!-- Avatar -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button class="js-pie-randomize" type="button" data-toggle="tooltip" title="Randomize"><i class="fa fa-random"></i></button>
                        </li>
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Avatar</h3>
                </div>
                <div class="block-content">
                    <div class="row items-push-2x text-center">
                        <div class="col-xs-6 col-sm-4">
                            <!-- Pie Chart Container -->
                            <div class="js-pie-chart pie-chart" data-percent="80" data-line-width="3" data-size="100" data-bar-color="#abe37d" data-track-color="#eeeeee" data-scale-color="#dddddd">
                                <span>
                                    <?php $one->get_avatar(); ?>
                                </span>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4">
                            <!-- Pie Chart Container -->
                            <div class="js-pie-chart pie-chart" data-percent="45" data-line-width="3" data-size="100" data-bar-color="#fadb7d" data-track-color="#eeeeee" data-scale-color="#dddddd">
                                <span>
                                    <?php $one->get_avatar(); ?>
                                </span>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4">
                            <!-- Pie Chart Container -->
                            <div class="js-pie-chart pie-chart" data-percent="25" data-line-width="3" data-size="100" data-bar-color="#faad7d" data-track-color="#eeeeee" data-scale-color="#dddddd">
                                <span>
                                    <?php $one->get_avatar(); ?>
                                </span>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4">
                            <!-- Pie Chart Container -->
                            <div class="js-pie-chart pie-chart" data-percent="80" data-line-width="3" data-size="100" data-bar-color="#abe37d" data-track-color="#eeeeee">
                                <span>
                                    <?php $one->get_avatar(); ?>
                                </span>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4">
                            <!-- Pie Chart Container -->
                            <div class="js-pie-chart pie-chart" data-percent="45" data-line-width="3" data-size="100" data-bar-color="#fadb7d" data-track-color="#eeeeee">
                                <span>
                                    <?php $one->get_avatar(); ?>
                                </span>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4">
                            <!-- Pie Chart Container -->
                            <div class="js-pie-chart pie-chart" data-percent="25" data-line-width="3" data-size="100" data-bar-color="#faad7d" data-track-color="#eeeeee">
                                <span>
                                    <?php $one->get_avatar(); ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Avatar -->
        </div>
    </div>
    <!-- END Easy Pie Chart -->

    <!-- Flot Charts (initialized in js/pages/base_comp_charts.js), for more examples you can check out http://www.flotcharts.org/flot/examples -->
    <h2 class="content-heading">Flot Charts</h2>
    <div class="row">
        <div class="col-lg-6">
            <!-- Lines Chart -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Lines</h3>
                </div>
                <div class="block-content block-content-full">
                    <!-- Lines Chart Container -->
                    <div class="js-flot-lines" style="height: 330px;"></div>
                </div>
            </div>
            <!-- END Lines Chart -->
        </div>
        <div class="col-lg-6">
            <!-- Stacked Chart -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Stacked</h3>
                </div>
                <div class="block-content block-content-full">
                    <!-- Stacked Chart Container -->
                    <div class="js-flot-stacked" style="height: 330px;"></div>
                </div>
            </div>
            <!-- END Stacked Chart -->
        </div>
        <div class="col-lg-12">
            <!-- Live Chart -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <span class="js-flot-live-info text-info font-w700"></span>
                        </li>
                        <li>
                            <span><i class="fa fa-refresh fa-spin text-muted"></i></span>
                        </li>
                    </ul>
                    <h3 class="block-title">Live</h3>
                </div>
                <div class="block-content block-content-full">
                    <!-- Live Chart Container -->
                    <div class="js-flot-live" style="height: 360px;"></div>
                </div>
            </div>
            <!-- END Live Chart -->
        </div>
        <div class="col-lg-6">
            <!-- Bars Chart -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Bars</h3>
                </div>
                <div class="block-content block-content-full">
                    <!-- Bars Chart Container -->
                    <div class="js-flot-bars" style="height: 330px;"></div>
                </div>
            </div>
            <!-- END Bars Chart -->
        </div>
        <div class="col-lg-6">
            <!-- Pie Chart -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Pie</h3>
                </div>
                <div class="block-content block-content-full">
                    <!-- Pie Chart Container -->
                    <div class="js-flot-pie" style="height: 330px;"></div>
                </div>
            </div>
            <!-- END Pie Chart -->
        </div>
    </div>
    <!-- END Flot Charts -->
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>

<!-- Page JS Plugins -->
<script src="<?php echo $one->assets_folder; ?>/js/plugins/sparkline/jquery.sparkline.min.js"></script>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/chartjs/Chart.min.js"></script>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/flot/jquery.flot.min.js"></script>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/flot/jquery.flot.pie.min.js"></script>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/flot/jquery.flot.stack.min.js"></script>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/flot/jquery.flot.resize.min.js"></script>

<!-- Page JS Code -->
<script src="<?php echo $one->assets_folder; ?>/js/pages/base_comp_charts.js"></script>
<script>
    $(function(){
        // Init page helpers (Easy Pie Chart plugin)
        App.initHelpers('easy-pie-chart');
    });
</script>

<?php require 'inc/views/template_footer_end.php'; ?>