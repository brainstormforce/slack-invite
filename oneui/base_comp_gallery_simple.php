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
                Simple Gallery <small>Clean and easy way to showcase your images. Powered by Magnific plugin.</small>
            </h1>
        </div>
        <div class="col-sm-4 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>Components</li>
                <li>Gallery</li>
                <li><a class="link-effect" href="">Simple</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content">
    <!-- Gallery (.js-gallery class is initialized in App() -> uiHelperMagnific()) -->
    <!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
    <div class="row items-push js-gallery">
        <?php for($i = 2; $i < 18; $i++) { ?>
        <div class="col-sm-6 col-md-4 col-lg-3 animated fadeIn">
            <a class="img-link img-thumb" href="<?php echo $one->assets_folder; ?>/img/photos/photo<?php echo $i; ?>@2x.jpg">
                <?php $one->get_photo($i, false, 'img-responsive'); ?>
            </a>
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