<?php require 'inc/config.php'; require 'inc/frontend_config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/frontend_head.php'; ?>

<!-- Hero Content -->
<div class="bg-primary-dark">
    <section class="content content-full content-boxed">
        <!-- Section Content -->
        <div class="push-100-t push-50 text-center">
            <h1 class="h2 text-white push-10 visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">We are passionate people.</h1>
            <h2 class="h5 text-white-op visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">We are creating products that you'll love to use. Let us introduce ourselves.</h2>
        </div>
        <!-- END Section Content -->
    </section>
</div>
<!-- END Hero Content -->

<!-- About Info -->
<div class="bg-white">
    <section class="content content-boxed">
        <!-- Section Content -->
        <div class="row items-push push-20-t nice-copy">
            <div class="col-md-6">
                <h3 class="h5 font-w600 text-uppercase push-10">Who are you?</h3>
                <?php $one->get_text('small'); ?>
                <h3 class="h5 font-w600 text-uppercase push-10">What can you do for me?</h3>
                <?php $one->get_text('medium'); ?>
                <h3 class="h5 font-w600 text-uppercase push-10">What are you currently working on?</h3>
                <?php $one->get_text('small'); ?>
            </div>
            <div class="col-md-6">
                <!-- Company Timeline -->
                <div class="block block-transparent">
                    <div class="block-content">
                        <ul class="list list-timeline pull-t">
                            <li class="visibility-hidden" data-toggle="appear" data-class="animated fadeInRight">
                                <div class="list-timeline-time">2012</div>
                                <i class="si si-bulb list-timeline-icon bg-warning"></i>
                                <div class="list-timeline-content">
                                    <p class="font-w600">The idea was born!</p>
                                    <p class="font-s13">Super excited!</p>
                                </div>
                            </li>
                            <li class="visibility-hidden" data-toggle="appear" data-timeout="100" data-class="animated fadeInRight">
                                <div class="list-timeline-time">2013</div>
                                <i class="si si-speedometer list-timeline-icon bg-city"></i>
                                <div class="list-timeline-content">
                                    <p class="font-w600">Start Up time!</p>
                                    <p class="font-s13">We started and wished for the best!</p>
                                </div>
                            </li>
                            <li class="visibility-hidden" data-toggle="appear" data-timeout="200" data-class="animated fadeInRight">
                                <div class="list-timeline-time">2014</div>
                                <i class="si si-briefcase list-timeline-icon bg-smooth"></i>
                                <div class="list-timeline-content">
                                    <p class="font-w600">5 products created!</p>
                                    <p class="font-s13">Amazing times!</p>
                                </div>
                            </li>
                            <li class="visibility-hidden" data-toggle="appear" data-timeout="300" data-class="animated fadeInRight">
                                <div class="list-timeline-time">2014</div>
                                <i class="fa fa-user-plus list-timeline-icon bg-success"></i>
                                <div class="list-timeline-content">
                                    <p class="font-w600">+ 2 Amazing people joined us!</p>
                                    <ul class="nav-users push-10-t push">
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
                                                <div class="font-w400 text-muted"><small>Web Developer</small></div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="visibility-hidden" data-toggle="appear" data-timeout="400" data-class="animated fadeInRight">
                                <div class="list-timeline-time">2015</div>
                                <i class="si si-like list-timeline-icon bg-primary"></i>
                                <div class="list-timeline-content">
                                    <p class="font-w600">We continue strong!</p>
                                    <p class="font-s13">With over 100 clients and 15 on going projects!</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END Company Timeline -->
            </div>
        </div>
        <!-- END Section Content -->
    </section>
</div>
<!-- END About Info -->

<!-- Get Started -->
<div class="bg-gray-lighter">
    <section class="content content-full content-boxed">
        <!-- Section Content -->
        <div class="push-20-t push-20 text-center">
            <h3 class="h4 push-20 visibility-hidden" data-toggle="appear">We would love to work together!</h3>
            <a class="btn btn-rounded btn-noborder btn-lg btn-success visibility-hidden" data-toggle="appear" data-class="animated bounceIn" href="frontend_contact.php">Get In Touch Today</a>
        </div>
        <!-- Section Content END -->
    </section>
</div>
<!-- END Get Started -->

<!-- People -->
<div class="bg-image" style="background-image: url('<?php echo $one->assets_folder; ?>/img/photos/photo6@2x.jpg');">
    <div class="bg-primary-dark-op">
        <section class="content content-full content-boxed">
            <!-- Section Content -->
            <div class="row items-push-2x push-50-t text-center">
                <div class="col-sm-4 visibility-hidden" data-toggle="appear" data-offset="-150">
                    <?php $one->get_avatar(0, 'female', 64, true); ?>
                    <div class="h4 text-white-op push-10-t push-5"><?php echo $one->get_name('female'); ?></div>
                    <div class="h6 text-gray">Photographer</div>
                </div>
                <div class="col-sm-4 visibility-hidden" data-toggle="appear" data-offset="-150" data-timeout="150">
                    <?php $one->get_avatar(0, 'male', 64, true); ?>
                    <div class="h4 text-white-op push-10-t push-5"><?php echo $one->get_name('male'); ?></div>
                    <div class="h6 text-gray">Web Designer</div>
                </div>
                <div class="col-sm-4 visibility-hidden" data-toggle="appear" data-offset="-150" data-timeout="300">
                    <?php $one->get_avatar(0, 'female', 64, true); ?>
                    <div class="h4 text-white-op push-10-t push-5"><?php echo $one->get_name('female'); ?></div>
                    <div class="h6 text-gray">Web Developer</div>
                </div>
                <div class="col-sm-4 visibility-hidden" data-toggle="appear" data-offset="-150" data-timeout="50">
                    <?php $one->get_avatar(0, 'male', 64, true); ?>
                    <div class="h4 text-white-op push-10-t push-5"><?php echo $one->get_name('male'); ?></div>
                    <div class="h6 text-gray">Support</div>
                </div>
                <div class="col-sm-4 visibility-hidden" data-toggle="appear" data-offset="-150" data-timeout="200">
                    <?php $one->get_avatar(0, 'female', 64, true); ?>
                    <div class="h4 text-white-op push-10-t push-5"><?php echo $one->get_name('female'); ?></div>
                    <div class="h6 text-gray">Web Developer</div>
                </div>
                <div class="col-sm-4 visibility-hidden" data-toggle="appear" data-offset="-150" data-timeout="350">
                    <?php $one->get_avatar(0, 'male', 64, true); ?>
                    <div class="h4 text-white-op push-10-t push-5"><?php echo $one->get_name('male'); ?></div>
                    <div class="h6 text-gray">Marketing</div>
                </div>
            </div>
            <!-- END Section Content -->
        </section>
    </div>
</div>
<!-- END People -->

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