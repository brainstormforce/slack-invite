<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/magnific-popup/magnific-popup.min.css">

<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-8">
            <h1 class="page-heading">
                Advanced Gallery <small>More power over your galleries with custom animations and controls.</small>
            </h1>
        </div>
        <div class="col-sm-4 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>Components</li>
                <li>Gallery</li>
                <li><a class="link-effect" href="">Advanced</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content">
    <!-- Gallery (.js-gallery-advanced class is initialized in App() -> uiHelperMagnific()) -->
    <!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
    <div class="row items-push js-gallery-advanced">
        <?php for($i = 17; $i > 1; $i--) { ?>
        <div class="col-sm-6 col-md-4 col-lg-3 animated fadeIn">
            <div class="img-container fx-img-rotate-r">
                <?php $one->get_photo($i, false, 'img-responsive'); ?>
                <div class="img-options">
                    <div class="img-options-content">
                        <h3 class="font-w400 text-white push-5">Image Caption</h3>
                        <h4 class="h6 font-w400 text-white-op push-15">Some Extra Info</h4>
                        <a class="btn btn-sm btn-default img-lightbox" href="<?php echo $one->assets_folder; ?>/img/photos/photo<?php echo $i; ?>@2x.jpg">
                            <i class="fa fa-search-plus"></i> View
                        </a>
                        <div class="btn-group btn-group-sm">
                            <a class="btn btn-default" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a>
                            <a class="btn btn-default" href="javascript:void(0)"><i class="fa fa-times"></i> Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    <!-- END Gallery -->
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>

<!-- Page JS Plugins -->
<script src="<?php echo $one->assets_folder; ?>/js/plugins/magnific-popup/magnific-popup.min.js"></script>

<!-- Page JS Code -->
<script>
    $(function(){
        // Init page helpers (Magnific Popup plugin)
        App.initHelpers('magnific-popup');
    });
</script>

<?php require 'inc/views/template_footer_end.php'; ?>