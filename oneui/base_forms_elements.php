<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-8">
            <h1 class="page-heading">
                Form Elements <small>Carefully designed elements that will ensure a great experience for your users.</small>
            </h1>
        </div>
        <div class="col-sm-4 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>Forms</li>
                <li><a class="link-effect" href="">Form Elements</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content content-narrow">
    <!-- Material Design -->
    <h2 class="content-heading">Material Design</h2>
    <div class="row">
        <div class="col-md-6">
            <!-- Static Labels -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Static Labels</h3>
                </div>
                <div class="block-content block-content-narrow">
                    <form class="form-horizontal push-10-t" action="base_forms_elements_modern.php" method="post" onsubmit="return false;">
                        <div class="form-group">
                            <div class="col-sm-9">
                                <div class="form-material">
                                    <input class="form-control" type="text" id="material-text" name="material-text" placeholder="Please enter your username">
                                    <label for="material-text">Username</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9">
                                <div class="form-material">
                                    <input class="form-control" type="password" id="material-password" name="material-password" placeholder="Please enter your password">
                                    <label for="material-password">Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material">
                                    <input class="form-control" type="email" id="material-email" name="material-email" placeholder="Please enter your email">
                                    <label for="material-email">Email</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                                <div class="form-material">
                                    <input class="form-control" type="text" id="material-gridf" name="material-gridf" placeholder="col-xs-6">
                                    <label for="material-gridf">Grid Input</label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-material">
                                    <input class="form-control" type="text" id="material-gridl" name="material-gridl" placeholder="col-xs-6">
                                    <label for="material-gridl">Grid Input</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material">
                                    <textarea class="form-control" id="material-textarea-small" name="material-textarea-small" rows="3" placeholder="Please add a comment"></textarea>
                                    <label for="material-textarea-small">Textarea Small</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material">
                                    <textarea class="form-control" id="material-textarea-large" name="material-textarea-large" rows="8" placeholder="Please add a comment"></textarea>
                                    <label for="material-textarea-large">Textarea Large</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9">
                                <div class="form-material form-material-primary">
                                    <input class="form-control" type="text" id="material-color-primary" name="material-color-primary" placeholder="On focus">
                                    <label for="material-color-primary">Primary Color</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9">
                                <div class="form-material form-material-success">
                                    <input class="form-control" type="text" id="material-color-success" name="material-color-success" placeholder="On focus">
                                    <label for="material-color-success">Success Color</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9">
                                <div class="form-material form-material-info">
                                    <input class="form-control" type="text" id="material-color-info" name="material-color-info" placeholder="On focus">
                                    <label for="material-color-info">Info Color</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9">
                                <div class="form-material form-material-warning">
                                    <input class="form-control" type="text" id="material-color-warning" name="material-color-warning" placeholder="On focus">
                                    <label for="material-color-warning">Warning Color</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9">
                                <div class="form-material form-material-danger">
                                    <input class="form-control" type="text" id="material-color-danger" name="material-color-danger" placeholder="On focus">
                                    <label for="material-color-danger">Danger Color</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group has-success">
                            <div class="col-sm-9">
                                <div class="form-material">
                                    <input class="form-control" type="text" id="material-success" name="material-success" placeholder="Success State">
                                    <label for="material-success">Success</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group has-info">
                            <div class="col-sm-9">
                                <div class="form-material">
                                    <input class="form-control" type="text" id="material-info" name="material-info" placeholder="Info State">
                                    <label for="material-info">Info</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group has-warning">
                            <div class="col-sm-9">
                                <div class="form-material">
                                    <input class="form-control" type="text" id="material-warning" name="material-warning" placeholder="Warning State">
                                    <label for="material-warning">Warning</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group has-error">
                            <div class="col-sm-9">
                                <div class="form-material">
                                    <input class="form-control" type="text" id="material-error" name="material-error" placeholder="Error State">
                                    <label for="material-error">Error</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9">
                                <div class="form-material">
                                    <input class="form-control" type="text" id="material-help" name="material-help">
                                    <label for="material-help">With Help</label>
                                    <div class="help-block text-right">This is a help block!</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9">
                                <div class="form-material">
                                    <input class="form-control" type="text" id="material-disabled" name="material-disabled" disabled>
                                    <label for="material-disabled">Disabled</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9">
                                <div class="form-material">
                                    <select class="form-control" id="material-select" name="material-select" size="1">
                                        <option>...</option>
                                        <option value="1">Option #1</option>
                                        <option value="2">Option #2</option>
                                        <option value="3">Option #3</option>
                                    </select>
                                    <label for="material-select">Please Select</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9">
                                <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Static Labels -->
        </div>
        <div class="col-md-6">
            <!-- Floating Labels -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Floating Labels</h3>
                </div>
                <div class="block-content block-content-narrow">
                    <form class="form-horizontal push-10-t" action="base_forms_elements_modern.php" method="post" onsubmit="return false;">
                        <div class="form-group">
                            <div class="col-sm-9">
                                <div class="form-material floating">
                                    <input class="form-control" type="text" id="material-text2" name="material-text2">
                                    <label for="material-text2">Username</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9">
                                <div class="form-material floating">
                                    <input class="form-control" type="password" id="material-password2" name="material-password2">
                                    <label for="material-password2">Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material floating">
                                    <input class="form-control" type="email" id="material-email2" name="material-email2">
                                    <label for="material-email2">Email</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                                <div class="form-material floating">
                                    <input class="form-control" type="text" id="material-gridf2" name="material-gridf2">
                                    <label for="material-gridf2">Grid Input</label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-material floating">
                                    <input class="form-control" type="text" id="material-gridl2" name="material-gridl2">
                                    <label for="material-gridl2">Grid Input</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material floating">
                                    <textarea class="form-control" id="material-textarea-small2" name="material-textarea-small2" rows="3"></textarea>
                                    <label for="material-textarea-small2">Textarea Small</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material floating">
                                    <textarea class="form-control" id="material-textarea-large2" name="material-textarea-large2" rows="8"></textarea>
                                    <label for="material-textarea-large2">Textarea Large</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9">
                                <div class="form-material form-material-primary floating">
                                    <input class="form-control" type="text" id="material-color-primary2" name="material-color-primary2">
                                    <label for="material-color-primary2">Primary Color (On focus)</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9">
                                <div class="form-material form-material-success floating">
                                    <input class="form-control" type="text" id="material-color-success2" name="material-color-success2">
                                    <label for="material-color-success2">Success Color (On focus)</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9">
                                <div class="form-material form-material-info floating">
                                    <input class="form-control" type="text" id="material-color-info2" name="material-color-info2">
                                    <label for="material-color-info2">Info Color (On focus)</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9">
                                <div class="form-material form-material-warning floating">
                                    <input class="form-control" type="text" id="material-color-warning2" name="material-color-warning2">
                                    <label for="material-color-warning2">Warning Color (On focus)</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9">
                                <div class="form-material form-material-danger floating">
                                    <input class="form-control" type="text" id="material-color-danger2" name="material-color-danger2">
                                    <label for="material-color-danger2">Danger Color (On focus)</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group has-success">
                            <div class="col-sm-9">
                                <div class="form-material floating">
                                    <input class="form-control" type="text" id="material-success2" name="material-success2">
                                    <label for="material-success2">Success</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group has-info">
                            <div class="col-sm-9">
                                <div class="form-material floating">
                                    <input class="form-control" type="text" id="material-info2" name="material-info2">
                                    <label for="material-info2">Info</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group has-warning">
                            <div class="col-sm-9">
                                <div class="form-material floating">
                                    <input class="form-control" type="text" id="material-warning2" name="material-warning2">
                                    <label for="material-warning2">Warning</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group has-error">
                            <div class="col-sm-9">
                                <div class="form-material floating">
                                    <input class="form-control" type="text" id="material-error2" name="material-error2">
                                    <label for="material-error2">Error</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9">
                                <div class="form-material floating">
                                    <input class="form-control" type="text" id="material-help2" name="material-help2">
                                    <label for="material-help2">With Help</label>
                                    <div class="help-block text-right">This is a help block!</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9">
                                <div class="form-material floating">
                                    <input class="form-control" type="text" id="material-disabled2" name="material-disabled2" disabled>
                                    <label for="material-disabled2">Disabled</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9">
                                <div class="form-material floating">
                                    <select class="form-control" id="material-select2" name="material-select2" size="1">
                                        <option></option><!-- Empty value for demostrating material select box -->
                                        <option value="1">Option #1</option>
                                        <option value="2">Option #2</option>
                                        <option value="3">Option #3</option>
                                    </select>
                                    <label for="material-select2">Please Select</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9">
                                <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Floating Labels -->
        </div>
    </div>
    <!-- END Material Design -->

    <!-- Bootstrap Design -->
    <h2 class="content-heading">Bootstrap Design</h2>
    <div class="row">
        <div class="col-md-6">
            <!-- Default Elements -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Default Elements</h3>
                </div>
                <div class="block-content block-content-narrow">
                    <form class="form-horizontal" action="base_forms_elements.php" method="post" enctype="multipart/form-data" onsubmit="return false;">
                        <div class="form-group">
                            <label class="col-xs-12">Static</label>
                            <div class="col-sm-9">
                                <div class="form-control-static">Username</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12" for="example-text-input">Text</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" id="example-text-input" name="example-text-input" placeholder="Text..">
                                <div class="help-block">Further info about this input</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12" for="example-email-input">Email</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="email" id="example-email-input" name="example-email-input" placeholder="Email..">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12" for="example-password-input">Password</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="password" id="example-password-input" name="example-password-input" placeholder="Password..">
                            </div>
                        </div>
                        <div class="form-group has-success">
                            <label class="col-xs-12" for="example-text-input-success">Success State</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" id="example-text-input-success" name="example-text-input-success" placeholder="Success State..">
                            </div>
                        </div>
                        <div class="form-group has-info">
                            <label class="col-xs-12" for="example-text-input-info">Info State</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" id="example-text-input-info" name="example-text-input-info" placeholder="Info State..">
                            </div>
                        </div>
                        <div class="form-group has-warning">
                            <label class="col-xs-12" for="example-text-input-warning">Warning State</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" id="example-text-input-warning" name="example-text-input-warning" placeholder="Warning State..">
                            </div>
                        </div>
                        <div class="form-group has-error">
                            <label class="col-xs-12" for="example-text-input-error">Error State</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" id="example-text-input-error" name="example-text-input-error" placeholder="Error State..">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12" for="example-disabled-input">Disabled</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" id="example-disabled-input" name="example-disabled-input" placeholder="Disabled.." disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12" for="example-textarea-input">Textarea</label>
                            <div class="col-xs-12">
                                <textarea class="form-control" id="example-textarea-input" name="example-textarea-input" rows="6" placeholder="Content.."></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12" for="example-select">Select</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="example-select" name="example-select" size="1">
                                    <option value="0">Please select</option>
                                    <option value="1">Option #1</option>
                                    <option value="2">Option #2</option>
                                    <option value="3">Option #3</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12" for="example-multiple-select">Multiple Select</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="example-multiple-select" name="example-multiple-select" size="5" multiple>
                                    <option value="1">Option #1</option>
                                    <option value="2">Option #2</option>
                                    <option value="3">Option #3</option>
                                    <option value="4">Option #4</option>
                                    <option value="5">Option #5</option>
                                    <option value="6">Option #6</option>
                                    <option value="7">Option #7</option>
                                    <option value="8">Option #8</option>
                                    <option value="9">Option #9</option>
                                    <option value="10">Option #10</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12">Radios</label>
                            <div class="col-xs-12">
                                <div class="radio">
                                    <label for="example-radio1">
                                        <input type="radio" id="example-radio1" name="example-radios" value="option1"> Option 1
                                    </label>
                                </div>
                                <div class="radio">
                                    <label for="example-radio2">
                                        <input type="radio" id="example-radio2" name="example-radios" value="option2"> Option 2
                                    </label>
                                </div>
                                <div class="radio">
                                    <label for="example-radio3">
                                        <input type="radio" id="example-radio3" name="example-radios" value="option3"> Option 3
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12">Inline Radios</label>
                            <div class="col-xs-12">
                                <label class="radio-inline" for="example-inline-radio1">
                                    <input type="radio" id="example-inline-radio1" name="example-inline-radios" value="option1"> One
                                </label>
                                <label class="radio-inline" for="example-inline-radio2">
                                    <input type="radio" id="example-inline-radio2" name="example-inline-radios" value="option2"> Two
                                </label>
                                <label class="radio-inline" for="example-inline-radio3">
                                    <input type="radio" id="example-inline-radio3" name="example-inline-radios" value="option3"> Three
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12">Checkboxes</label>
                            <div class="col-xs-12">
                                <div class="checkbox">
                                    <label for="example-checkbox1">
                                        <input type="checkbox" id="example-checkbox1" name="example-checkbox1" value="option1"> Option 1
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label for="example-checkbox2">
                                        <input type="checkbox" id="example-checkbox2" name="example-checkbox2" value="option2"> Option 2
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label for="example-checkbox3">
                                        <input type="checkbox" id="example-checkbox3" name="example-checkbox3" value="option3"> Option 3
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12">Inline Checkboxes</label>
                            <div class="col-xs-12">
                                <label class="checkbox-inline" for="example-inline-checkbox1">
                                    <input type="checkbox" id="example-inline-checkbox1" name="example-inline-checkbox1" value="option1"> One
                                </label>
                                <label class="checkbox-inline" for="example-inline-checkbox2">
                                    <input type="checkbox" id="example-inline-checkbox2" name="example-inline-checkbox2" value="option2"> Two
                                </label>
                                <label class="checkbox-inline" for="example-inline-checkbox3">
                                    <input type="checkbox" id="example-inline-checkbox3" name="example-inline-checkbox3" value="option3"> Three
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12" for="example-file-input">File Input</label>
                            <div class="col-xs-12">
                                <input type="file" id="example-file-input" name="example-file-input">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12" for="example-file-multiple-input">Multiple File Input</label>
                            <div class="col-xs-12">
                                <input type="file" id="example-file-multiple-input" name="example-file-multiple-input" multiple>
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
            <!-- END Default Elements -->
        </div>
        <div class="col-md-6">
            <!-- Normal Form -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Normal Form</h3>
                </div>
                <div class="block-content block-content-narrow">
                    <form action="base_forms_elements.php" method="post" onsubmit="return false;">
                        <div class="form-group">
                            <label for="example-nf-email">Email</label>
                            <input class="form-control" type="email" id="example-nf-email" name="example-nf-email" placeholder="Enter Email..">
                        </div>
                        <div class="form-group">
                            <label for="example-nf-password">Password</label>
                            <input class="form-control" type="password" id="example-nf-password" name="example-nf-password" placeholder="Enter Password..">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-sm btn-primary" type="submit">Login</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Normal Form -->

            <!-- Inline Form -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Inline Form</h3>
                </div>
                <div class="block-content block-content-narrow block-content-full">
                    <form class="form-inline" action="base_forms_elements.php" method="post" onsubmit="return false;">
                        <div class="form-group">
                            <label class="sr-only" for="example-if-email">Email</label>
                            <input class="form-control" type="email" id="example-if-email" name="example-if-email" placeholder="Enter Email..">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="example-if-password">Password</label>
                            <input class="form-control" type="password" id="example-if-password" name="example-if-password" placeholder="Enter Password..">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-default" type="submit">Login</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Inline Form -->

            <!-- Horizontal Form -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Horizontal Form</h3>
                </div>
                <div class="block-content block-content-narrow">
                    <form class="form-horizontal" action="base_forms_elements.php" method="post" onsubmit="return false;">
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="example-hf-email">Email</label>
                            <div class="col-md-7">
                                <input class="form-control" type="email" id="example-hf-email" name="example-hf-email" placeholder="Enter Email..">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="example-hf-password">Password</label>
                            <div class="col-md-7">
                                <input class="form-control" type="password" id="example-hf-password" name="example-hf-password" placeholder="Enter Password..">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-9 col-md-offset-3">
                                <button class="btn btn-sm btn-primary" type="submit">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Horizontal Form -->

            <!-- Input Sizes -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Input Sizes</h3>
                </div>
                <div class="block-content block-content-narrow">
                    <form action="base_forms_elements.php" method="post" onsubmit="return false;">
                        <div class="form-group">
                            <label for="example-input-small">Small Input</label>
                            <input class="form-control input-sm" type="text" id="example-input-small" name="example-input-small" placeholder=".input-sm">
                        </div>
                        <div class="form-group">
                            <label for="example-input-normal">Normal Input</label>
                            <input class="form-control" type="text" id="example-input-normal" name="example-input-normal" placeholder="..">
                        </div>
                        <div class="form-group">
                            <label for="example-input-large">Large Input</label>
                            <input class="form-control input-lg" type="text" id="example-input-large" name="example-input-large" placeholder=".input-lg">
                        </div>
                        <div class="form-group">
                            <label>Grid Inputs</label>
                            <div class="row">
                                <div class="col-xs-4">
                                    <input class="form-control" type="text" placeholder=".col-xs-4">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-5">
                                    <input class="form-control" type="text" placeholder=".col-xs-5">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-6">
                                    <input class="form-control" type="text" placeholder=".col-xs-6">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-7">
                                    <input class="form-control" type="text" placeholder=".col-xs-7">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-8">
                                    <input class="form-control" type="text" placeholder=".col-xs-8">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-9">
                                    <input class="form-control" type="text" placeholder=".col-xs-9">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-10">
                                    <input class="form-control" type="text" placeholder=".col-xs-10">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-11">
                                    <input class="form-control" type="text" placeholder=".col-xs-11">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-12">
                                    <input class="form-control" type="text" placeholder=".col-xs-12">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Multiple Grid Inputs</label>
                            <div class="row">
                                <div class="col-xs-6">
                                    <input class="form-control" type="text" placeholder=".col-xs-6">
                                </div>
                                <div class="col-xs-6">
                                    <input class="form-control" type="text" placeholder=".col-xs-6">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-4">
                                    <input class="form-control" type="text" placeholder=".col-xs-4">
                                </div>
                                <div class="col-xs-4">
                                    <input class="form-control" type="text" placeholder=".col-xs-4">
                                </div>
                                <div class="col-xs-4">
                                    <input class="form-control" type="text" placeholder=".col-xs-4">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-3">
                                    <input class="form-control" type="text" placeholder=".col-xs-3">
                                </div>
                                <div class="col-xs-6">
                                    <input class="form-control" type="text" placeholder=".col-xs-6">
                                </div>
                                <div class="col-xs-3">
                                    <input class="form-control" type="text" placeholder=".col-xs-3">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Input Sizes -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <!-- Icon/Text Groups -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Icon/Text Groups</h3>
                </div>
                <div class="block-content">
                    <form action="base_forms_elements.php" method="post" class="form-horizontal" onsubmit="return false;">
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input class="form-control" type="text" id="example-input1-group1" name="example-input1-group1" placeholder="Username">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <input class="form-control" type="email" id="example-input2-group1" name="example-input2-group1" placeholder="Email">
                                    <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-euro"></i></span>
                                    <input class="form-control" type="text" id="example-input3-group1" name="example-input3-group1" placeholder="..">
                                    <span class="input-group-addon">.00</span>
                                </div>
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
            <!-- END Icon/Text Groups -->
        </div>
        <div class="col-md-4">
            <!-- Button Groups -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Button Groups</h3>
                </div>
                <div class="block-content">
                    <form action="base_forms_elements.php" method="post" class="form-horizontal" onsubmit="return false;">
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="fa fa-search"></i> Search</button>
                                    </span>
                                    <input class="form-control" type="text" id="example-input1-group2" name="example-input1-group2" placeholder="Username">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <input class="form-control" type="email" id="example-input2-group2" name="example-input2-group2" placeholder="Email">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">Submit</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="fa fa-facebook"></i></button>
                                    </span>
                                    <input class="form-control" type="text" id="example-input3-group2" name="example-input3-group2" placeholder="Search">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="fa fa-twitter"></i></button>
                                    </span>
                                </div>
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
            <!-- END Button Groups -->
        </div>
        <div class="col-md-4">
            <!-- Dropdown Groups -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Dropdown Groups</h3>
                </div>
                <div class="block-content">
                    <form action="base_forms_elements.php" method="post" class="form-horizontal" onsubmit="return false;">
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default" data-toggle="dropdown" type="button"><span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-header">Profile</li>
                                            <li>
                                                <a tabindex="-1" href="javascript:void(0)"><span class="badge pull-right">3</span>News</a>
                                            </li>
                                            <li>
                                                <a tabindex="-1" href="javascript:void(0)"><span class="badge pull-right">1</span>Messages</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li class="dropdown-header">More</li>
                                            <li>
                                                <a tabindex="-1" href="javascript:void(0)">Edit Profile..</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <input class="form-control" type="text" id="example-input1-group3" name="example-input1-group3" placeholder="Username">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <input class="form-control" type="email" id="example-input2-group3" name="example-input2-group3" placeholder="Email">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default" data-toggle="dropdown" type="button"><span class="caret"></span></button>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li class="dropdown-header">Profile</li>
                                            <li>
                                                <a tabindex="-1" href="javascript:void(0)"><span class="badge pull-right">3</span>News</a>
                                            </li>
                                            <li>
                                                <a tabindex="-1" href="javascript:void(0)"><span class="badge pull-right">1</span>Messages</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <div class="input-group-btn dropup">
                                        <button class="btn btn-default" data-toggle="dropdown" type="button"><span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-header">Profile</li>
                                            <li>
                                                <a tabindex="-1" href="javascript:void(0)"><span class="badge pull-right">3</span>News</a>
                                            </li>
                                            <li>
                                                <a tabindex="-1" href="javascript:void(0)"><span class="badge pull-right">1</span>Messages</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li class="dropdown-header">More</li>
                                            <li>
                                                <a tabindex="-1" href="javascript:void(0)">Edit Profile..</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <input class="form-control" type="text" id="example-input3-group3" name="example-input3-group3" placeholder="..">
                                    <div class="input-group-btn dropup">
                                        <button class="btn btn-default" data-toggle="dropdown" type="button"><span class="caret"></span></button>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li class="dropdown-header">Profile</li>
                                            <li>
                                                <a tabindex="-1" href="javascript:void(0)"><span class="badge pull-right">3</span>News</a>
                                            </li>
                                            <li>
                                                <a tabindex="-1" href="javascript:void(0)"><span class="badge pull-right">1</span>Messages</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li class="dropdown-header">More</li>
                                            <li>
                                                <a tabindex="-1" href="javascript:void(0)">Edit Profile..</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
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
            <!-- END Dropdown Groups -->
        </div>
    </div>
    <!-- END Bootstrap Design -->

    <!-- CSS Switches -->
    <!-- They are native checkboxes styled with CSS, JavaScript code is not used. You can enable/disable/toggle them as usual. -->
    <h2 class="content-heading">CSS Switches</h2>
    <div class="row">
        <div class="col-lg-4">
            <!-- Colors -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Colors</h3>
                </div>
                <div class="block-content">
                    <div class="row items-push">
                        <div class="col-xs-6">
                            <label class="css-input switch switch-default">
                                <input type="checkbox" checked><span></span> Default
                            </label>
                        </div>
                        <div class="col-xs-6">
                            <label class="css-input switch switch-primary">
                                <input type="checkbox" checked><span></span> Primary
                            </label>
                        </div>
                        <div class="col-xs-6">
                            <label class="css-input switch switch-info">
                                <input type="checkbox" checked><span></span> Info
                            </label>
                        </div>
                        <div class="col-xs-6">
                            <label class="css-input switch switch-success">
                                <input type="checkbox" checked><span></span> Success
                            </label>
                        </div>
                        <div class="col-xs-6">
                            <label class="css-input switch switch-warning">
                                <input type="checkbox" checked><span></span> Warning
                            </label>
                        </div>
                        <div class="col-xs-6">
                            <label class="css-input switch switch-danger">
                                <input type="checkbox" checked><span></span> Danger
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Colors -->
        </div>
        <div class="col-lg-4">
            <!-- Sizes -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Sizes</h3>
                </div>
                <div class="block-content">
                    <div class="row items-push">
                        <div class="col-xs-6">
                            <label class="css-input switch switch-sm switch-default">
                                <input type="checkbox" checked><span></span> Small
                            </label>
                        </div>
                        <div class="col-xs-6">
                            <label class="css-input switch switch-sm switch-primary">
                                <input type="checkbox" checked><span></span> Small
                            </label>
                        </div>
                        <div class="col-xs-6">
                            <label class="css-input switch switch-default">
                                <input type="checkbox" checked><span></span> Normal
                            </label>
                        </div>
                        <div class="col-xs-6">
                            <label class="css-input switch switch-primary">
                                <input type="checkbox" checked><span></span> Normal
                            </label>
                        </div>
                        <div class="col-xs-6">
                            <label class="css-input switch switch-lg switch-default">
                                <input type="checkbox" checked><span></span> Large
                            </label>
                        </div>
                        <div class="col-xs-6">
                            <label class="css-input switch switch-lg switch-primary">
                                <input type="checkbox" checked><span></span> Large
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Sizes -->
        </div>
        <div class="col-lg-4">
            <!-- Shapes -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Shapes</h3>
                </div>
                <div class="block-content">
                    <div class="row items-push">
                        <div class="col-xs-6">
                            <label class="css-input switch switch-sm switch-default">
                                <input type="checkbox" checked><span></span> Rounded
                            </label>
                        </div>
                        <div class="col-xs-6">
                            <label class="css-input switch switch-square switch-sm switch-default">
                                <input type="checkbox" checked><span></span> Square
                            </label>
                        </div>
                        <div class="col-xs-6">
                            <label class="css-input switch switch-default">
                                <input type="checkbox" checked><span></span> Rounded
                            </label>
                        </div>
                        <div class="col-xs-6">
                            <label class="css-input switch switch-square switch-default">
                                <input type="checkbox" checked><span></span> Square
                            </label>
                        </div>
                        <div class="col-xs-6">
                            <label class="css-input switch switch-lg switch-default">
                                <input type="checkbox" checked><span></span> Rounded
                            </label>
                        </div>
                        <div class="col-xs-6">
                            <label class="css-input switch switch-square switch-lg switch-default">
                                <input type="checkbox" checked><span></span> Square
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Shapes -->
        </div>
    </div>
    <!-- END CSS Switches -->

    <!-- CSS Radios -->
    <!-- They are native radios styled with CSS, JavaScript code is not used. You can enable/disable/toggle them as usual. -->
    <h2 class="content-heading">CSS Radios</h2>
    <div class="row">
        <div class="col-lg-6">
            <!-- Colors -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Colors</h3>
                </div>
                <div class="block-content">
                    <div class="row items-push">
                        <div class="col-xs-6">
                            <label class="css-input css-radio css-radio-default push-10-r">
                                <input type="radio" name="radio-group1" checked><span></span> Yes
                            </label>
                            <label class="css-input css-radio css-radio-default">
                                <input type="radio" name="radio-group1"><span></span> No
                            </label>
                        </div>
                        <div class="col-xs-6">
                            <label class="css-input css-radio css-radio-primary push-10-r">
                                <input type="radio" name="radio-group2" checked><span></span> Yes
                            </label>
                            <label class="css-input css-radio css-radio-primary">
                                <input type="radio" name="radio-group2"><span></span> No
                            </label>
                        </div>
                        <div class="col-xs-6">
                            <label class="css-input css-radio css-radio-info push-10-r">
                                <input type="radio" name="radio-group3" checked><span></span> Yes
                            </label>
                            <label class="css-input css-radio css-radio-info">
                                <input type="radio" name="radio-group3"><span></span> No
                            </label>
                        </div>
                        <div class="col-xs-6">
                            <label class="css-input css-radio css-radio-success push-10-r">
                                <input type="radio" name="radio-group4" checked><span></span> Yes
                            </label>
                            <label class="css-input css-radio css-radio-success">
                                <input type="radio" name="radio-group4"><span></span> No
                            </label>
                        </div>
                        <div class="col-xs-6">
                            <label class="css-input css-radio css-radio-warning push-10-r">
                                <input type="radio" name="radio-group5" checked><span></span> Yes
                            </label>
                            <label class="css-input css-radio css-radio-warning">
                                <input type="radio" name="radio-group5"><span></span> No
                            </label>
                        </div>
                        <div class="col-xs-6">
                            <label class="css-input css-radio css-radio-danger push-10-r">
                                <input type="radio" name="radio-group6" checked><span></span> Yes
                            </label>
                            <label class="css-input css-radio css-radio-danger">
                                <input type="radio" name="radio-group6"><span></span> No
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Colors -->
        </div>
        <div class="col-lg-6">
            <!-- Sizes -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Sizes</h3>
                </div>
                <div class="block-content">
                    <div class="row items-push">
                        <div class="col-xs-6">
                            <label class="css-input css-radio css-radio-sm css-radio-default push-10-r">
                                <input type="radio" name="radio-group7" checked><span></span> Agree
                            </label>
                            <label class="css-input css-radio css-radio-sm css-radio-default">
                                <input type="radio" name="radio-group7"><span></span> Disagree
                            </label>
                        </div>
                        <div class="col-xs-6">
                            <label class="css-input css-radio css-radio-sm css-radio-primary push-10-r">
                                <input type="radio" name="radio-group8" checked><span></span> Agree
                            </label>
                            <label class="css-input css-radio css-radio-sm css-radio-primary">
                                <input type="radio" name="radio-group8"><span></span> Disagree
                            </label>
                        </div>
                        <div class="col-xs-6">
                            <label class="css-input css-radio css-radio-default push-10-r">
                                <input type="radio" name="radio-group9" checked><span></span> Agree
                            </label>
                            <label class="css-input css-radio css-radio-default">
                                <input type="radio" name="radio-group9"><span></span> Disagree
                            </label>
                        </div>
                        <div class="col-xs-6">
                            <label class="css-input css-radio css-radio-primary push-10-r">
                                <input type="radio" name="radio-group10" checked><span></span> Agree
                            </label>
                            <label class="css-input css-radio css-radio-primary">
                                <input type="radio" name="radio-group10"><span></span> Disagree
                            </label>
                        </div>
                        <div class="col-xs-6">
                            <label class="css-input css-radio css-radio-lg css-radio-default push-10-r">
                                <input type="radio" name="radio-group11" checked><span></span> Agree
                            </label>
                            <label class="css-input css-radio css-radio-lg css-radio-default">
                                <input type="radio" name="radio-group11"><span></span> Disagree
                            </label>
                        </div>
                        <div class="col-xs-6">
                            <label class="css-input css-radio css-radio-lg css-radio-primary push-10-r">
                                <input type="radio" name="radio-group12" checked><span></span> Agree
                            </label>
                            <label class="css-input css-radio css-radio-lg css-radio-primary">
                                <input type="radio" name="radio-group12"><span></span> Disagree
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Sizes -->
        </div>
    </div>
    <!-- END CSS Radios -->

    <!-- CSS Checkboxes -->
    <!-- They are native checkboxes styled with CSS, JavaScript code is not used. You can enable/disable/toggle them as usual. -->
    <h2 class="content-heading">CSS Checkboxes</h2>
    <div class="row">
        <div class="col-lg-4">
            <!-- Colors -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Colors</h3>
                </div>
                <div class="block-content">
                    <div class="row items-push">
                        <div class="col-xs-6">
                            <label class="css-input css-checkbox css-checkbox-default">
                                <input type="checkbox" checked><span></span> Default
                            </label>
                        </div>
                        <div class="col-xs-6">
                            <label class="css-input css-checkbox css-checkbox-primary">
                                <input type="checkbox" checked><span></span> Primary
                            </label>
                        </div>
                        <div class="col-xs-6">
                            <label class="css-input css-checkbox css-checkbox-info">
                                <input type="checkbox" checked><span></span> Info
                            </label>
                        </div>
                        <div class="col-xs-6">
                            <label class="css-input css-checkbox css-checkbox-success">
                                <input type="checkbox" checked><span></span> Success
                            </label>
                        </div>
                        <div class="col-xs-6">
                            <label class="css-input css-checkbox css-checkbox-warning">
                                <input type="checkbox" checked><span></span> Warning
                            </label>
                        </div>
                        <div class="col-xs-6">
                            <label class="css-input css-checkbox css-checkbox-danger">
                                <input type="checkbox" checked><span></span> Danger
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Colors -->
        </div>
        <div class="col-lg-4">
            <!-- Sizes -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Sizes</h3>
                </div>
                <div class="block-content">
                    <div class="row items-push">
                        <div class="col-xs-6">
                            <label class="css-input css-checkbox css-checkbox-sm css-checkbox-default">
                                <input type="checkbox" checked><span></span> Small
                            </label>
                        </div>
                        <div class="col-xs-6">
                            <label class="css-input css-checkbox css-checkbox-sm css-checkbox-primary">
                                <input type="checkbox" checked><span></span> Small
                            </label>
                        </div>
                        <div class="col-xs-6">
                            <label class="css-input css-checkbox css-checkbox-default">
                                <input type="checkbox" checked><span></span> Normal
                            </label>
                        </div>
                        <div class="col-xs-6">
                            <label class="css-input css-checkbox css-checkbox-primary">
                                <input type="checkbox" checked><span></span> Normal
                            </label>
                        </div>
                        <div class="col-xs-6">
                            <label class="css-input css-checkbox css-checkbox-lg css-checkbox-default">
                                <input type="checkbox" checked><span></span> Large
                            </label>
                        </div>
                        <div class="col-xs-6">
                            <label class="css-input css-checkbox css-checkbox-lg css-checkbox-primary">
                                <input type="checkbox" checked><span></span> Large
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Sizes -->
        </div>
        <div class="col-lg-4">
            <!-- Shapes -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Shapes</h3>
                </div>
                <div class="block-content">
                    <div class="row items-push">
                        <div class="col-xs-6">
                            <label class="css-input css-checkbox css-checkbox-sm css-checkbox-default">
                                <input type="checkbox" checked><span></span> Square
                            </label>
                        </div>
                        <div class="col-xs-6">
                            <label class="css-input css-checkbox css-checkbox-rounded css-checkbox-sm css-checkbox-default">
                                <input type="checkbox" checked><span></span> Rounded
                            </label>
                        </div>
                        <div class="col-xs-6">
                            <label class="css-input css-checkbox css-checkbox-default">
                                <input type="checkbox" checked><span></span> Square
                            </label>
                        </div>
                        <div class="col-xs-6">
                            <label class="css-input css-checkbox css-checkbox-rounded css-checkbox-default">
                                <input type="checkbox" checked><span></span> Rounded
                            </label>
                        </div>
                        <div class="col-xs-6">
                            <label class="css-input css-checkbox css-checkbox-lg css-checkbox-default">
                                <input type="checkbox" checked><span></span> Square
                            </label>
                        </div>
                        <div class="col-xs-6">
                            <label class="css-input css-checkbox css-checkbox-rounded css-checkbox-lg css-checkbox-default">
                                <input type="checkbox" checked><span></span> Rounded
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Shapes -->
        </div>
    </div>
    <!-- END CSS Checkboxes -->
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>
<?php require 'inc/views/template_footer_end.php'; ?>