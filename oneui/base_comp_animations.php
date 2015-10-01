<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-8">
            <h1 class="page-heading">
                Animations <small>Rich animation library will bring your elements to life and engage your users.</small>
            </h1>
        </div>
        <div class="col-sm-4 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>Components</li>
                <li><a class="link-effect" href="">Animations</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content content-narrow">
    <!-- Animation preview functionality initialized in js/pages/base_comp_animations.js -->
    <!-- Attention Seekers -->
    <h2 class="content-heading">Attention Seekers</h2>
    <div class="block">
        <div class="block-content block-content-full">
            <div class="row js-animation-section">
                <div class="col-md-6">
                    <h5 class="font-w400 push">Active CSS classes: <code>animated <span class="js-animation-preview"></span></code></h5>
                    <div class="row items-push">
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="bounce">bounce</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="flash">flash</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="pulse">pulse</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="rubberBand">rubberBand</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="shake">shake</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="swing">swing</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="tada">tada</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="wobble">wobble</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-1">
                    <div class="js-animation-object">
                        <img class="center-block img-responsive" src="<?php echo $one->assets_folder; ?>/img/various/little-monster.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Attention Seekers -->

    <!-- Bouncing Entrances -->
    <h2 class="content-heading">Bouncing Entrances</h2>
    <div class="block">
        <div class="block-content block-content-full">
            <div class="row js-animation-section">
                <div class="col-md-6">
                    <h5 class="font-w400 push">Active CSS classes: <code>animated <span class="js-animation-preview"></span></code></h5>
                    <div class="row items-push">
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="bounceIn">bounceIn</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="bounceInDown">bounceInDown</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="bounceInLeft">bounceInLeft</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="bounceInRight">bounceInRight</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="bounceInUp">bounceInUp</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-1">
                    <div class="js-animation-object">
                        <img class="center-block img-responsive" src="<?php echo $one->assets_folder; ?>/img/various/little-monster.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Bouncing Entrances -->

    <!-- Bouncing Exits -->
    <h2 class="content-heading">Bouncing Exits</h2>
    <div class="block">
        <div class="block-content block-content-full">
            <div class="row js-animation-section">
                <div class="col-md-6">
                    <h5 class="font-w400 push">Active CSS classes: <code>animated <span class="js-animation-preview"></span></code></h5>
                    <div class="row items-push">
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="bounceOut">bounceOut</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="bounceOutDown">bounceOutDown</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="bounceOutLeft">bounceOutLeft</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="bounceOutRight">bounceOutRight</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="bounceOutUp">bounceOutUp</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-1">
                    <div class="js-animation-object">
                        <img class="center-block img-responsive" src="<?php echo $one->assets_folder; ?>/img/various/little-monster.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Bouncing Exits -->

    <!-- Fading Entrances -->
    <h2 class="content-heading">Fading Entrances</h2>
    <div class="block">
        <div class="block-content block-content-full">
            <div class="row js-animation-section">
                <div class="col-md-6">
                    <h5 class="font-w400 push">Active CSS classes: <code>animated <span class="js-animation-preview"></span></code></h5>
                    <div class="row items-push">
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="fadeIn">fadeIn</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="fadeInDown">fadeInDown</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="fadeInDownBig">fadeInDownBig</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="fadeInLeft">fadeInLeft</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="fadeInLeftBig">fadeInLeftBig</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="fadeInRight">fadeInRight</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="fadeInRightBig">fadeInRightBig</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="fadeInUp">fadeInUp</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="fadeInUpBig">fadeInUpBig</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-1">
                    <div class="js-animation-object">
                        <img class="center-block img-responsive" src="<?php echo $one->assets_folder; ?>/img/various/little-monster.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Fading Entrances -->

    <!-- Fading Exits -->
    <h2 class="content-heading">Fading Exits</h2>
    <div class="block">
        <div class="block-content block-content-full">
            <div class="row js-animation-section">
                <div class="col-md-6">
                    <h5 class="font-w400 push">Active CSS classes: <code>animated <span class="js-animation-preview"></span></code></h5>
                    <div class="row items-push">
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="fadeOut">fadeOut</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="fadeOutDown">fadeOutDown</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="fadeOutDownBig">fadeOutDownBig</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="fadeOutLeft">fadeOutLeft</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="fadeOutLeftBig">fadeOutLeftBig</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="fadeOutRight">fadeOutRight</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="fadeOutRightBig">fadeOutRightBig</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="fadeOutUp">fadeOutUp</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="fadeOutUpBig">fadeOutUpBig</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-1">
                    <div class="js-animation-object">
                        <img class="center-block img-responsive" src="<?php echo $one->assets_folder; ?>/img/various/little-monster.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Fading Exits -->

    <!-- Flippers -->
    <h2 class="content-heading">Flippers</h2>
    <div class="block">
        <div class="block-content block-content-full">
            <div class="row js-animation-section">
                <div class="col-md-6">
                    <h5 class="font-w400 push">Active CSS classes: <code>animated <span class="js-animation-preview"></span></code></h5>
                    <div class="row items-push">
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="flip">flip</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="flipInX">flipInX</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="flipInY">flipInY</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="flipOutX">flipOutX</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="flipOutY">flipOutY</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-1">
                    <div class="js-animation-object">
                        <img class="center-block img-responsive" src="<?php echo $one->assets_folder; ?>/img/various/little-monster.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Flippers -->

    <!-- Lightspeed -->
    <h2 class="content-heading">Lightspeed</h2>
    <div class="block">
        <div class="block-content block-content-full">
            <div class="row js-animation-section">
                <div class="col-md-6">
                    <h5 class="font-w400 push">Active CSS classes: <code>animated <span class="js-animation-preview"></span></code></h5>
                    <div class="row items-push">
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="lightSpeedIn">lightSpeedIn</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="lightSpeedOut">lightSpeedOut</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-1">
                    <div class="js-animation-object">
                        <img class="center-block img-responsive" src="<?php echo $one->assets_folder; ?>/img/various/little-monster.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Lightspeed -->

    <!-- Rotating Entrances -->
    <h2 class="content-heading">Rotating Entrances</h2>
    <div class="block">
        <div class="block-content block-content-full">
            <div class="row js-animation-section">
                <div class="col-md-6">
                    <h5 class="font-w400 push">Active CSS classes: <code>animated <span class="js-animation-preview"></span></code></h5>
                    <div class="row items-push">
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="rotateIn">rotateIn</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="rotateInDownLeft">rotateInDownLeft</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="rotateInDownRight">rotateInDownRight</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="rotateInUpLeft">rotateInUpLeft</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="rotateInUpRight">rotateInUpRight</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-1">
                    <div class="js-animation-object">
                        <img class="center-block img-responsive" src="<?php echo $one->assets_folder; ?>/img/various/little-monster.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Rotating Entrances -->

    <!-- Rotating Exits -->
    <h2 class="content-heading">Rotating Exits</h2>
    <div class="block">
        <div class="block-content block-content-full">
            <div class="row js-animation-section">
                <div class="col-md-6">
                    <h5 class="font-w400 push">Active CSS classes: <code>animated <span class="js-animation-preview"></span></code></h5>
                    <div class="row items-push">
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="rotateOut">rotateOut</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="rotateOutDownLeft">rotateOutDownLeft</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="rotateOutDownRight">rotateOutDownRight</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="rotateOutUpLeft">rotateOutUpLeft</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="rotateOutUpRight">rotateOutUpRight</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-1">
                    <div class="js-animation-object">
                        <img class="center-block img-responsive" src="<?php echo $one->assets_folder; ?>/img/various/little-monster.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Rotating Exits -->

    <!-- Sliding Entrances -->
    <h2 class="content-heading">Sliding Entrances</h2>
    <div class="block">
        <div class="block-content block-content-full">
            <div class="row js-animation-section">
                <div class="col-md-6">
                    <h5 class="font-w400 push">Active CSS classes: <code>animated <span class="js-animation-preview"></span></code></h5>
                    <div class="row items-push">
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="slideInUp">slideInUp</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="slideInDown">slideInDown</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="slideInLeft">slideInLeft</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="slideInRight">slideInRight</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-1">
                    <div class="js-animation-object">
                        <img class="center-block img-responsive" src="<?php echo $one->assets_folder; ?>/img/various/little-monster.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Sliding Entrances -->

    <!-- Sliding Exits -->
    <h2 class="content-heading">Sliding Exits</h2>
    <div class="block">
        <div class="block-content block-content-full">
            <div class="row js-animation-section">
                <div class="col-md-6">
                    <h5 class="font-w400 push">Active CSS classes: <code>animated <span class="js-animation-preview"></span></code></h5>
                    <div class="row items-push">
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="slideOutUp">slideOutUp</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="slideOutDown">slideOutDown</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="slideOutLeft">slideOutLeft</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="slideOutRight">slideOutRight</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-1">
                    <div class="js-animation-object">
                        <img class="center-block img-responsive" src="<?php echo $one->assets_folder; ?>/img/various/little-monster.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Sliding Exits -->

    <!-- Zoom Entrances -->
    <h2 class="content-heading">Zoom Entrances</h2>
    <div class="block">
        <div class="block-content block-content-full">
            <div class="row js-animation-section">
                <div class="col-md-6">
                    <h5 class="font-w400 push">Active CSS classes: <code>animated <span class="js-animation-preview"></span></code></h5>
                    <div class="row items-push">
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="zoomIn">zoomIn</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="zoomInDown">zoomInDown</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="zoomInLeft">zoomInLeft</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="zoomInRight">zoomInRight</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="zoomInUp">zoomInUp</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-1">
                    <div class="js-animation-object">
                        <img class="center-block img-responsive" src="<?php echo $one->assets_folder; ?>/img/various/little-monster.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Zoom Entrances -->

    <!-- Zoom Exits -->
    <h2 class="content-heading">Zoom Exits</h2>
    <div class="block">
        <div class="block-content block-content-full">
            <div class="row js-animation-section">
                <div class="col-md-6">
                    <h5 class="font-w400 push">Active CSS classes: <code>animated <span class="js-animation-preview"></span></code></h5>
                    <div class="row items-push">
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="zoomOut">zoomOut</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="zoomOutDown">zoomOutDown</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="zoomOutLeft">zoomOutLeft</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="zoomOutRight">zoomOutRight</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="zoomOutUp">zoomOutUp</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-1">
                    <div class="js-animation-object">
                        <img class="center-block img-responsive" src="<?php echo $one->assets_folder; ?>/img/various/little-monster.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Zoom Exits -->

    <!-- Specials -->
    <h2 class="content-heading">Specials</h2>
    <div class="block">
        <div class="block-content block-content-full">
            <div class="row js-animation-section overflow-hidden">
                <div class="col-md-6">
                    <h5 class="font-w400 push">Active CSS classes: <code>animated <span class="js-animation-preview"></span></code></h5>
                    <div class="row items-push">
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="hinge">hinge</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="rollIn">rollIn</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block btn-default" data-animation-class="rollOut">rollOut</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-1">
                    <div class="js-animation-object">
                        <img class="center-block img-responsive" src="<?php echo $one->assets_folder; ?>/img/various/little-monster.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Specials -->
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>

<!-- Page JS Code -->
<script src="<?php echo $one->assets_folder; ?>/js/pages/base_comp_animations.js"></script>

<?php require 'inc/views/template_footer_end.php'; ?>