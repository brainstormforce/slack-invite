<?php require 'inc/config.php'; require 'inc/frontend_config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/frontend_head.php'; ?>

<!-- Hero Content -->
<div class="bg-success">
    <section class="content content-full content-boxed overflow-hidden">
        <!-- Section Content -->
        <div class="push-100-t push-50 text-center">
            <h1 class="h2 text-white push-10 visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">Sign up for a new account.</h1>
            <h2 class="h5 text-white-op visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">Unlimited ideas. Unlimited power. Unlimited joy. Unlimited opportunities.</h2>
        </div>
        <div class="row visibility-hidden" data-toggle="appear" data-class="animated fadeInUp">
            <div class="col-sm-8 col-sm-offset-2">
                <img class="img-responsive pull-b" src="<?php echo $one->assets_folder; ?>/img/various/promo2.jpg" alt="">
            </div>
        </div>
        <!-- END Section Content -->
    </section>
</div>
<!-- END Hero Content -->

<!-- Content -->
<div class="bg-white">
    <section class="content content-boxed">
        <!-- Section Content -->
        <div class="row items-push push-50-t push-30">
            <div class="col-md-6 col-md-offset-3">
                <form class="form-horizontal" action="frontend_signup.php" method="post">
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="form-material form-material-success">
                                <input class="form-control" type="text" id="frontend-signup-username" name="frontend-signup-username" placeholder="Please enter a username">
                                <label for="frontend-signup-username">Username</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="form-material form-material-success">
                                <input class="form-control" type="email" id="frontend-signup-email" name="frontend-signup-email" placeholder="Please provide your email">
                                <label for="frontend-signup-email">Email</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="form-material form-material-success">
                                <input class="form-control" type="password" id="frontend-signup-password" name="frontend-signup-password" placeholder="Choose a strong password..">
                                <label for="frontend-signup-password">Password</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="form-material form-material-success">
                                <input class="form-control" type="password" id="frontend-signup-password2" name="frontend-signup-password2" placeholder="..and confirm it">
                                <label for="frontend-signup-password2">Confirm Password</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12 text-center">
                            <label class="css-input switch switch-sm switch-success">
                                <input type="checkbox" id="frontend-signup-terms" name="frontend-signup-terms"><span></span> I agree with <a data-toggle="modal" data-target="#modal-signup-terms" href="#">terms &amp; conditions</a>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-3">
                            <button class="btn btn-block btn-success" type="submit"><i class="fa fa-plus pull-right"></i> Sign Up</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END Section Content -->
    </section>
</div>
<!-- END Content -->

<!-- Login -->
<div class="bg-gray-lighter">
    <section class="content content-full content-boxed">
        <!-- Section Content -->
        <div class="push-20-t push-20 text-center">
            <h3 class="h4 push-20 visibility-hidden" data-toggle="appear">Do you already have an account?</h3>
            <a class="btn btn-rounded btn-noborder btn-lg btn-success visibility-hidden" data-toggle="appear" data-class="animated bounceIn" href="frontend_login.php">Log In</a>
        </div>
        <!-- END Section Content -->
    </section>
</div>
<!-- END Login -->

<!-- Terms Modal -->
<div class="modal fade" id="modal-signup-terms" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popout">
        <div class="modal-content">
            <div class="block block-themed block-transparent remove-margin-b">
                <div class="block-header bg-primary-dark">
                    <ul class="block-options">
                        <li>
                            <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Terms &amp; Conditions</h3>
                </div>
                <div class="block-content">
                    <?php $one->get_text('small', 5); ?>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                <button class="btn btn-sm btn-primary" type="button" data-dismiss="modal"><i class="fa fa-check"></i> I agree</button>
            </div>
        </div>
    </div>
</div>
<!-- END Terms Modal -->

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