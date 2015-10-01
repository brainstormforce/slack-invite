<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">
                Maps <small>Seamlessly Google Maps integration that will enhance your web application.</small>
            </h1>
        </div>
        <div class="col-sm-5 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>Components</li>
                <li><a class="link-effect" href="">Maps</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content content-narrow">
    <!-- Maps and Search functionality is initialized in js/pages/base_comp_maps.js, for more examples you can check out https://hpneo.github.io/gmaps/ -->
    <!-- Maps Row -->
    <div class="row">
        <div class="col-lg-12">
            <!-- Search Map -->
            <div class="block">
                <div class="block-content block-content-mini">
                    <!-- Search Form -->
                    <form class="js-form-search push-10" action="base_comp_maps.php" method="post">
                        <div class="input-group input-group-lg">
                            <input class="js-search-address form-control" type="text" placeholder="Search.. (eg: San Fransisco)">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                    <!-- END Search Form -->
                </div>
                <!-- Search Map Container -->
                <div id="js-map-search" style="height: 500px;"></div>
            </div>
            <!-- END Search Map -->
        </div>
        <div class="col-lg-6">
            <!-- Satellite Map -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Satellite Map</h3>
                </div>
                <!-- Satellite Map Container -->
                <div id="js-map-sat" style="height: 350px;"></div>
            </div>
            <!-- END Satellite Map -->
        </div>
        <div class="col-lg-6">
            <!-- Terrain Map -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Terrain Map</h3>
                </div>
                <!-- Terrain Map Container -->
                <div id="js-map-ter" style="height: 350px;"></div>
            </div>
            <!-- END Terrain Map -->
        </div>
        <div class="col-lg-6">
            <!-- Overlay Map -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Overlay Map</h3>
                </div>
                <!-- Overlay Map Container -->
                <div id="js-map-overlay" style="height: 350px;"></div>
            </div>
            <!-- END Overlay Map -->
        </div>
        <div class="col-lg-6">
            <!-- Map Markers Map -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Map Markers Map</h3>
                </div>
                <!-- Markers Map Container -->
                <div id="js-map-markers" style="height: 350px;"></div>
            </div>
            <!-- END Map Markers Map -->
        </div>
        <div class="col-lg-6">
            <!-- Street Map -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Street Map</h3>
                </div>
                <!-- Street Map Container -->
                <div id="js-map-street" style="height: 350px;"></div>
            </div>
            <!-- END Street Map -->
        </div>
        <div class="col-lg-6">
            <!-- Geolocation Map -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Geolocation Map</h3>
                </div>
                <!-- Geolocation Map Container -->
                <div id="js-map-geo" style="height: 350px;"></div>
            </div>
            <!-- END Geolocation Map -->
        </div>
    </div>
    <!-- END Maps Row -->
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>

<!-- Page JS Plugins -->
<script src="//maps.google.com/maps/api/js?sensor=true"></script>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/gmapsjs/gmaps.min.js"></script>

<!-- Page JS Code -->
<script src="<?php echo $one->assets_folder; ?>/js/pages/base_comp_maps.js"></script>

<?php require 'inc/views/template_footer_end.php'; ?>