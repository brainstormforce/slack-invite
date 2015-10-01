<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>

<!-- Login Content -->
<div class="content overflow-hidden">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
            <!-- Login Block -->
            <div class="block block-themed animated fadeIn">
                <div class="block-header bg-primary">
                    <ul class="block-options">
                        <li>
                            <a href="base_pages_reminder.php">Forgot Password?</a>
                        </li>
                        <li>
                            <a href="base_pages_register.php" data-toggle="tooltip" data-placement="left" title="New Account"><i class="si si-plus"></i></a>
                        </li>
                    </ul>
                    <h3 class="block-title">Login</h3>
                </div>
                <div class="block-content block-content-full block-content-narrow">
                    <!-- Login Title -->
                    <h1 class="h2 font-w600 push-30-t push-5"><?php echo $one->name; ?></h1>
                    <p>Welcome, please login.</p>
                    <!-- END Login Title -->

                    <!-- Login Form -->
                    <!-- jQuery Validation (.js-validation-login class is initialized in js/pages/base_pages_login.js) -->
                    <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                    <form class="js-validation-login form-horizontal push-30-t push-50" action="index.php" method="post">
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material form-material-primary floating">
                                    <input class="form-control" type="text" id="login-username" name="login-username">
                                    <label for="login-username">Username</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material form-material-primary floating">
                                    <input class="form-control" type="password" id="login-password" name="login-password">
                                    <label for="login-password">Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <label class="css-input switch switch-sm switch-primary">
                                    <input type="checkbox" id="login-remember-me" name="login-remember-me"><span></span> Remember Me?
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <button class="btn btn-block btn-primary" type="submit"><i class="si si-login pull-right"></i> Log in</button>
                            </div>
                        </div>
                    </form>
                    <!-- END Login Form -->
                </div>
            </div>
            <!-- END Login Block -->
        </div>
    </div>
</div>
<!-- END Login Content -->

<!-- Login Footer -->
<div class="push-10-t text-center animated fadeInUp">
    <small class="text-muted font-w600"><span class="js-year-copy"></span> &copy; <?php echo $one->name . ' ' . $one->version; ?></small>
</div>
<!-- END Login Footer -->

<?php require 'inc/views/template_footer_start.php'; ?>

<!-- Page JS Plugins -->
<script src="<?php echo $one->assets_folder; ?>/js/plugins/jquery-validation/jquery.validate.min.js"></script>

<!-- Page JS Code -->
<script src="<?php echo $one->assets_folder; ?>/js/pages/base_pages_login.js"></script>

<?php require 'inc/views/template_footer_end.php'; ?>