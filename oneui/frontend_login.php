<?php require 'inc/config.php'; require 'inc/frontend_config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/frontend_head.php'; ?>

<!-- Hero Content -->
<div class="bg-primary-dark">
    <section class="content content-full content-boxed overflow-hidden">
        <!-- Section Content -->
        <div class="push-100-t push-50 text-center">
            <h1 class="h2 text-white push-10 visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">Log in to your dashboard.</h1>
            <h2 class="h5 text-white-op visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">Unlimited ideas. Unlimited power. Unlimited joy. Unlimited opportunities.</h2>
        </div>
        <div class="row visibility-hidden" data-toggle="appear" data-class="animated fadeInUp">
            <div class="col-sm-8 col-sm-offset-2">
                <img class="img-responsive pull-b" src="<?php echo $one->assets_folder; ?>/img/various/promo1.jpg" alt="">
            </div>
        </div>
        <!-- END Section Content -->
    </section>
</div>
<!-- END Hero Content -->

<!-- Log In Form -->
<div class="bg-white">
    <section class="content content-boxed">
        <!-- Section Content -->
        <div class="row items-push push-50-t push-30">
            <div class="col-md-6 col-md-offset-3">
                <form class="form-horizontal" action="index.php" method="post">
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="form-material form-material-primary">
                                <input class="form-control" type="text" id="frontend-login-username" name="frontend-login-username" placeholder="Enter your username..">
                                <label for="frontend-login-username">Username</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="form-material form-material-primary">
                                <input class="form-control" type="password" id="frontend-login-password" name="frontend-login-password" placeholder="Enter your password">
                                <label for="frontend-login-password">Password</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12 text-center">
                            <label class="css-input switch switch-sm switch-primary">
                                <input type="checkbox" id="frontend-login-remember-me" name="frontend-login-remember-me"><span></span> Remember Me?
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                            <button class="btn btn-block btn-primary" type="submit"><i class="fa fa-arrow-right pull-right"></i> Log in</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END Section Content -->
    </section>
</div>
<!-- END Log In Form -->

<!-- Sign Up Today -->
<div class="bg-gray-lighter">
    <section class="content content-full content-boxed">
        <!-- Section Content -->
        <div class="push-20-t push-20 text-center">
            <h3 class="h4 push-20 visibility-hidden" data-toggle="appear">Don’t have an account?</h3>
            <a class="btn btn-rounded btn-noborder btn-lg btn-success visibility-hidden" data-toggle="appear" data-class="animated bounceIn" href="frontend_signup.php">Sign Up Today</a>
        </div>
        <!-- END Section Content -->
    </section>
</div>
<!-- END Sign Up Today -->

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