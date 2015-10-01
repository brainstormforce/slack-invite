<?php require 'inc/config.php'; require 'inc/frontend_config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/frontend_head.php'; ?>

<!-- Hero Content -->
<div class="bg-image" style="background-image: url('<?php echo $one->assets_folder; ?>/img/various/hero1.jpg');">
    <div class="bg-primary-dark-op">
        <section class="content content-full content-boxed overflow-hidden">
            <!-- Section Content -->
            <div class="push-100-t push-50 text-center">
                <h1 class="h2 text-white push-10 visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">Your idea is great, imagine your product come to life.</h1>
                <h2 class="h5 text-white-op visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">Then make it happen. It's never been easier.</h2>
            </div>
            <div class="row visibility-hidden" data-toggle="appear" data-class="animated fadeInUp">
                <div class="col-sm-8 col-sm-offset-2">
                    <img class="img-responsive pull-b" src="<?php echo $one->assets_folder; ?>/img/various/promo2.jpg" alt="">
                </div>
            </div>
            <!-- END Section Content -->
        </section>
    </div>
</div>
<!-- END Hero Content -->

<!-- Big Features -->
<div class="bg-white">
    <section class="content content-boxed overflow-hidden">
        <!-- Section Content -->
        <div class="row items-push-2x push-50-t nice-copy">
            <div class="col-sm-6 visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">
                <h3 class="h5 font-w600 text-uppercase push-5"><i class="fa fa-cog text-primary push-5-r"></i> Reliable</h3>
                <h4 class="h3 font-w300 push-10">It just works</h4>
                <?php $one->get_text('small'); ?>
            </div>
            <div class="col-sm-6 visibility-hidden" data-toggle="appear" data-timeout="150" data-class="animated fadeInDown">
                <h3 class="h5 font-w600 text-uppercase push-5"><i class="fa fa-heart text-city push-5-r"></i> Passion</h3>
                <h4 class="h3 font-w300 push-10">Crafted with Love</h4>
                <?php $one->get_text('small'); ?>
            </div>
            <div class="col-sm-6 visibility-hidden" data-toggle="appear" data-timeout="300" data-class="animated fadeInDown">
                <h3 class="h5 font-w600 text-uppercase push-5"><i class="fa fa-check text-success push-5-r"></i> Clean</h3>
                <h4 class="h3 font-w300 push-10">Design &amp; Coding</h4>
                <?php $one->get_text('small'); ?>
            </div>
            <div class="col-sm-6 visibility-hidden" data-toggle="appear" data-timeout="300" data-class="animated fadeInDown">
                <h3 class="h5 font-w600 text-uppercase push-5"><i class="fa fa-comments text-smooth push-5-r"></i> Professional</h3>
                <h4 class="h3 font-w300 push-10">Based on Your Feedback</h4>
                <?php $one->get_text('small'); ?>
            </div>
        </div>
        <!-- END Section Content -->
    </section>
</div>
<!-- END Big Features -->

<!-- Mini Stats -->
<div class="bg-gray-lighter">
    <section class="content content-boxed">
        <!-- Section Content -->
        <div class="row items-push push-20-t push-20 text-center">
            <div class="col-xs-6">
                <div class="item item-circle bg-white border push-10 visibility-hidden" data-toggle="appear" data-offset="-100" data-class="animated bounceIn">
                    <i class="si si-briefcase text-primary"></i>
                </div>
                <div class="h1 push-5" data-toggle="countTo" data-to="3890" data-after="+"></div>
                <div class="font-w600 text-uppercase text-muted">Products</div>
            </div>
            <div class="col-xs-6">
                <div class="item item-circle bg-white border push-10 visibility-hidden" data-toggle="appear" data-offset="-100" data-class="animated bounceIn">
                    <i class="si si-rocket text-primary"></i>
                </div>
                <div class="h1 push-5" data-toggle="countTo" data-to="890" data-after="+"></div>
                <div class="font-w600 text-uppercase text-muted">Web Apps</div>
            </div>
        </div>
        <!-- END Section Content -->
    </section>
</div>
<!-- END Mini Stats -->

