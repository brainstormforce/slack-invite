<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">
                Activity <small>Vital UI components for your project.</small>
            </h1>
        </div>
        <div class="col-sm-5 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>UI Elements</li>
                <li><a class="link-effect" href="">Activity</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content">
    <!-- Alerts -->
    <div class="block">
        <div class="block-header">
            <h3 class="block-title">Alerts</h3>
        </div>
        <div class="block-content">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <!-- Success Alert -->
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h3 class="font-w300 push-15">Success</h3>
                        <p>The <a class="alert-link" href="javascript:void(0)">App</a> was updated!</p>
                    </div>
                    <!-- END Success Alert -->
                </div>
                <div class="col-sm-6 col-lg-3">
                    <!-- Info Alert -->
                    <div class="alert alert-info alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h3 class="font-w300 push-15">Information</h3>
                        <p>Information <a class="alert-link" href="javascript:void(0)">message</a>!</p>
                    </div>
                    <!-- END Info Alert -->
                </div>
                <div class="col-sm-6 col-lg-3">
                    <!-- Warning Alert -->
                    <div class="alert alert-warning alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h3 class="font-w300 push-15">Warning</h3>
                        <p>Please pay <a class="alert-link" href="javascript:void(0)">attention</a>!</p>
                    </div>
                    <!-- END Warning Alert -->
                </div>
                <div class="col-sm-6 col-lg-3">
                    <!-- Danger Alert -->
                    <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h3 class="font-w300 push-15">Error</h3>
                        <p>Opps, an error <a class="alert-link" href="javascript:void(0)">occured</a>!</p>
                    </div>
                    <!-- END Danger Alert -->
                </div>
            </div>
        </div>
    </div>
    <!-- END Alerts -->

    <!-- Notifications (.js-notify class is initialized in App() -> uiHelperNotify()) -->
    <div class="block">
        <div class="block-header">
            <h3 class="block-title">Notifications</h3>
        </div>
        <div class="block-content">
            <div class="row items-push">
                <div class="col-sm-6 col-lg-4">
                    <h4 class="h5 push-15">Top Right</h4>
                    <button class="js-notify btn btn-sm btn-info" data-notify-type="info" data-notify-icon="fa fa-info-circle" data-notify-message="Congrats! You've reached level 12!">Info</button>
                    <button class="js-notify btn btn-sm btn-success" data-notify-type="success" data-notify-icon="fa fa-check" data-notify-message="App was updated successfully to 1.2 version">Success</button>
                    <button class="js-notify btn btn-sm btn-warning" data-notify-type="warning" data-notify-icon="fa fa-warning" data-notify-message="Please make a backup before updating!">Warning</button>
                    <button class="js-notify btn btn-sm btn-danger" data-notify-type="danger" data-notify-icon="fa fa-times" data-notify-message="Update failed! :-(">Error</button>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <h4 class="h5 push-15">Top Left</h4>
                    <button class="js-notify btn btn-sm btn-sm btn-info" data-notify-type="info" data-notify-align="left" data-notify-icon="fa fa-info-circle" data-notify-message="Congrats! You've reached level 12!">Info</button>
                    <button class="js-notify btn btn-sm btn-sm btn-success" data-notify-type="success" data-notify-align="left" data-notify-icon="fa fa-check" data-notify-message="App was updated successfully to 1.2 version">Success</button>
                    <button class="js-notify btn btn-sm btn-warning" data-notify-type="warning" data-notify-align="left" data-notify-icon="fa fa-warning" data-notify-message="Please make a backup before updating!">Warning</button>
                    <button class="js-notify btn btn-sm btn-danger" data-notify-type="danger" data-notify-align="left" data-notify-icon="fa fa-times" data-notify-message="Update failed! :-(">Error</button>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <h4 class="h5 push-15">Top Center</h4>
                    <button class="js-notify btn btn-sm btn-info" data-notify-type="info" data-notify-align="center" data-notify-icon="fa fa-info-circle" data-notify-message="Congrats! You've reached level 12!">Info</button>
                    <button class="js-notify btn btn-sm btn-success" data-notify-type="success" data-notify-align="center" data-notify-icon="fa fa-check" data-notify-message="App was updated successfully to 1.2 version">Success</button>
                    <button class="js-notify btn btn-sm btn-warning" data-notify-type="warning" data-notify-align="center" data-notify-icon="fa fa-warning" data-notify-message="Please make a backup before updating!">Warning</button>
                    <button class="js-notify btn btn-sm btn-danger" data-notify-type="danger" data-notify-align="center" data-notify-icon="fa fa-times" data-notify-message="Update failed! :-(">Error</button>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <h4 class="h5 push-15">Bottom Right</h4>
                    <button class="js-notify btn btn-sm btn-info" data-notify-type="info" data-notify-from="bottom" data-notify-icon="fa fa-info-circle" data-notify-message="Congrats! You've reached level 12!">Info</button>
                    <button class="js-notify btn btn-sm btn-success" data-notify-type="success" data-notify-from="bottom" data-notify-icon="fa fa-check" data-notify-message="App was updated successfully to 1.2 version">Success</button>
                    <button class="js-notify btn btn-sm btn-warning" data-notify-type="warning" data-notify-from="bottom" data-notify-icon="fa fa-warning" data-notify-message="Please make a backup before updating!">Warning</button>
                    <button class="js-notify btn btn-sm btn-danger" data-notify-type="danger" data-notify-from="bottom" data-notify-icon="fa fa-times" data-notify-message="Update failed! :-(">Error</button>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <h4 class="h5 push-15">Bottom Left</h4>
                    <button class="js-notify btn btn-sm btn-info" data-notify-type="info" data-notify-from="bottom" data-notify-align="left" data-notify-icon="fa fa-info-circle" data-notify-message="Congrats! You've reached level 12!">Info</button>
                    <button class="js-notify btn btn-sm btn-success" data-notify-type="success" data-notify-from="bottom" data-notify-align="left" data-notify-icon="fa fa-check" data-notify-message="App was updated successfully to 1.2 version">Success</button>
                    <button class="js-notify btn btn-sm btn-warning" data-notify-type="warning" data-notify-from="bottom" data-notify-align="left" data-notify-icon="fa fa-warning" data-notify-message="Please make a backup before updating!">Warning</button>
                    <button class="js-notify btn btn-sm btn-danger" data-notify-type="danger" data-notify-from="bottom" data-notify-align="left" data-notify-icon="fa fa-times" data-notify-message="Update failed! :-(">Error</button>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <h4 class="h5 push-15">Bottom Center</h4>
                    <button class="js-notify btn btn-sm btn-info" data-notify-type="info" data-notify-from="bottom" data-notify-align="center" data-notify-icon="fa fa-info-circle" data-notify-message="Congrats! You've reached level 12!">Info</button>
                    <button class="js-notify btn btn-sm btn-success" data-notify-type="success" data-notify-from="bottom" data-notify-align="center" data-notify-icon="fa fa-check" data-notify-message="App was updated successfully to 1.2 version">Success</button>
                    <button class="js-notify btn btn-sm btn-warning" data-notify-type="warning" data-notify-from="bottom" data-notify-align="center" data-notify-icon="fa fa-warning" data-notify-message="Please make a backup before updating!">Warning</button>
                    <button class="js-notify btn btn-sm btn-danger" data-notify-type="danger" data-notify-from="bottom" data-notify-align="center" data-notify-icon="fa fa-times" data-notify-message="Update failed! :-(">Error</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END Notifications -->

    <!-- Loading Icons -->
    <div class="block">
        <div class="block-header">
            <h3 class="block-title">Loading Icons</h3>
        </div>
        <div class="block-content">
            <p class="push-50">You can create a loading indicator by adding the class <code>fa-spin</code> to any icon. Combining it with size classes and colors, you can get a lot of variations.</p>
            <div class="row items-push-3x text-center">
                <div class="col-xs-6 col-sm-3">
                    <i class="fa fa-sun-o fa-spin"></i>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <i class="fa fa-2x fa-sun-o fa-spin"></i>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <i class="fa fa-3x fa-sun-o fa-spin"></i>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <i class="fa fa-4x fa-sun-o fa-spin text-danger"></i>
                </div>
            </div>
            <div class="row items-push-3x text-center">
                <div class="col-xs-6 col-sm-3">
                    <i class="fa fa-cog fa-spin"></i>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <i class="fa fa-2x fa-cog fa-spin"></i>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <i class="fa fa-3x fa-cog fa-spin"></i>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <i class="fa fa-4x fa-cog fa-spin text-warning"></i>
                </div>
            </div>
            <div class="row items-push-3x text-center">
                <div class="col-xs-6 col-sm-3">
                    <i class="fa fa-asterisk fa-spin"></i>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <i class="fa fa-2x fa-asterisk fa-spin"></i>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <i class="fa fa-3x fa-asterisk fa-spin"></i>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <i class="fa fa-4x fa-asterisk fa-spin text-success"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- END Loading Icons -->

    <!-- Progress -->
    <!-- Randomize Values Buttons (.js-bar-randomize class is initialized in js/pages/base_ui_activity.js) -->
    <div class="row">
        <div class="col-lg-6">
            <!-- Progress Normal -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button class="js-bar-randomize" type="button" data-toggle="tooltip" title="Randomize"><i class="fa fa-random"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Progress <small>Normal</small></h3>
                </div>
                <div class="block-content">
                    <div class="progress">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">30%</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">50%</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">70%</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">90%</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">100%</div>
                    </div>
                </div>
            </div>
            <!-- END Progress Normal -->
        </div>
        <div class="col-lg-6">
            <!-- Progress Striped -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button class="js-bar-randomize" type="button" data-toggle="tooltip" title="Randomize"><i class="fa fa-random"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Progress <small>Striped</small></h3>
                </div>
                <div class="block-content">
                    <div class="progress">
                        <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">30%</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">50%</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">70%</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">90%</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">100%</div>
                    </div>
                </div>
            </div>
            <!-- END Progress Striped -->
        </div>
        <div class="col-lg-6">
            <!-- Progress Animated -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button class="js-bar-randomize" type="button" data-toggle="tooltip" title="Randomize"><i class="fa fa-random"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Progress <small>Animated</small></h3>
                </div>
                <div class="block-content">
                    <div class="progress active">
                        <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">30%</div>
                    </div>
                    <div class="progress active">
                        <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">50%</div>
                    </div>
                    <div class="progress active">
                        <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">70%</div>
                    </div>
                    <div class="progress active">
                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">90%</div>
                    </div>
                    <div class="progress active">
                        <div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">100%</div>
                    </div>
                </div>
            </div>
            <!-- END Progress Animated -->
        </div>
        <div class="col-lg-6">
            <!-- Progress Mini -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button class="js-bar-randomize" type="button" data-toggle="tooltip" title="Randomize"><i class="fa fa-random"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Progress <small>Mini</small></h3>
                </div>
                <div class="block-content">
                    <div class="progress progress-mini">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%"></div>
                    </div>
                    <div class="progress progress-mini">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
                    </div>
                    <div class="progress progress-mini">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                    </div>
                    <div class="progress progress-mini">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%"></div>
                    </div>
                    <div class="progress progress-mini">
                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                    </div>
                    <div class="progress progress-mini">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%"></div>
                    </div>
                    <div class="progress progress-mini">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                    </div>
                    <div class="progress progress-mini">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
                    </div>
                    <div class="progress progress-mini">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%"></div>
                    </div>
                </div>
            </div>
            <!-- END Progress Mini -->
        </div>
    </div>
    <!-- END Progress -->
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>

<!-- Page JS Plugins -->
<script src="<?php echo $one->assets_folder; ?>/js/plugins/bootstrap-notify/bootstrap-notify.min.js"></script>

<!-- Page JS Code -->
<script src="<?php echo $one->assets_folder; ?>/js/pages/base_ui_activity.js"></script>
<script>
    $(function(){
        // Init page helpers (BS Notify Plugin)
        App.initHelpers('notify');
    });
</script>

<?php require 'inc/views/template_footer_end.php'; ?>