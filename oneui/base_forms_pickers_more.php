<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/bootstrap-datepicker/bootstrap-datepicker3.min.css">
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/select2/select2.min.css">
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/select2/select2-bootstrap.css">
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/dropzonejs/dropzone.min.css">
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/jquery-tags-input/jquery.tagsinput.min.css">

<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-8">
            <h1 class="page-heading">
                Pickers &amp; More <small>Carefully integrated JS plugins that will enhance your forms with great features.</small>
            </h1>
        </div>
        <div class="col-sm-4 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>Forms</li>
                <li><a class="link-effect" href="">Pickers &amp; More</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content content-narrow">
    <!-- Datepicker -->
    <!-- Bootstrap Datepicker (.js-datepicker and .input-daterange class is initialized in App() -> uiHelperDatepicker()) -->
    <!-- For more info and examples you can check out https://github.com/eternicode/bootstrap-datepicker -->
    <h2 class="content-heading">Bootstrap Datepicker</h2>
    <div class="row">
        <div class="col-lg-6">
            <!-- Datepicker (Default forms) -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Default</h3>
                </div>
                <div class="block-content block-content-narrow">
                    <form class="form-horizontal" action="base_forms_pickers_more.php" method="post" onsubmit="return false;">
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-datepicker1">Datepicker</label>
                            <div class="col-md-6">
                                <input class="js-datepicker form-control" type="text" id="example-datepicker1" name="example-datepicker1" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <input class="js-datepicker form-control" type="text" id="example-datepicker2" name="example-datepicker2" data-date-format="dd/mm/yy" placeholder="dd/mm/yy">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <input class="js-datepicker form-control" type="text" id="example-datepicker3" name="example-datepicker3" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-daterange1">Date Range</label>
                            <div class="col-md-8">
                                <div class="input-daterange input-group" data-date-format="mm/dd/yyyy">
                                    <input class="form-control" type="text" id="example-daterange1" name="example-daterange1" placeholder="From">
                                    <span class="input-group-addon"><i class="fa fa-chevron-right"></i></span>
                                    <input class="form-control" type="text" id="example-daterange2" name="example-daterange2" placeholder="To">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Inline Datepicker</label>
                            <div class="col-md-8">
                                <div class="js-datepicker"></div>
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
            <!-- END Datepicker (Default forms) -->
        </div>
        <div class="col-lg-6">
            <!-- Datepicker (Material forms) -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Material</h3>
                </div>
                <div class="block-content block-content-narrow">
                    <form class="form-horizontal push-10-t" action="base_forms_pickers_more.php" method="post" onsubmit="return false;">
                        <div class="form-group">
                            <div class="col-md-8">
                                <div class="form-material">
                                    <input class="js-datepicker form-control" type="text" id="example-datepicker4" name="example-datepicker4" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                                    <label for="example-datepicker4">Choose a date</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8">
                                <div class="form-material">
                                    <input class="js-datepicker form-control" type="text" id="example-datepicker5" name="example-datepicker5" data-date-format="dd/mm/yy" placeholder="dd/mm/yy">
                                    <label for="example-datepicker5">Choose a date</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8">
                                <div class="form-material">
                                    <input class="js-datepicker form-control" type="text" id="example-datepicker6" name="example-datepicker6" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">
                                    <label for="example-datepicker6">Choose a date</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Datepicker (Material forms) -->
        </div>
    </div>
    <!-- END Datepicker -->

    <!-- Colorpicker -->
    <!-- Bootstrap Colorpicker (.js-colorpicker class is initialized in App() -> uiHelperColorpicker()) -->
    <!-- For more info and examples you can check out http://mjolnic.com/bootstrap-colorpicker/ -->
    <h2 class="content-heading">Bootstrap Colorpicker</h2>
    <div class="row">
        <div class="col-lg-6">
            <!-- Colorpicker (Default forms) -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Default</h3>
                </div>
                <div class="block-content block-content-narrow">
                    <form class="form-horizontal" action="base_forms_pickers_more.php" method="post" onsubmit="return false;">
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-colorpicker1">Normal</label>
                            <div class="col-md-6">
                                <input class="js-colorpicker form-control" type="text" id="example-colorpicker1" name="example-colorpicker1" value="#5c90d2">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-colorpicker2">As Component</label>
                            <div class="col-md-6">
                                <div class="js-colorpicker input-group">
                                    <input class="form-control" type="text" id="example-colorpicker2" name="example-colorpicker2" value="#5c90d2">
                                    <span class="input-group-addon"><i></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-colorpicker3">RGBa</label>
                            <div class="col-md-6">
                                <input class="js-colorpicker form-control" data-colorpicker-mode="rgba" type="text" id="example-colorpicker3" name="example-colorpicker3" value="#5c90d2">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-colorpicker4">RGBa (component)</label>
                            <div class="col-md-6">
                                <div class="js-colorpicker input-group" data-colorpicker-mode="rgba">
                                    <input class="form-control" type="text" id="example-colorpicker4" name="example-colorpicker4" value="#5c90d2">
                                    <span class="input-group-addon"><i></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Inline</label>
                            <div class="col-md-6">
                                <div class="js-colorpicker" id="color-container" data-container="#color-container" data-colorpicker-inline="true" data-color="#5c90d2"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Inline (component)</label>
                            <div class="col-md-6">
                                <div class="js-colorpicker" id="color-container2" data-container="#color-container2" data-colorpicker-mode="rgba" data-colorpicker-inline="true" data-color="#5c90d2"></div>
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
            <!-- END Colorpicker (Default forms) -->
        </div>
        <div class="col-lg-6">
            <!-- Colorpicker (Material forms) -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Material</h3>
                </div>
                <div class="block-content block-content-narrow">
                    <form class="form-horizontal push-10-t" action="base_forms_pickers_more.php" method="post" onsubmit="return false;">
                        <div class="form-group">
                            <div class="col-md-8">
                                <div class="form-material">
                                    <input class="js-colorpicker form-control" type="text" id="example-colorpicker5" name="example-colorpicker5" value="#5c90d2">
                                    <label for="example-colorpicker5">Choose a color</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8">
                                <div class="form-material">
                                    <input class="js-colorpicker form-control" data-colorpicker-mode="rgba" type="text" id="example-colorpicker6" name="example-colorpicker6" value="#5c90d2">
                                    <label for="example-colorpicker6">Choose a color (RGBa)</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Colorpicker (Material forms) -->
        </div>
    </div>
    <!-- END Colorpicker -->

    <!-- Select2 -->
    <!-- Select2 (.js-select2 class is initialized in App() -> uiHelperSelect2()) -->
    <!-- For more info and examples you can check out https://github.com/select2/select2 -->
    <h2 class="content-heading">Select2</h2>
    <div class="row">
        <div class="col-lg-6">
            <!-- Select2 (Default forms) -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Default</h3>
                </div>
                <div class="block-content block-content-narrow">
                    <form class="form-horizontal" action="base_forms_pickers_more.php" method="post" onsubmit="return false;">
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-select2">Normal</label>
                            <div class="col-md-8">
                                <select class="js-select2 form-control" id="example-select2" name="example-select2" style="width: 100%;" data-placeholder="Choose one..">
                                    <option></option><!-- Required for data-placeholder attribute to work with Chosen plugin -->
                                    <option value="1">HTML</option>
                                    <option value="2">CSS</option>
                                    <option value="3">Javascript</option>
                                    <option value="4">PHP</option>
                                    <option value="5">MySQL</option>
                                    <option value="6">Ruby</option>
                                    <option value="7">AngularJS</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-select2-multiple">Multiple Values</label>
                            <div class="col-md-8">
                                <select class="js-select2 form-control" id="example-select2-multiple" name="example-select2-multiple" style="width: 100%;" data-placeholder="Choose many.." multiple>
                                    <option></option><!-- Required for data-placeholder attribute to work with Chosen plugin -->
                                    <option value="1">HTML</option>
                                    <option value="2">CSS</option>
                                    <option value="3">Javascript</option>
                                    <option value="4">PHP</option>
                                    <option value="5">MySQL</option>
                                    <option value="6">Ruby</option>
                                    <option value="7">AngularJS</option>
                                </select>
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
            <!-- END Select2 (Default forms) -->
        </div>
        <div class="col-lg-6">
            <!-- Select2 (Material forms) -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Material</h3>
                </div>
                <div class="block-content block-content-narrow">
                    <form class="form-horizontal push-10-t" action="base_forms_pickers_more.php" method="post" onsubmit="return false;">
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material">
                                    <select class="js-select2 form-control" id="example2-select2" name="example2-select2" style="width: 100%;" data-placeholder="Choose one..">
                                        <option></option><!-- Required for data-placeholder attribute to work with Chosen plugin -->
                                        <option value="1">HTML</option>
                                        <option value="2">CSS</option>
                                        <option value="3">Javascript</option>
                                        <option value="4">PHP</option>
                                        <option value="5">MySQL</option>
                                        <option value="6">Ruby</option>
                                        <option value="7">AngularJS</option>
                                    </select>
                                    <label for="example2-select2">Normal</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material">
                                    <select class="js-select2 form-control" id="example2-select2-multiple" name="example2-select2-multiple" style="width: 100%;" data-placeholder="Choose many.." multiple>
                                        <option></option><!-- Required for data-placeholder attribute to work with Chosen plugin -->
                                        <option value="1">HTML</option>
                                        <option value="2">CSS</option>
                                        <option value="3">Javascript</option>
                                        <option value="4">PHP</option>
                                        <option value="5">MySQL</option>
                                        <option value="6">Ruby</option>
                                        <option value="7">AngularJS</option>
                                    </select>
                                    <label for="example2-select2-multiple">Multiple Values</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Select2 (Material forms) -->
        </div>
    </div>
    <!-- END Select2 -->

    <!-- Masked Inputs -->
    <!-- Masked Inputs (.js-masked-* classes are initialized in App() -> uiHelperMaskedInputs()) -->
    <!-- For more info and examples you can check out http://digitalbush.com/projects/masked-input-plugin/ -->
    <h2 class="content-heading">Masked Inputs</h2>
    <div class="row">
        <div class="col-lg-6">
            <!-- Masked Inputs (Bootstrap forms) -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Default</h3>
                </div>
                <div class="block-content">
                    <form class="form-horizontal" action="base_forms_pickers_more.php" method="post" onsubmit="return false;">
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-masked-date1">Date (format 1)</label>
                            <div class="col-md-6">
                                <input class="js-masked-date form-control" type="text" id="example-masked-date1" name="example-masked-date1" placeholder="dd/mm/yyyy">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-masked-date2">Date (format 2)</label>
                            <div class="col-md-6">
                                <input class="js-masked-date-dash form-control" type="text" id="example-masked-date2" name="example-masked-date2" placeholder="dd-mm-yyyy">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-masked-phone">Phone</label>
                            <div class="col-md-6">
                                <input class="js-masked-phone form-control" type="text" id="example-masked-phone" name="example-masked-phone" placeholder="(999) 999-9999">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-masked-phone-ext">Phone (Ext)</label>
                            <div class="col-md-6">
                                <input class="js-masked-phone-ext form-control" type="text" id="example-masked-phone-ext" name="example-masked-phone-ext" placeholder="(999) 999-9999? x99999">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-masked-taxid">Tax ID</label>
                            <div class="col-md-6">
                                <input class="js-masked-taxid form-control" type="text" id="example-masked-taxid" name="example-masked-taxid" placeholder="99-9999999">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-masked-ssn">SSN</label>
                            <div class="col-md-6">
                                <input class="js-masked-ssn form-control" type="text" id="example-masked-ssn" name="example-masked-ssn" placeholder="999-99-9999">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-masked-pkey">Product Key</label>
                            <div class="col-md-6">
                                <input class="js-masked-pkey form-control" type="text" id="example-masked-pkey" name="example-masked-pkey" placeholder="a*-999-a999">
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
            <!-- END Masked Inputs (Bootstrap forms) -->
        </div>
        <div class="col-lg-6">
            <!-- Masked Inputs (Material forms) -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Material</h3>
                </div>
                <div class="block-content">
                    <form class="form-horizontal push-10-t" action="base_forms_pickers_more.php" method="post" onsubmit="return false;">
                        <div class="form-group">
                            <div class="col-md-8">
                                <div class="form-material">
                                    <input class="js-masked-date form-control" type="text" id="example-masked2-date1" name="example-masked2-date1" placeholder="dd/mm/yyyy">
                                    <label for="example-masked2-date1">Date (format 1)</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8">
                                <div class="form-material">
                                    <input class="js-masked-date-dash form-control" type="text" id="example-masked2-date2" name="example-masked2-date2" placeholder="dd-mm-yyyy">
                                    <label for="example-masked2-date2">Date (format 2)</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8">
                                <div class="form-material floating">
                                    <input class="js-masked-phone form-control" type="text" id="example-masked2-phone" name="example-masked2-phone">
                                    <label for="example-masked2-phone">Phone <small class="text-muted">(999) 999-9999</small></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8">
                                <div class="form-material floating">
                                    <input class="js-masked-phone-ext form-control" type="text" id="example-masked2-phone-ext" name="example-masked2-phone-ext">
                                    <label for="example-masked2-phone-ext">Phone (Ext) <small class="text-muted">(999) 999-9999? x99999</small></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8">
                                <div class="form-material floating">
                                    <input class="js-masked-pkey form-control" type="text" id="example-masked2-pkey" name="example-masked2-pkey">
                                    <label for="example-masked2-pkey">Product Key <small class="text-muted">a*-999-a999</small></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Masked Inputs (Material forms) -->
        </div>
    </div>
    <!-- END Masked Inputs -->

    <!-- DropzoneJS and Tags Input -->
    <div class="row">
        <div class="col-lg-6">
            <!-- DropzoneJS -->
            <!-- For more info and examples you can check out http://www.dropzonejs.com/#usage -->
            <h2 class="content-heading">DropzoneJS</h2>
            <div class="block">
                <div class="block-content block-content-full">
                    <!-- DropzoneJS Container -->
                    <form class="dropzone" action="base_forms_pickers_more.php"></form>
                </div>
            </div>
            <!-- END DropzoneJS -->
        </div>
        <div class="col-lg-6">
            <!-- jQuery Tags Input -->
            <!-- jQuery Tags Input (.js-tags-input class is initialized in App() -> uiHelperTagsInput()) -->
            <!-- For more info and examples you can check out https://github.com/xoxco/jQuery-Tags-Input -->
            <h2 class="content-heading">jQuery Tags Input</h2>
            <div class="block">
                <div class="block-content">
                    <form class="form-horizontal" action="base_forms_pickers_more.php" method="post" onsubmit="return false;">
                        <div class="form-group">
                            <label class="col-xs-12" for="example-tags1">Normal</label>
                            <div class="col-xs-12">
                                <input class="js-tags-input form-control" type="text" id="example-tags1" name="example-tags1" value="HTML,CSS,JavaScript">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material">
                                    <input class="js-tags-input form-control" type="text" id="example-tags2" name="example-tags2" value="HTML,CSS,JavaScript">
                                    <label for="example-tags2">Material tags</label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END jQuery Tags Input -->
        </div>
    </div>
    <!-- END DropzoneJS and Tags Input -->
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>

<!-- Page JS Plugins -->
<script src="<?php echo $one->assets_folder; ?>/js/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/select2/select2.full.min.js"></script>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/masked-inputs/jquery.maskedinput.min.js"></script>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/dropzonejs/dropzone.min.js"></script>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/jquery-tags-input/jquery.tagsinput.min.js"></script>

<!-- Page JS Code -->
<script>
    $(function(){
        // Init page helpers (BS Datepicker + BS Colorpicker + Select2 + Masked Input + Tags Inputs plugins)
        App.initHelpers(['datepicker', 'colorpicker', 'select2', 'masked-inputs', 'tags-inputs']);
    });
</script>

<?php require 'inc/views/template_footer_end.php'; ?>