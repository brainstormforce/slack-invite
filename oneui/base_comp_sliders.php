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
                Sliders <small>Draggable with mouse and touch, flexible and mobile friendly content sliders.</small>
            </h1>
        </div>
        <div class="col-sm-5 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>Components</li>
                <li><a class="link-effect" href="">Sliders</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content">
    <!-- Slick slider (.js-slider class is initialized in App() -> uiHelperSlick()) -->
    <!-- For more info and examples you can check out http://kenwheeler.github.io/slick/ -->
    <!--
        Extra Classes:

        'slick-nav-hover'    for navigation buttons visible on hover
        'slick-nav-white'    for white navigation buttons
    -->

    <!-- Content Sliders -->
    <h2 class="content-heading">Content Sliders</h2>
    <div class="row items-push">
        <div class="col-sm-4">
            <!-- Avatars -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Avatars</h3>
                </div>
                <div class="block-content">
                    <!-- Slider with Avatars -->
                    <div class="js-slider text-center" data-slider-dots="true" data-slider-arrows="true">
                        <div>
                            <?php $one->get_avatar('6'); ?>
                            <div class="push-10-t font-w600"><?php $one->get_name('female'); ?></div>
                            <div class="font-s13 text-muted">Web Designer</div>
                        </div>
                        <div>
                            <?php $one->get_avatar('5'); ?>
                            <div class="push-10-t font-w600"><?php $one->get_name('female'); ?></div>
                            <div class="font-s13 text-muted">Font Designer</div>
                        </div>
                        <div>
                            <?php $one->get_avatar('4'); ?>
                            <div class="push-10-t font-w600"><?php $one->get_name('female'); ?></div>
                            <div class="font-s13 text-muted">Artist</div>
                        </div>
                        <div>
                            <?php $one->get_avatar('3'); ?>
                            <div class="push-10-t font-w600"><?php $one->get_name('female'); ?></div>
                            <div class="font-s13 text-muted">Graphic Designer</div>
                        </div>
                        <div>
                            <?php $one->get_avatar('2'); ?>
                            <div class="push-10-t font-w600"><?php $one->get_name('female'); ?></div>
                            <div class="font-s13 text-muted">Photographer</div>
                        </div>
                        <div>
                            <?php $one->get_avatar('1'); ?>
                            <div class="push-10-t font-w600"><?php $one->get_name('female'); ?></div>
                            <div class="font-s13 text-muted">Web Developer</div>
                        </div>
                    </div>
                    <!-- END Slider with Avatars -->
                </div>
            </div>
            <!-- END Avatars -->
        </div>
        <div class="col-sm-8">
            <!-- Multiple Avatars -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Multiple Avatars</h3>
                </div>
                <div class="block-content">
                    <!-- Slider with Multiple Slides/Avatars -->
                    <div class="js-slider text-center" data-slider-autoplay="true" data-slider-dots="true" data-slider-arrows="true" data-slider-num="3">
                        <div>
                            <?php $one->get_avatar('1'); ?>
                            <div class="push-10-t font-w600"><?php $one->get_name('female'); ?></div>
                            <div class="font-s13 text-muted">Web Designer</div>
                        </div>
                        <div>
                            <?php $one->get_avatar('2'); ?>
                            <div class="push-10-t font-w600"><?php $one->get_name('female'); ?></div>
                            <div class="font-s13 text-muted">Font Designer</div>
                        </div>
                        <div>
                            <?php $one->get_avatar('3'); ?>
                            <div class="push-10-t font-w600"><?php $one->get_name('female'); ?></div>
                            <div class="font-s13 text-muted">Artist</div>
                        </div>
                        <div>
                            <?php $one->get_avatar('4'); ?>
                            <div class="push-10-t font-w600"><?php $one->get_name('female'); ?></div>
                            <div class="font-s13 text-muted">Graphic Designer</div>
                        </div>
                        <div>
                            <?php $one->get_avatar('5'); ?>
                            <div class="push-10-t font-w600"><?php $one->get_name('female'); ?></div>
                            <div class="font-s13 text-muted">Photographer</div>
                        </div>
                        <div>
                            <?php $one->get_avatar('6'); ?>
                            <div class="push-10-t font-w600"><?php $one->get_name('female'); ?></div>
                            <div class="font-s13 text-muted">Web Developer</div>
                        </div>
                    </div>
                    <!-- END Slider with Multiple Slides/Avatars -->
                </div>
            </div>
            <!-- END Multiple Avatars -->
        </div>
    </div>
    <div class="row items-push">
        <div class="col-sm-4">
            <!-- Tiles Slider 1 -->
            <div class="js-slider" data-slider-dots="true">
                <div>
                    <div class="block text-center remove-margin-b">
                        <div class="block-content block-content-full border-b">
                            <i class="si si-social-twitter fa-5x text-info"></i>
                        </div>
                        <div class="block-content block-content-full block-content-mini bg-gray-lighter">
                            <strong>2600</strong> Followers
                        </div>
                    </div>
                </div>
                <div>
                    <div class="block text-center remove-margin-b">
                        <div class="block-content block-content-full border-b">
                            <i class="si si-social-facebook fa-5x text-primary"></i>
                        </div>
                        <div class="block-content block-content-full block-content-mini bg-gray-lighter">
                            <strong>6820</strong> Likes
                        </div>
                    </div>
                </div>
                <div>
                    <div class="block text-center remove-margin-b">
                        <div class="block-content block-content-full border-b">
                            <i class="si si-social-dropbox fa-5x text-primary-dark"></i>
                        </div>
                        <div class="block-content block-content-full block-content-mini bg-gray-lighter">
                            <strong>0.8</strong>/1 TB
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Tiles Slider 1 -->
        </div>
        <div class="col-sm-4">
            <!-- Tiles Slider 2 -->
            <div class="js-slider slick-nav-hover" data-slider-dots="true" data-slider-arrows="true">
                <div>
                    <div class="block text-center remove-margin-b">
                        <div class="block-content block-content-full bg-gray-lighter border-b">
                            <div class="h1 font-w700"><span class="h2 text-muted">$</span> 1.250,00</div>
                            <div class="h5 text-muted text-uppercase push-5-t">Earnings</div>
                        </div>
                        <div class="block-content block-content-full block-content-mini">
                            <i class="fa fa-arrow-up text-success"></i> +50% This week
                        </div>
                    </div>
                </div>
                <div>
                    <div class="block text-center remove-margin-b">
                        <div class="block-content block-content-full bg-gray-lighter border-b">
                            <div class="h1 font-w700">21.000</div>
                            <div class="h5 text-muted text-uppercase push-5-t">Downloads</div>
                        </div>
                        <div class="block-content block-content-full block-content-mini">
                            <i class="fa fa-arrow-down text-danger"></i> -5% This week
                        </div>
                    </div>
                </div>
                <div>
                    <div class="block text-center remove-margin-b">
                        <div class="block-content block-content-full bg-gray-lighter border-b">
                            <div class="h1 font-w700"><span class="h2 text-muted">+</span> 180</div>
                            <div class="h5 text-muted text-uppercase push-5-t">Sales</div>
                        </div>
                        <div class="block-content block-content-full block-content-mini">
                            <i class="fa fa-chevron-up text-success"></i> +5% This week
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Tiles Slider 2 -->
        </div>
        <div class="col-sm-4">
            <!-- Tiles Slider 3 -->
            <div class="js-slider" data-slider-dots="true" data-slider-autoplay="true">
                <div>
                    <div class="block text-center remove-margin-b">
                        <div class="block-content block-content-full">
                            <div class="h1 font-w700">28.600</div>
                            <div class="h5 text-muted text-uppercase push-5-t">Downloads</div>
                        </div>
                        <div class="block-content block-content-full block-content-mini bg-danger text-white">
                            <i class="fa fa-arrow-down text-black-op"></i> -15% This week
                        </div>
                    </div>
                </div>
                <div>
                    <div class="block text-center remove-margin-b">
                        <div class="block-content block-content-full">
                            <div class="h1 font-w700"><span class="h2 text-muted">+</span> 245</div>
                            <div class="h5 text-muted text-uppercase push-5-t">Sales</div>
                        </div>
                        <div class="block-content block-content-full block-content-mini bg-warning text-white">
                            <i class="fa fa-chevron-up text-black-op"></i> +15% This week
                        </div>
                    </div>
                </div>
                <div>
                    <div class="block text-center remove-margin-b">
                        <div class="block-content block-content-full">
                            <div class="h1 font-w700"><span class="h2 text-muted">+</span> 750</div>
                            <div class="h5 text-muted text-uppercase push-5-t">Users</div>
                        </div>
                        <div class="block-content block-content-full block-content-mini bg-primary text-white">
                            <i class="fa fa-chevron-down text-black-op"></i> -2% This week
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Tiles Slider 3 -->
        </div>
    </div>
    <!-- END Content Sliders -->

    <!-- Image Sliders -->
    <h2 class="content-heading">Image Sliders</h2>
    <div class="row">
        <div class="col-sm-6 col-lg-4">
            <!-- Dots -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Dots</h3>
                </div>
                <div class="block-content">
                    <!-- Slider with dots -->
                    <div class="js-slider" data-slider-dots="true">
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
                    <!-- END Slider with dots -->
                </div>
            </div>
            <!-- END Dots -->
        </div>
        <div class="col-sm-6 col-lg-4">
            <!-- Dots and Arrows -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Dots &amp; Hover Arrows</h3>
                </div>
                <div class="block-content">
                    <!-- Slider with dots and hover arrows -->
                    <div class="js-slider slick-nav-white slick-nav-hover" data-slider-dots="true" data-slider-arrows="true">
                        <div>
                            <?php $one->get_photo(7, false, 'img-responsive'); ?>
                        </div>
                        <div>
                            <?php $one->get_photo(8, false, 'img-responsive'); ?>
                        </div>
                        <div>
                            <?php $one->get_photo(9, false, 'img-responsive'); ?>
                        </div>
                    </div>
                    <!-- END Slider with dots and hover arrows -->
                </div>
            </div>
            <!-- END Dots and Arrows -->
        </div>
        <div class="col-sm-12 col-lg-4">
            <!-- Slider Autoplay -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Autoplay</h3>
                </div>
                <div class="block-content">
                    <!-- Slider with autoplay -->
                    <div class="js-slider" data-slider-dots="true" data-slider-autoplay="true" data-slider-autoplay-speed="3000">
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
                    <!-- END Slider with autoplay -->
                </div>
            </div>
            <!-- END Slider Autoplay -->
        </div>
    </div>
    <!-- END Image Sliders -->
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>

<!-- Page Plugins -->
<script src="<?php echo $one->assets_folder; ?>/js/plugins/slick/slick.min.js"></script>

<!-- Page JS Code -->
<script>
    $(function(){
        // Init page helpers (Slick Slider plugin)
        App.initHelpers('slick');
    });
</script>

<?php require 'inc/views/template_footer_end.php'; ?>