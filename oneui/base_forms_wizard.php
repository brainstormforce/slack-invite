<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-8">
            <h1 class="page-heading">
                Form Wizards <small>Step by step form submissions will become a valuable tool for you and your users.</small>
            </h1>
        </div>
        <div class="col-sm-4 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>Forms</li>
                <li><a class="link-effect" href="">Wizard</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content content-narrow">
    <!-- Simple Wizards -->
    <h2 class="content-heading">Simple Wizards</h2>
    <div class="row">
        <div class="col-lg-6">
            <!-- Simple Classic Wizard (.js-wizard-simple class is initialized in js/pages/base_forms_wizard.js) -->
            <!-- For more examples you can check out http://vadimg.com/twitter-bootstrap-wizard-example/ -->
            <div class="js-wizard-simple block">
                <!-- Step Tabs -->
                <ul class="nav nav-tabs nav-justified">
                    <li class="active">
                        <a href="#simple-classic-step1" data-toggle="tab">1. Personal</a>
                    </li>
                    <li>
                        <a href="#simple-classic-step2" data-toggle="tab">2. Details</a>
                    </li>
                    <li>
                        <a href="#simple-classic-step3" data-toggle="tab">3. Extra</a>
                    </li>
                </ul>
                <!-- END Step Tabs -->

                <!-- Form -->
                <form class="form-horizontal" action="base_forms_wizard.php" method="post">
                    <!-- Steps Content -->
                    <div class="block-content tab-content">
                        <!-- Step 1 -->
                        <div class="tab-pane push-30-t push-50 active" id="simple-classic-step1">
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <label for="simple-classic-firstname">First Name</label>
                                    <input class="form-control" type="text" id="simple-classic-firstname" name="simple-classic-firstname" placeholder="Please enter your firstname">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <label for="simple-classic-lastname">Last Name</label>
                                    <input class="form-control" type="text" id="simple-classic-lastname" name="simple-classic-lastname" placeholder="Please enter your lastname">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <label for="simple-classic-email">Email</label>
                                    <input class="form-control" type="email" id="simple-classic-email" name="simple-classic-email" placeholder="Please enter your email">
                                </div>
                            </div>
                        </div>
                        <!-- END Step 1 -->

                        <!-- Step 2 -->
                        <div class="tab-pane push-30-t push-50" id="simple-classic-step2">
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <label for="simple-classic-details">Details</label>
                                    <textarea class="form-control" id="simple-classic-details" name="simple-classic-details" rows="9" placeholder="Share something about yourself"></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- END Step 2 -->

                        <!-- Step 3 -->
                        <div class="tab-pane push-30-t push-50" id="simple-classic-step3">
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <label for="simple-classic-city">City</label>
                                    <input class="form-control" type="text" id="simple-classic-city" name="simple-classic-city" placeholder="Where do you live?">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <label for="simple-classic-skills">Skills</label>
                                    <select class="form-control" id="simple-classic-skills" name="simple-classic-skills" size="1">
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
                                    <label class="css-input switch switch-sm switch-primary" for="simple-classic-terms">
                                        <input type="checkbox" id="simple-classic-terms" name="simple-classic-terms"><span></span> Agree with the <a data-toggle="modal" data-target="#modal-terms" href="#">terms</a>
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
            <!-- END Simple Classic Wizard -->
        </div>
        <div class="col-lg-6">
            <!-- Simple Wizard (.js-wizard-simple class is initialized in js/pages/base_forms_wizard.js) -->
            <!-- For more examples you can check out http://vadimg.com/twitter-bootstrap-wizard-example/ -->
            <div class="js-wizard-simple block">
                <!-- Step Tabs -->
                <ul class="nav nav-tabs nav-tabs-alt nav-justified">
                    <li class="active">
                        <a href="#simple-step1" data-toggle="tab">1. Personal</a>
                    </li>
                    <li>
                        <a href="#simple-step2" data-toggle="tab">2. Details</a>
                    </li>
                    <li>
                        <a href="#simple-step3" data-toggle="tab">3. Extra</a>
                    </li>
                </ul>
                <!-- END Step Tabs -->

                <!-- Form -->
                <form class="form-horizontal" action="base_forms_wizard.php" method="post">
                    <!-- Steps Content -->
                    <div class="block-content tab-content">
                        <!-- Step 1 -->
                        <div class="tab-pane fade in push-30-t push-50 active" id="simple-step1">
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <div class="form-material">
                                        <input class="form-control" type="text" id="simple-firstname" name="simple-firstname" placeholder="Please enter your firstname">
                                        <label for="simple-firstname">First Name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <div class="form-material">
                                        <input class="form-control" type="text" id="simple-lastname" name="simple-lastname" placeholder="Please enter your lastname">
                                        <label for="simple-lastname">Last Name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <div class="form-material">
                                        <input class="form-control" type="email" id="simple-email" name="simple-email" placeholder="Please enter your email">
                                        <label for="simple-email">Email</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Step 1 -->

                        <!-- Step 2 -->
                        <div class="tab-pane fade push-30-t push-50" id="simple-step2">
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <div class="form-material">
                                        <textarea class="form-control" id="simple-details" name="simple-details" rows="9" placeholder="Share something about yourself"></textarea>
                                        <label for="simple-details">Details</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Step 2 -->

                        <!-- Step 3 -->
                        <div class="tab-pane fade push-30-t push-50" id="simple-step3">
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <div class="form-material">
                                        <input class="form-control" type="text" id="simple-city" name="simple-city" placeholder="Where do you live?">
                                        <label for="simple-city">City</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <div class="form-material">
                                        <select class="form-control" id="simple-skills" name="simple-skills" size="1">
                                            <option value="">Please select your best skill</option>
                                            <option value="1">Photoshop</option>
                                            <option value="2">HTML</option>
                                            <option value="3">CSS</option>
                                            <option value="4">JavaScript</option>
                                        </select>
                                        <label for="simple-skills">Skills</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <label class="css-input switch switch-sm switch-primary" for="simple-terms">
                                        <input type="checkbox" id="simple-terms" name="simple-terms"><span></span> Agree with the <a data-toggle="modal" data-target="#modal-terms" href="#">terms</a>
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
                                <button class="wizard-prev btn btn-warning" type="button"><i class="fa fa-arrow-circle-o-left"></i> Previous</button>
                            </div>
                            <div class="col-xs-6 text-right">
                                <button class="wizard-next btn btn-success" type="button">Next <i class="fa fa-arrow-circle-o-right"></i></button>
                                <button class="wizard-finish btn btn-primary" type="submit"><i class="fa fa-check-circle-o"></i> Submit</button>
                            </div>
                        </div>
                    </div>
                    <!-- END Steps Navigation -->
                </form>
                <!-- END Form -->
            </div>
            <!-- END Simple Wizard -->
        </div>
    </div>
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
        <div class="col-lg-6">
            <!-- Simple Progress Wizard (.js-wizard-simple class is initialized in js/pages/base_forms_wizard.js) -->
            <!-- For more examples you can check out http://vadimg.com/twitter-bootstrap-wizard-example/ -->
            <div class="js-wizard-simple block">
                <!-- Steps Progress -->
                <div class="block-content block-content-mini block-content-full border-b">
                    <div class="wizard-progress progress active remove-margin-b">
                        <div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 0"></div>
                    </div>
                </div>
                <!-- END Steps Progress -->

                <!-- Step Tabs -->
                <ul class="nav nav-tabs nav-tabs-alt nav-justified">
                    <li class="active">
                        <a href="#simple-progress-step1" data-toggle="tab">1. Personal</a>
                    </li>
                    <li>
                        <a href="#simple-progress-step2" data-toggle="tab">2. Details</a>
                    </li>
                    <li>
                        <a href="#simple-progress-step3" data-toggle="tab">3. Extra</a>
                    </li>
                </ul>
                <!-- END Step Tabs -->

                <!-- Form -->
                <form class="form-horizontal" action="base_forms_wizard.php" method="post">
                    <!-- Steps Content -->
                    <div class="block-content tab-content">
                        <!-- Step 1 -->
                        <div class="tab-pane fade fade-right in push-30-t push-50 active" id="simple-progress-step1">
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <div class="form-material">
                                        <input class="form-control" type="text" id="simple-progress-firstname" name="simple-progress-firstname" placeholder="Please enter your firstname">
                                        <label for="simple-progress-firstname">First Name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <div class="form-material">
                                        <input class="form-control" type="text" id="simple-progress-lastname" name="simple-progress-lastname" placeholder="Please enter your lastname">
                                        <label for="simple-progress-lastname">Last Name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <div class="form-material">
                                        <input class="form-control" type="email" id="simple-progress-email" name="simple-progress-email" placeholder="Please enter your email">
                                        <label for="simple-progress-email">Email</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Step 1 -->

                        <!-- Step 2 -->
                        <div class="tab-pane fade fade-right push-30-t push-50" id="simple-progress-step2">
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <div class="form-material">
                                        <textarea class="form-control" id="simple-progress-details" name="simple-progress-details" rows="9" placeholder="Share something about yourself"></textarea>
                                        <label for="simple-progress-details">Details</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Step 2 -->

                        <!-- Step 3 -->
                        <div class="tab-pane fade fade-right push-30-t push-50" id="simple-progress-step3">
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <div class="form-material">
                                        <input class="form-control" type="text" id="simple-progress-city" name="simple-progress-city" placeholder="Where do you live?">
                                        <label for="simple-progress-city">City</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <div class="form-material">
                                        <select class="form-control" id="simple-progress-skills" name="simple-progress-skills" size="1">
                                            <option value="">Please select your best skill</option>
                                            <option value="1">Photoshop</option>
                                            <option value="2">HTML</option>
                                            <option value="3">CSS</option>
                                            <option value="4">JavaScript</option>
                                        </select>
                                        <label for="simple-progress-skills">Skills</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <label class="css-input switch switch-sm switch-primary" for="simple-progress-terms">
                                        <input type="checkbox" id="simple-progress-terms" name="simple-progress-terms"><span></span> Agree with the <a data-toggle="modal" data-target="#modal-terms" href="#">terms</a>
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
                                <button class="wizard-prev btn btn-warning" type="button"><i class="fa fa-arrow-circle-o-left"></i> Previous</button>
                            </div>
                            <div class="col-xs-6 text-right">
                                <button class="wizard-next btn btn-success" type="button">Next <i class="fa fa-arrow-circle-o-right"></i></button>
                                <button class="wizard-finish btn btn-primary" type="submit"><i class="fa fa-check-circle-o"></i> Submit</button>
                            </div>
                        </div>
                    </div>
                    <!-- END Steps Navigation -->
                </form>
                <!-- END Form -->
            </div>
            <!-- END Simple Progress Wizard -->
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
        <div class="col-lg-6">
            <!-- Validation Wizard (.js-wizard-validation class is initialized in js/pages/base_forms_wizard.js) -->
            <!-- For more examples you can check out http://vadimg.com/twitter-bootstrap-wizard-example/ -->
            <div class="js-wizard-validation block">
                <!-- Step Tabs -->
                <ul class="nav nav-tabs nav-tabs-alt nav-justified">
                    <li class="active">
                        <a class="inactive" href="#validation-step1" data-toggle="tab">1. Personal</a>
                    </li>
                    <li>
                        <a class="inactive" href="#validation-step2" data-toggle="tab">2. Details</a>
                    </li>
                    <li>
                        <a class="inactive" href="#validation-step3" data-toggle="tab">3. Extra</a>
                    </li>
                </ul>
                <!-- END Step Tabs -->

                <!-- Form -->
                <!-- jQuery Validation (.js-form2 class is initialized in js/pages/base_forms_wizard.js) -->
                <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                <form class="js-form2 form-horizontal" action="base_forms_wizard.php" method="post">
                    <!-- Steps Content -->
                    <div class="block-content tab-content">
                        <!-- Step 1 -->
                        <div class="tab-pane fade fade-right in push-30-t push-50 active" id="validation-step1">
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <div class="form-material">
                                        <input class="form-control" type="text" id="validation-firstname" name="validation-firstname" placeholder="Please enter your firstname">
                                        <label for="validation-firstname">First Name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <div class="form-material">
                                        <input class="form-control" type="text" id="validation-lastname" name="validation-lastname" placeholder="Please enter your lastname">
                                        <label for="validation-lastname">Last Name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <div class="form-material">
                                        <input class="form-control" type="email" id="validation-email" name="validation-email" placeholder="Please enter your email">
                                        <label for="validation-email">Email</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Step 1 -->

                        <!-- Step 2 -->
                        <div class="tab-pane fade fade-right push-30-t push-50" id="validation-step2">
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <div class="form-material">
                                        <textarea class="form-control" id="validation-details" name="validation-details" rows="9" placeholder="Share something about yourself"></textarea>
                                        <label for="validation-details">Details</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Step 2 -->

                        <!-- Step 3 -->
                        <div class="tab-pane fade fade-right push-30-t push-50" id="validation-step3">
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <div class="form-material">
                                        <input class="form-control" type="text" id="validation-city" name="validation-city" placeholder="Where do you live?">
                                        <label for="validation-city">City</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <div class="form-material">
                                        <select class="form-control" id="validation-skills" name="validation-skills" size="1">
                                            <option value="">Please select your best skill</option>
                                            <option value="1">Photoshop</option>
                                            <option value="2">HTML</option>
                                            <option value="3">CSS</option>
                                            <option value="4">JavaScript</option>
                                        </select>
                                        <label for="validation-skills">Skills</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <label class="css-input switch switch-sm switch-primary" for="validation-terms">
                                        <input type="checkbox" id="validation-terms" name="validation-terms"><span></span> Agree with the <a data-toggle="modal" data-target="#modal-terms" href="#">terms</a>
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
                                <button class="wizard-prev btn btn-warning" type="button"><i class="fa fa-arrow-circle-o-left"></i> Previous</button>
                            </div>
                            <div class="col-xs-6 text-right">
                                <button class="wizard-next btn btn-success" type="button">Next <i class="fa fa-arrow-circle-o-right"></i></button>
                                <button class="wizard-finish btn btn-primary" type="submit"><i class="fa fa-check-circle-o"></i> Submit</button>
                            </div>
                        </div>
                    </div>
                    <!-- END Steps Navigation -->
                </form>
                <!-- END Form -->
            </div>
            <!-- END Validation Wizard Wizard -->
        </div>
    </div>
    <!-- END Wizards with Validation -->
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>

<!-- Terms Modal -->
<div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-hidden="true">
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
                    <?php echo $one->get_text('small', 5); ?>
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

<?php require 'inc/views/template_footer_start.php'; ?>

<!-- Page JS Plugins -->
<script src="<?php echo $one->assets_folder; ?>/js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/jquery-validation/jquery.validate.min.js"></script>

<!-- Page JS Code -->
<script src="<?php echo $one->assets_folder; ?>/js/pages/base_forms_wizard.js"></script>

<?php require 'inc/views/template_footer_end.php'; ?>