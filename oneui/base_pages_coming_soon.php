<?php require 'inc/config.php'; ?>
<?php
// Specific Page Options
$one->body_bg = $one->assets_folder . '/img/photos/photo6@2x.jpg';
?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>

<!-- Coming Soon Content -->
<div class="content pulldown bg-black-op overflow-hidden animated fadeIn">
    <div class="row text-center push">
        <div class="col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3">
            <!-- Title -->
            <h1 class="text-white push-5"><?php echo $one->name; ?></h1>
            <h2 class="h5 text-white-op push-30">Stay tuned! We are working on it and it is coming soon!</h2>
            <!-- END Title -->

            <!-- Countdown -->
            <div class="push-50">
                <!-- Countdown.js (class is initialized in js/pages/base_pages_coming_soon.js), for more examples you can check out https://github.com/hilios/jQuery.countdown -->
                <div class="js-countdown"></div>
            </div>
            <!-- END Countdown -->

            <!-- Subscribe Form -->
            <form class="form-inline push-10" action="base_pages_coming_soon.php" method="post">
                <div class="form-group">
                    <label class="sr-only text-white" for="subscribe-email">Email address</label>
                    <input class="form-control" type="email" id="subscribe-email" name="subscribe-email" placeholder="Your Email..">
                </div>
                <div class="form-group">
                    <button class="btn btn-default" type="submit"><i class="fa fa-plus"></i> Subscribe</button>
                </div>
            </form>
            <small class="text-white-op">Don't worry, we hate spam.</small>
            <!-- END Subscribe Form -->
        </div>
    </div>
</div>
<!-- END Coming Soon Content -->

<?php require 'inc/views/template_footer_start.php'; ?>

<!-- Page JS Plugins -->
<script src="<?php echo $one->assets_folder; ?>/js/plugins/jquery-countdown/jquery.countdown.min.js"></script>

<!-- Page JS Code -->
<script src="<?php echo $one->assets_folder; ?>/js/pages/base_pages_coming_soon.js"></script>

<?php require 'inc/views/template_footer_end.php'; ?>