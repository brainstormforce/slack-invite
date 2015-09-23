<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>

<div class="content content-narrow">
    <!-- Simple Wizards -->
    <h2 class="content-heading">Simple Wizards</h2>
    
    <!-- END Simple Wizards -->

    <!-- Wizards with Progress -->
    <h2 class="content-heading">Wizards with Progress</h2>
    <div class="row">
        <div class="col-lg-6">
            <!-- Simple Classic Progress Wizard (.js-wizard-simple class is initialized in js/pages/base_forms_wizard.js) -->
            <!-- For more examples you can check out http://vadimg.com/twitter-bootstrap-wizard-example/ -->
            <div class="js-wizard-simple block">
                <!-- Step Tabs -->
                <ul class="nav nav-tabs nav-justified">
                    <li class="active">
                        <a href="#simple-classic-progress-step1" data-toggle="tab">1. Personal</a>
                    </li>
                    <li>
                        <a href="#simple-classic-progress-step2" data-toggle="tab">2. Details</a>
                    </li>
                    <li>
                        <a href="#simple-classic-progress-step3" data-toggle="tab">3. Extra</a>
                    </li>
                </ul>
                <!-- END Step Tabs -->

                <!-- Form -->
                <form class="form-horizontal" action="base_forms_wizard.php" method="post">
                    <!-- Steps Progress -->
                    <div class="block-content block-content-mini block-content-full border-b">
                        <div class="wizard-progress progress progress-mini remove-margin-b">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 0"></div>
                        </div>
                    </div>
                    <!-- END Steps Progress -->

                    <!-- Steps Content -->
                    <div class="block-content tab-content">
                        <!-- Step 1 -->
                        <div class="tab-pane fade fade-up in push-30-t push-50 active" id="simple-classic-progress-step1">
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <label for="simple-classic-progress-firstname">First Name</label>
                                    <input class="form-control" type="text" id="simple-classic-progress-firstname" name="simple-classic-progress-firstname" placeholder="Please enter your firstname">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <label for="simple-classic-progress-lastname">Last Name</label>
                                    <input class="form-control" type="text" id="simple-classic-progress-lastname" name="simple-classic-progress-lastname" placeholder="Please enter your lastname">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <label for="simple-classic-progress-email">Email</label>
                                    <input class="form-control" type="email" id="simple-classic-progress-email" name="simple-classic-progress-email" placeholder="Please enter your email">
                                </div>
                            </div>
                        </div>
                        <!-- END Step 1 -->

                        <!-- Step 2 -->
                        <div class="tab-pane fade fade-up push-30-t push-50" id="simple-classic-progress-step2">
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <label for="simple-classic-progress-details">Details</label>
                                    <textarea class="form-control" id="simple-classic-progress-details" name="simple-classic-progress-details" rows="9" placeholder="Share something about yourself"></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- END Step 2 -->

                        <!-- Step 3 -->
                        <div class="tab-pane fade fade-up push-30-t push-50" id="simple-classic-progress-step3">
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <label for="simple-classic-progress-city">City</label>
                                    <input class="form-control" type="text" id="simple-classic-progress-city" name="simple-classic-progress-city" placeholder="Where do you live?">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <label for="simple-classic-progress-skills">Skills</label>
                                    <select class="form-control" id="simple-classic-progress-skills" name="simple-classic-progress-skills" size="1">
                                        <option value="">Please select your best skill</option>
                                        <option value="1">Photoshop</option>
                                        <option value="2">HTML</option>
                                        <option value="3">CSS</option>
                                        <option value="4">JavaScript</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <label class="css-input switch switch-sm switch-primary" for="simple-classic-progress-terms">
                                        <input type="checkbox" id="simple-classic-progress-terms" name="simple-classic-progress-terms"><span></span> Agree with the <a data-toggle="modal" data-target="#modal-terms" href="#">terms</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- END Step 3 -->
                    </div>
                    <!-- END Steps Content -->

                    <!-- Steps Navigation -->
                    <div class="block-content block-content-mini block-content-full border-t">
                        <div class="row">
                            <div class="col-xs-6">
                                <button class="wizard-prev btn btn-default" type="button"><i class="fa fa-arrow-left"></i> Previous</button>
                            </div>
                            <div class="col-xs-6 text-right">
                                <button class="wizard-next btn btn-default" type="button">Next <i class="fa fa-arrow-right"></i></button>
                                <button class="wizard-finish btn btn-primary" type="submit"><i class="fa fa-check"></i> Submit</button>
                            </div>
                        </div>
                    </div>
                    <!-- END Steps Navigation -->
                </form>
                <!-- END Form -->
            </div>
            <!-- END Simple Classic Progress Wizard -->
        </div>
    </div>
    <!-- END Wizards with Progress -->

    <!-- Wizards with Validation -->
    <h2 class="content-heading">Wizards with Validation</h2>
    <div class="row">
        <div class="col-lg-6">
            <!-- Classic Validation Wizard (.js-wizard-classic-validation class is initialized in js/pages/base_forms_wizard.js) -->
            <!-- For more examples you can check out http://vadimg.com/twitter-bootstrap-wizard-example/ -->
            <div class="js-wizard-classic-validation block">
                <!-- Step Tabs -->
                <ul class="nav nav-tabs nav-justified">
                    <li class="active">
                        <a class="inactive" href="#validation-classic-step1" data-toggle="tab">1. Personal</a>
                    </li>
                    <li>
                        <a class="inactive" href="#validation-classic-step2" data-toggle="tab">2. Details</a>
                    </li>
                    <li>
                        <a class="inactive" href="#validation-classic-step3" data-toggle="tab">3. Extra</a>
                    </li>
                </ul>
                <!-- END Step Tabs -->

                <!-- Form -->
                <!-- jQuery Validation (.js-form1 class is initialized in js/pages/base_forms_wizard.js) -->
                <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                <form class="js-form1 validation form-horizontal" action="base_forms_wizard.php" method="post">
                    <!-- Steps Content -->
                    <div class="block-content tab-content">
                        <!-- Step 1 -->
                        <div class="tab-pane push-30-t push-50 active" id="validation-classic-step1">
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <label for="validation-classic-firstname">First Name</label>
                                    <input class="form-control" type="text" id="validation-classic-firstname" name="validation-classic-firstname" placeholder="Please enter your firstname">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <label for="validation-classic-lastname">Last Name</label>
                                    <input class="form-control" type="text" id="validation-classic-lastname" name="validation-classic-lastname" placeholder="Please enter your lastname">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <label for="validation-classic-email">Email</label>
                                    <input class="form-control" type="email" id="validation-classic-email" name="validation-classic-email" placeholder="Please enter your email">
                                </div>
                            </div>
                        </div>
                        <!-- END Step 1 -->

                        <!-- Step 2 -->
                        <div class="tab-pane push-30-t push-50" id="validation-classic-step2">
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <label for="validation-classic-details">Details</label>
                                    <textarea class="form-control" id="validation-classic-details" name="validation-classic-details" rows="9" placeholder="Share something about yourself"></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- END Step 2 -->

                        <!-- Step 3 -->
                        <div class="tab-pane push-30-t push-50" id="validation-classic-step3">
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <label for="validation-classic-city">City</label>
                                    <input class="form-control" type="text" id="validation-classic-city" name="validation-classic-city" placeholder="Where do you live?">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <label for="validation-classic-skills">Skills</label>
                                    <select class="form-control" id="validation-classic-skills" name="validation-classic-skills" size="1">
                                        <option value="">Please select your best skill</option>
                                        <option value="1">Photoshop</option>
                                        <option value="2">HTML</option>
                                        <option value="3">CSS</option>
                                        <option value="4">JavaScript</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <label class="css-input switch switch-sm switch-primary" for="validation-classic-terms">
                                        <input type="checkbox" id="validation-classic-terms" name="validation-classic-terms"><span></span> Agree with the <a data-toggle="modal" data-target="#modal-terms" href="#">terms</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- END Step 3 -->
                    </div>
                    <!-- END Steps Content -->

                    <!-- Steps Navigation -->
                    <div class="block-content block-content-mini block-content-full border-t">
                        <div class="row">
                            <div class="col-xs-6">
                                <button class="wizard-prev btn btn-default" type="button"><i class="fa fa-arrow-left"></i> Previous</button>
                            </div>
                            <div class="col-xs-6 text-right">
                                <button class="wizard-next btn btn-default" type="button">Next <i class="fa fa-arrow-right"></i></button>
                                <button class="wizard-finish btn btn-primary" type="submit"><i class="fa fa-check"></i> Submit</button>
                            </div>
                        </div>
                    </div>
                    <!-- END Steps Navigation -->
                </form>
                <!-- END Form -->
            </div>
            <!-- END Classic Validation Wizard -->
        </div>
        
    </div>
    <!-- END Wizards with Validation -->
</div>
<!-- END Page Content -->

<?php require 'inc/views/template_footer_start.php'; ?>

<!-- Page JS Plugins -->
<script src="<?php echo $one->assets_folder; ?>/js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/jquery-validation/jquery.validate.min.js"></script>

<!-- Page JS Code -->
<script src="<?php echo $one->assets_folder; ?>/js/pages/base_forms_wizard.js"></script>