<!-- Classic Features -->
<div class="bg-white">
    <section class="content content-boxed">
        <!-- Section Content -->
        <div class="row items-push-3x push-50-t nice-copy">
            <div class="col-sm-4">
                <div class="text-center push-30">
                    <span class="item item-2x item-circle border">
                        <i class="si si-rocket"></i>
                    </span>
                </div>
                <h3 class="h5 font-w600 text-uppercase text-center push-10">Bootstrap Powered</h3>
                <p>Bootstrap is a sleek, intuitive, and powerful mobile first front-end framework for faster and easier web development. OneUI was built on top, extending it to a large degree.</p>
            </div>
            <div class="col-sm-4">
                <div class="text-center push">
                    <span class="item item-2x item-circle border">
                        <i class="si si-screen-smartphone"></i>
                    </span>
                </div>
                <h3 class="h5 font-w600 text-uppercase text-center push-10">Fully Responsive</h3>
                <p>The User Interface will adjust to any screen size. It will look great on mobile devices and desktops at the same time. No need to worry about the UI, just stay focused on the development.</p>
            </div>
            <div class="col-sm-4">
                <div class="text-center push">
                    <span class="item item-2x item-circle border">
                        <i class="si si-clock"></i>
                    </span>
                </div>
                <h3 class="h5 font-w600 text-uppercase text-center push-10">Save time</h3>
                <p>OneUI will save you hundreds of hours of extra development. Start right away coding your functionality and watch your project come to life months sooner.</p>
            </div>
        </div>
        <div class="row items-push-3x nice-copy">
            <div class="col-sm-4">
                <div class="text-center push">
                    <span class="item item-2x item-circle border">
                        <i class="si si-check"></i>
                    </span>
                </div>
                <h3 class="h5 font-w600 text-uppercase text-center push-10">Frontend Pages</h3>
                <p>Premium and fully responsive frontend pages are included in OneUI package, too. They use the same resources with the backend, so you can build your web application in one go using all available components wherever you like.</p>
            </div>
            <div class="col-sm-4">
                <div class="text-center push-30">
                    <span class="item item-2x item-circle border">{less}</span>
                </div>
                <h3 class="h5 font-w600 text-center push-10">LessCSS</h3>
                <p>OneUI was built from scratch with LessCSS. Completely modular design with components, variables and mixins that with help you customize and extend your framework to the maximum.</p>
            </div>
            <div class="col-sm-4">
                <div class="text-center push">
                    <span class="item item-2x item-circle border">
                        <i class="si si-speedometer"></i>
                    </span>
                </div>
                <h3 class="h5 font-w600 text-uppercase text-center push-10">Grunt Tasks</h3>
                <p>Grunt tasks will make your life easier. You can use them to live-compile your Less files to CSS as you work or build your custom color themes and framework.</p>
            </div>
        </div>
        <!-- END Section Content -->
    </section>
</div>
<!-- END Classic Features -->

<!-- Chart Feature -->
<div class="bg-image" style="background-image: url('<?php echo $one->assets_folder; ?>/img/photos/photo17@2x.jpg');">
    <div class="bg-primary-op">
        <section class="content content-full content-boxed overflow-hidden">
            <div class="push-30-t push-30 text-center">
                <h1 class="h2 text-white push-10 visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">Improve your conversions in a few days.</h1>
                <h2 class="h5 text-white-op push-30 visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">Our product can make you succeed.</h2>

                <!-- Chart.js Charts (initialized in js/pages/frontend_features.js), for more examples you can check out http://www.chartjs.org/docs/ -->
                <div class="visibility-hidden" style="height: 400px;" data-toggle="appear" data-offset="-200" data-class="animated zoomIn"><canvas class="js-features-chartjs-lines"></canvas></div>
            </div>
            <!-- END Section Content -->
        </section>
    </div>
</div>
<!-- END Chart Feature -->

<!-- Side Feature -->
<div class="bg-white">
    <section class="content content-boxed overflow-hidden">
        <!-- Section Content -->
        <div class="row items-push-2x push-30-t nice-copy">
            <div class="col-lg-5">
                <div class="push-50 visibility-hidden" data-toggle="appear" data-class="animated fadeInLeft">
                    <h3 class="h5 font-w600 text-uppercase push-5"><i class="fa fa-check text-flat push-5-r"></i> Layout</h3>
                    <h4 class="h3 font-w300 push-10">Powerful and Flexible</h4>
                    <?php $one->get_text('small'); ?>
                </div>
                <div class="visibility-hidden" data-toggle="appear" data-timeout="300" data-class="animated fadeInLeft">
                    <h3 class="h5 font-w600 text-uppercase push-5"><i class="fa fa-tablet text-amethyst push-5-r"></i> Responsive</h3>
                    <h4 class="h3 font-w300 push-10">Super Fast GPU Enabled Animations</h4>
                    <?php $one->get_text('small'); ?>
                </div>
            </div>
            <div class="col-lg-5 col-lg-offset-2 visible-lg">
                <img class="img-responsive visibility-hidden" data-toggle="appear" data-offset="-250" data-class="animated fadeInRight" src="<?php echo $one->assets_folder; ?>/img/various/promo3.jpg" alt="">
            </div>
        </div>
        <!-- END Section Content -->
    </section>
</div>
<!-- END Side Feature -->

<!-- Get Started -->
<div class="bg-gray-lighter">
    <section class="content content-full content-boxed">
        <!-- Section Content -->
        <div class="push-20-t push-20 text-center">
            <h3 class="h4 push-20 visibility-hidden" data-toggle="appear">Crafted with <i class="fa fa-heart text-city"></i> by <a href="http://goo.gl/vNS3I">pixelcave</a>.</h3>
            <a class="btn btn-rounded btn-noborder btn-lg btn-success visibility-hidden" data-toggle="appear" data-class="animated bounceIn" href="frontend_pricing.php">Get Started Today</a>
        </div>
        <!-- END Section Content -->
    </section>
</div>
<!-- END Get Started -->

<?php require 'inc/views/frontend_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>

<!-- Page Plugins -->
<script src="<?php echo $one->assets_folder; ?>/js/plugins/chartjs/Chart.min.js"></script>

<!-- Page JS Code -->
<script src="<?php echo $one->assets_folder; ?>/js/pages/frontend_features.js"></script>
<script>
    $(function(){
        // Init page helpers (Appear + CountTo plugins)
        App.initHelpers(['appear', 'appear-countTo']);
    });
</script>

<?php require 'inc/views/template_footer_end.php'; ?>