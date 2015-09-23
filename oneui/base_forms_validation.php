<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">
                Form Validation <small>It’s never been easier to validate form values.</small>
            </h1>
        </div>
        <div class="col-sm-5 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>Forms</li>
                <li><a class="link-effect" href="">Validation</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content content-narrow">
    <!-- Forms Row -->
    <div class="row">
        <div class="col-lg-6">
            <!-- Bootstrap Forms Validation -->
            <h2 class="content-heading">Bootstrap Forms</h2>
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Validation</h3>
                </div>
                <div class="block-content block-content-narrow">
                    <!-- jQuery Validation (.js-validation-bootstrap class is initialized in js/pages/base_forms_validation.js) -->
                    <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                    <form class="js-validation-bootstrap form-horizontal" action="base_forms_validation.php" method="post">
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="val-username">Username <span class="text-danger">*</span></label>
                            <div class="col-md-7">
                                <input class="form-control" type="text" id="val-username" name="val-username" placeholder="Choose a nice username..">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="val-email">Email <span class="text-danger">*</span></label>
                            <div class="col-md-7">
                                <input class="form-control" type="text" id="val-email" name="val-email" placeholder="Enter your valid email..">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="val-password">Password <span class="text-danger">*</span></label>
                            <div class="col-md-7">
                                <input class="form-control" type="password" id="val-password" name="val-password" placeholder="Choose a good one..">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="val-confirm-password">Confirm Password <span class="text-danger">*</span></label>
                            <div class="col-md-7">
                                <input class="form-control" type="password" id="val-confirm-password" name="val-confirm-password" placeholder="..and confirm it to be safe!">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="val-suggestions">Suggestions <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <textarea class="form-control" id="val-suggestions" name="val-suggestions" rows="14" placeholder="Share your ideas with us.."></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="val-skill">Best Skill <span class="text-danger">*</span></label>
                            <div class="col-md-7">
                                <select class="form-control" id="val-skill" name="val-skill">
                                    <option value="">Please select</option>
                                    <option value="html">HTML</option>
                                    <option value="css">CSS</option>
                                    <option value="javascript">Javascript</option>
                                    <option value="ruby">Ruby</option>
                                    <option value="php">PHP</option>
                                    <option value="asp">ASP.NET</option>
                                    <option value="python">Python</option>
                                    <option value="mysql">MySQL</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="val-website">Website <span class="text-danger">*</span></label>
                            <div class="col-md-7">
                                <input class="form-control" type="text" id="val-website" name="val-website" placeholder="http://example.com">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="val-digits">Digits <span class="text-danger">*</span></label>
                            <div class="col-md-7">
                                <input class="form-control" type="text" id="val-digits" name="val-digits" placeholder="3">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="val-number">Number <span class="text-danger">*</span></label>
                            <div class="col-md-7">
                                <input class="form-control" type="text" id="val-number" name="val-number" placeholder="3.0">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="val-range">Range [1, 5] <span class="text-danger">*</span></label>
                            <div class="col-md-7">
                                <input class="form-control" type="text" id="val-range" name="val-range" placeholder="3">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label"><a data-toggle="modal" data-target="#modal-terms" href="#">Terms</a> <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <label class="css-input css-checkbox css-checkbox-primary" for="val-terms">
                                    <input type="checkbox" id="val-terms" name="val-terms" value="1"><span></span> I agree to the terms
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Bootstrap Forms Validation -->
        </div>
        <div class="col-lg-6">
            <!-- Material Forms Validation -->
            <h2 class="content-heading">Material Forms</h2>
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Validation</h3>
                </div>
                <div class="block-content block-content-narrow">
                    <!-- jQuery Validation (.js-validation-material class is initialized in js/pages/base_forms_validation.js) -->
                    <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                    <form class="js-validation-material form-horizontal push-10-t" action="base_forms_validation.php" method="post">
                        <div class="form-group">
                            <div class="col-sm-9">
                                <div class="form-material">
                                    <input class="form-control" type="text" id="val-username2" name="val-username2" placeholder="Choose a nice username..">
                                    <label for="val-username2">Username</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9">
                                <div class="form-material">
                                    <input class="form-control" type="text" id="val-email2" name="val-email2" placeholder="Enter your valid email..">
                                    <label for="val-email2">Email</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9">
                                <div class="form-material">
                                    <input class="form-control" type="password" id="val-password2" name="val-password2" placeholder="Choose a good one..">
                                    <label for="val-password2">Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9">
                                <div class="form-material">
                                    <input class="form-control" type="password" id="val-confirm-password2" name="val-confirm-password2" placeholder="..and confirm it to be safe!">
                                    <label for="val-confirm-password2">Confirm Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <div class="form-material">
                                    <textarea class="form-control" id="val-suggestions2" name="val-suggestions2" rows="3" placeholder="Share your ideas with us.."></textarea>
                                    <label for="val-suggestions2">Suggestions</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9">
                                <div class="form-material">
                                    <select class="form-control" id="val-skill2" name="val-skill2">
                                        <option value="">Please select</option>
                                        <option value="html">HTML</option>
                                        <option value="css">CSS</option>
                                        <option value="javascript">Javascript</option>
                                        <option value="ruby">Ruby</option>
                                        <option value="php">PHP</option>
                                        <option value="asp">ASP.NET</option>
                                        <option value="python">Python</option>
                                        <option value="mysql">MySQL</option>
                                    </select>
                                    <label for="val-skill2">Best Skill</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9">
                                <div class="form-material">
                                    <input class="form-control" type="text" id="val-website2" name="val-website2" placeholder="http://example.com">
                                    <label for="val-website2">Website</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9">
                                <div class="form-material">
                                    <input class="form-control" type="text" id="val-digits2" name="val-digits2" placeholder="3">
                                    <label for="val-digits2">Digits</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9">
                                <div class="form-material">
                                    <input class="form-control" type="text" id="val-number2" name="val-number2" placeholder="3.0">
                                    <label for="val-number2">Number</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9">
                                <div class="form-material">
                                    <input class="form-control" type="text" id="val-range2" name="val-range2" placeholder="3">
                                    <label for="val-range2">Range [1, 5]</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <label><a data-toggle="modal" data-target="#modal-terms" href="#">Terms</a> <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-xs-12">
                                <label class="css-input css-checkbox css-checkbox-primary" for="val-terms2">
                                    <input type="checkbox" id="val-terms2" name="val-terms2" value="1"><span></span> I agree to the terms
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Material Forms Validation -->
        </div>
    </div>
    <!-- END Forms Row -->

    <!-- Terms Modal -->
    <div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-popin">
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
                        <h4 class="push-10">1. <strong>General</strong></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                        <h4 class="push-10">2. <strong>Account</strong></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                        <h4 class="push-10">3. <strong>Service</strong></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                        <h4 class="push-10">4. <strong>Payments</strong></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-sm btn-primary" type="button" data-dismiss="modal"><i class="fa fa-check"></i> Ok</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END Terms Modal -->
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>

<!-- Page JS Plugins -->
<script src="<?php echo $one->assets_folder; ?>/js/plugins/jquery-validation/jquery.validate.min.js"></script>

<!-- Page JS Code -->
<script src="<?php echo $one->assets_folder; ?>/js/pages/base_forms_validation.js"></script>

<?php require 'inc/views/template_footer_end.php'; ?>