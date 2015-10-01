<?php require 'inc/config.php'; require 'inc/frontend_config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/frontend_head.php'; ?>

<!-- Hero Content -->
<div class="bg-primary-dark">
    <section class="content content-full content-boxed">
        <!-- Section Content -->
        <div class="push-100-t push-50 text-center">
            <h1 class="h2 text-white push-10 visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">Get to know us.</h1>
            <h2 class="h5 text-white-op visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">Meet our passionate team, one at a time.</h2>
        </div>
        <!-- END Section Content -->
    </section>
</div>
<!-- END Hero Content -->

<!-- Hiring -->
<div class="bg-white">
    <section class="content content-full content-boxed">
        <!-- Section Content -->
        <div class="push-20-t push-20 text-center">
            <h3 class="h4 push-20 visibility-hidden" data-toggle="appear">Would you like to be part of our team?</h3>
            <a class="btn btn-rounded btn-noborder btn-lg btn-success visibility-hidden" data-toggle="appear" data-class="animated bounceIn" href="javascript:void(0)">We Are Hiring</a>
        </div>
        <!-- END Section Content -->
    </section>
</div>
<!-- END Hiring -->

<!-- Team -->
<div class="bg-gray-lighter">
    <section class="content content-boxed">
        <!-- Section Content -->
        <div class="push-50-t push-20">
            <div class="row items-push-2x">
                <div class="col-md-4 visibility-hidden" data-toggle="appear" data-class="animated zoomIn">
                    <div class="block">
                        <div class="block-header">
                            <ul class="block-options">
                                <li>
                                    <button type="button" data-toggle="tooltip" title="Dribbble"><i class="si si-social-dribbble"></i></button>
                                </li>
                                <li>
                                    <button type="button" data-toggle="tooltip" title="Twitter"><i class="si si-social-twitter"></i></button>
                                </li>
                                <li>
                                    <button type="button" data-toggle="tooltip" title="Facebook"><i class="si si-social-facebook"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title"><?php $one->get_name('male'); ?></h3>
                        </div>
                        <div class="block-content block-content-full text-center bg-image" style="background-image: url('<?php echo $one->assets_folder; ?>/img/photos/photo15.jpg');">
                            <?php $one->get_avatar('12', '', 96, true); ?>
                        </div>
                        <div class="block-content">
                            <?php $one->get_text('small'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 visibility-hidden" data-toggle="appear" data-class="animated zoomIn">
                    <div class="block">
                        <div class="block-header">
                            <ul class="block-options">
                                <li>
                                    <button type="button" data-toggle="tooltip" title="Dribbble"><i class="si si-social-dribbble"></i></button>
                                </li>
                                <li>
                                    <button type="button" data-toggle="tooltip" title="Twitter"><i class="si si-social-twitter"></i></button>
                                </li>
                                <li>
                                    <button type="button" data-toggle="tooltip" title="Facebook"><i class="si si-social-facebook"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title"><?php $one->get_name('female'); ?></h3>
                        </div>
                        <div class="block-content block-content-full text-center bg-image" style="background-image: url('<?php echo $one->assets_folder; ?>/img/photos/photo2.jpg');">
                            <?php $one->get_avatar('2', '', 96, true); ?>
                        </div>
                        <div class="block-content">
                            <?php $one->get_text('small'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 visibility-hidden" data-toggle="appear" data-class="animated zoomIn">
                    <div class="block">
                        <div class="block-header">
                            <ul class="block-options">
                                <li>
                                    <button type="button" data-toggle="tooltip" title="Dribbble"><i class="si si-social-dribbble"></i></button>
                                </li>
                                <li>
                                    <button type="button" data-toggle="tooltip" title="Twitter"><i class="si si-social-twitter"></i></button>
                                </li>
                                <li>
                                    <button type="button" data-toggle="tooltip" title="Facebook"><i class="si si-social-facebook"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title"><?php $one->get_name('male'); ?></h3>
                        </div>
                        <div class="block-content block-content-full text-center bg-image" style="background-image: url('<?php echo $one->assets_folder; ?>/img/photos/photo3.jpg');">
                            <?php $one->get_avatar('10', '', 96, true); ?>
                        </div>
                        <div class="block-content">
                            <?php $one->get_text('small'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row items-push-2x">
                <div class="col-md-4 visibility-hidden" data-toggle="appear" data-class="animated zoomIn">
                    <div class="block">
                        <div class="block-header">
                            <ul class="block-options">
                                <li>
                                    <button type="button" data-toggle="tooltip" title="Dribbble"><i class="si si-social-dribbble"></i></button>
                                </li>
                                <li>
                                    <button type="button" data-toggle="tooltip" title="Twitter"><i class="si si-social-twitter"></i></button>
                                </li>
                                <li>
                                    <button type="button" data-toggle="tooltip" title="Facebook"><i class="si si-social-facebook"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title"><?php $one->get_name('female'); ?></h3>
                        </div>
                        <div class="block-content block-content-full text-center bg-image" style="background-image: url('<?php echo $one->assets_folder; ?>/img/photos/photo4.jpg');">
                            <?php $one->get_avatar('1', '', 96, true); ?>
                        </div>
                        <div class="block-content">
                            <?php $one->get_text('small'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 visibility-hidden" data-toggle="appear" data-class="animated zoomIn">
                    <div class="block">
                        <div class="block-header">
                            <ul class="block-options">
                                <li>
                                    <button type="button" data-toggle="tooltip" title="Dribbble"><i class="si si-social-dribbble"></i></button>
                                </li>
                                <li>
                                    <button type="button" data-toggle="tooltip" title="Twitter"><i class="si si-social-twitter"></i></button>
                                </li>
                                <li>
                                    <button type="button" data-toggle="tooltip" title="Facebook"><i class="si si-social-facebook"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title"><?php $one->get_name('male'); ?></h3>
                        </div>
                        <div class="block-content block-content-full text-center bg-image" style="background-image: url('<?php echo $one->assets_folder; ?>/img/photos/photo6.jpg');">
                            <?php $one->get_avatar('13', '', 96, true); ?>
                        </div>
                        <div class="block-content">
                            <?php $one->get_text('small'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 visibility-hidden" data-toggle="appear" data-class="animated zoomIn">
                    <div class="block">
                        <div class="block-header">
                            <ul class="block-options">
                                <li>
                                    <button type="button" data-toggle="tooltip" title="Dribbble"><i class="si si-social-dribbble"></i></button>
                                </li>
                                <li>
                                    <button type="button" data-toggle="tooltip" title="Twitter"><i class="si si-social-twitter"></i></button>
                                </li>
                                <li>
                                    <button type="button" data-toggle="tooltip" title="Facebook"><i class="si si-social-facebook"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title"><?php $one->get_name('female'); ?></h3>
                        </div>
                        <div class="block-content block-content-full text-center bg-image" style="background-image: url('<?php echo $one->assets_folder; ?>/img/photos/photo7.jpg');">
                            <?php $one->get_avatar('4', '', 96, true); ?>
                        </div>
                        <div class="block-content">
                            <?php $one->get_text('small'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row items-push-2x">
                <div class="col-md-4 visibility-hidden" data-toggle="appear" data-class="animated zoomIn">
                    <div class="block">
                        <div class="block-header">
                            <ul class="block-options">
                                <li>
                                    <button type="button" data-toggle="tooltip" title="Dribbble"><i class="si si-social-dribbble"></i></button>
                                </li>
                                <li>
                                    <button type="button" data-toggle="tooltip" title="Twitter"><i class="si si-social-twitter"></i></button>
                                </li>
                                <li>
                                    <button type="button" data-toggle="tooltip" title="Facebook"><i class="si si-social-facebook"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title"><?php $one->get_name('female'); ?></h3>
                        </div>
                        <div class="block-content block-content-full text-center bg-image" style="background-image: url('<?php echo $one->assets_folder; ?>/img/photos/photo12.jpg');">
                            <?php $one->get_avatar('3', '', 96, true); ?>
                        </div>
                        <div class="block-content">
                            <?php $one->get_text('small'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 visibility-hidden" data-toggle="appear" data-class="animated zoomIn">
                    <div class="block">
                        <div class="block-header">
                            <ul class="block-options">
                                <li>
                                    <button type="button" data-toggle="tooltip" title="Dribbble"><i class="si si-social-dribbble"></i></button>
                                </li>
                                <li>
                                    <button type="button" data-toggle="tooltip" title="Twitter"><i class="si si-social-twitter"></i></button>
                                </li>
                                <li>
                                    <button type="button" data-toggle="tooltip" title="Facebook"><i class="si si-social-facebook"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title"><?php $one->get_name('male'); ?></h3>
                        </div>
                        <div class="block-content block-content-full text-center bg-image" style="background-image: url('<?php echo $one->assets_folder; ?>/img/photos/photo8.jpg');">
                            <?php $one->get_avatar('16', '', 96, true); ?>
                        </div>
                        <div class="block-content">
                            <?php $one->get_text('small'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 visibility-hidden" data-toggle="appear" data-class="animated zoomIn">
                    <div class="block">
                        <div class="block-header">
                            <ul class="block-options">
                                <li>
                                    <button type="button" data-toggle="tooltip" title="Dribbble"><i class="si si-social-dribbble"></i></button>
                                </li>
                                <li>
                                    <button type="button" data-toggle="tooltip" title="Twitter"><i class="si si-social-twitter"></i></button>
                                </li>
                                <li>
                                    <button type="button" data-toggle="tooltip" title="Facebook"><i class="si si-social-facebook"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title"><?php $one->get_name('female'); ?></h3>
                        </div>
                        <div class="block-content block-content-full text-center bg-image" style="background-image: url('<?php echo $one->assets_folder; ?>/img/photos/photo9.jpg');">
                            <?php $one->get_avatar('5', '', 96, true); ?>
                        </div>
                        <div class="block-content">
                            <?php $one->get_text('small'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Section Content -->
    </section>
</div>
<!-- END Team -->

<?php require 'inc/views/frontend_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>

<!-- Page JS Code -->
<script>
    $(function(){
        // Init page helpers (Appear plugin)
        App.initHelpers('appear');
    });
</script>

<?php require 'inc/views/template_footer_end.php'; ?>