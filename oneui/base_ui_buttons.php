<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-8">
            <h1 class="page-heading">
                Buttons <small>Clickable areas that are easy to recognize but perfectly match the overall design.</small>
            </h1>
        </div>
        <div class="col-sm-4 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>UI Elements</li>
                <li><a class="link-effect" href="">Buttons</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content">
    <!-- Buttons Variations -->
    <div class="row">
        <div class="col-md-6">
            <!-- Default Buttons -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Default Buttons</h3>
                </div>
                <div class="block-content">
                    <p class="push-30">You can easily style a button or a link by adding the base class <code>btn</code> and then by applying a color variation class.</p>
                    <div class="row items-push">
                        <div class="col-xs-6 col-lg-4">
                            <button class="btn btn-minw btn-default" type="button">Default</button>
                            <div class="push-10-t">
                                <code>btn-default</code>
                            </div>
                        </div>
                        <div class="col-xs-6 col-lg-4">
                            <button class="btn btn-minw btn-primary" type="button">Primary</button>
                            <div class="push-10-t">
                                <code>btn-primary</code>
                            </div>
                        </div>
                        <div class="col-xs-6 col-lg-4">
                            <button class="btn btn-minw btn-success" type="button">Success</button>
                            <div class="push-10-t">
                                <code>btn-success</code>
                            </div>
                        </div>
                        <div class="col-xs-6 col-lg-4">
                            <button class="btn btn-minw btn-info" type="button">Info</button>
                            <div class="push-10-t">
                                <code>btn-info</code>
                            </div>
                        </div>
                        <div class="col-xs-6 col-lg-4">
                            <button class="btn btn-minw btn-warning" type="button">Warning</button>
                            <div class="push-10-t">
                                <code>btn-warning</code>
                            </div>
                        </div>
                        <div class="col-xs-6 col-lg-4">
                            <button class="btn btn-minw btn-danger" type="button">Danger</button>
                            <div class="push-10-t">
                                <code>btn-danger</code>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Default Buttons -->

            <!-- Button Sizes -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Button Sizes</h3>
                </div>
                <div class="block-content">
                    <div class="row items-push">
                        <div class="col-md-6">
                            <p>You might need various button sizes based on your content and context.</p>
                            <p>Making your buttons smaller or larger is as easy as adding an extra size variation class. It can be applied along with any other color or shape variation class to create the button that fits you best.</p>
                        </div>
                        <div class="col-md-5 col-md-offset-1">
                            <button class="btn btn-xs btn-default" type="button">Mini</button>
                            <p class="push-10-t">
                                <code>btn</code> <code>btn-xs</code>
                            </p>
                            <button class="btn btn-sm btn-default" type="button">Small</button>
                            <p class="push-10-t">
                                <code>btn</code> <code>btn-sm</code>
                            </p>
                            <button class="btn btn-default" type="button">Default</button>
                            <p class="push-10-t">
                                <code>btn</code>
                            </p>
                            <button class="btn btn-lg btn-default" type="button">Large</button>
                            <p class="push-10-t">
                                <code>btn</code> <code>btn-lg</code>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Button Sizes -->
        </div>
        <div class="col-md-6">
            <!-- Square Buttons -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Square Buttons</h3>
                </div>
                <div class="block-content">
                    <p class="push-30">You can easily have a square button by adding the <code>btn-square</code> class.</p>
                    <div class="row items-push">
                        <div class="col-sm-6 col-lg-4">
                            <button class="btn btn-minw btn-square btn-default" type="button">Default</button>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <button class="btn btn-minw btn-square btn-primary" type="button">Primary</button>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <button class="btn btn-minw btn-square btn-success" type="button">Success</button>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <button class="btn btn-minw btn-square btn-info" type="button">Info</button>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <button class="btn btn-minw btn-square btn-warning" type="button">Warning</button>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <button class="btn btn-minw btn-square btn-danger" type="button">Danger</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Square Buttons -->

            <!-- Rounded Buttons -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Rounded Buttons</h3>
                </div>
                <div class="block-content">
                    <p class="push-30">The same way, by adding the <code>btn-rounded</code> class, you can have rounded buttons.</p>
                    <div class="row items-push">
                        <div class="col-sm-6 col-lg-4">
                            <button class="btn btn-minw btn-rounded btn-default" type="button">Default</button>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <button class="btn btn-minw btn-rounded btn-primary" type="button">Primary</button>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <button class="btn btn-minw btn-rounded btn-success" type="button">Success</button>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <button class="btn btn-minw btn-rounded btn-info" type="button">Info</button>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <button class="btn btn-minw btn-rounded btn-warning" type="button">Warning</button>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <button class="btn btn-minw btn-rounded btn-danger" type="button">Danger</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Rounded Buttons -->

            <!-- Disabled Buttons -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Disabled Buttons</h3>
                </div>
                <div class="block-content">
                    <p class="push-30">If you need to disable a button, just add the <code>disabled</code> attribute.</p>
                    <div class="row items-push">
                        <div class="col-sm-6 col-lg-4">
                            <button class="btn btn-minw btn-default" type="button" disabled>Default</button>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <button class="btn btn-minw btn-primary" type="button" disabled>Primary</button>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <button class="btn btn-minw btn-success" type="button" disabled>Success</button>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <button class="btn btn-minw btn-info" type="button" disabled>Info</button>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <button class="btn btn-minw btn-warning" type="button" disabled>Warning</button>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <button class="btn btn-minw btn-danger" type="button" disabled>Danger</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Disabled Buttons -->
        </div>
    </div>
    <!-- END Buttons Variations -->

    <!-- Buttons with Icons -->
    <div class="block">
        <div class="block-header">
            <h3 class="block-title">Buttons with Icons</h3>
        </div>
        <div class="block-content">
            <div class="row items-push">
                <div class="col-md-4">
                    <p class="push-30">You can use any icon you like with your buttons! Prefer the ones that better represent the action of each button.</p>
                    <button class="btn btn-success push-5-r push-10" type="button"><i class="fa fa-plus"></i> Add User</button>
                    <button class="btn btn-info push-5-r push-10" type="button"><i class="fa fa-download"></i> Download</button>
                    <button class="btn btn-warning push-5-r push-10" type="button"><i class="fa fa-exclamation-triangle"></i> Are you sure?</button>
                    <button class="btn btn-primary push-5-r push-10" type="button"><i class="fa fa-upload"></i> Upload</button>
                    <button class="btn btn-danger push-5-r push-10" type="button"><i class="fa fa-times"></i> Delete</button>
                    <button class="btn btn-default push-5-r push-10" type="button"><i class="fa fa-wrench"></i> Fix</button>
                    <button class="btn btn-primary push-5-r push-10" type="button"><i class="fa fa-thumbs-up"></i> Like</button>
                    <button class="btn btn-default push-5-r push-10" type="button"><i class="fa fa-play"></i> Play</button>
                </div>
                <div class="col-md-4">
                    <p class="push-30">You can use icons with any button variation you want, they will adjust accordingly.</p>
                    <button class="btn btn-square btn-default push-5-r push-10" type="button"><i class="fa fa-wifi"></i> Square</button>
                    <button class="btn btn-rounded btn-danger push-5-r push-10" type="button"><i class="fa fa-times"></i> Rounded</button>
                    <button class="btn btn-success push-5-r push-10" type="button"><i class="fa fa-check"></i></button>
                    <button class="btn btn-warning push-5-r push-10" type="button"><i class="fa fa-exclamation-circle"></i></button>
                    <button class="btn btn-info push-5-r push-10" type="button"><i class="fa fa-pencil"></i></button>
                    <button class="btn btn-xs btn-default push-5-r push-10" type="button"><i class="fa fa-lock"></i> Mini</button>
                    <button class="btn btn-xs btn-default push-5-r push-10" type="button"><i class="fa fa-pencil"></i> Mini</button>
                    <button class="btn btn-sm btn-default push-5-r push-10" type="button"><i class="fa fa-support"></i> Small</button>
                    <button class="btn btn-sm btn-default push-5-r push-10" type="button"><i class="fa fa-wrench"></i> Small</button>
                    <button class="btn btn-lg btn-default push-5-r push-10" type="button"><i class="fa fa-youtube"></i> Large</button>
                    <button class="btn btn-lg btn-default push-5-r push-10" type="button"><i class="fa fa-tint"></i> Large</button>
                </div>
                <div class="col-md-4">
                    <p class="push-30">Using social icons, it is easy to create share or social login buttons.</p>
                    <button class="btn btn-block btn-primary push-10" type="button"><i class="fa fa-facebook pull-left"></i> Login with Facebook</button>
                    <button class="btn btn-block btn-danger push-10" type="button"><i class="fa fa-google-plus pull-left"></i> Login with Google+</button>
                    <button class="btn btn-block btn-info push-10" type="button"><i class="fa fa-share-alt pull-right"></i><i class="fa fa-twitter pull-left"></i> Share on Twitter</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END Buttons with Icons -->

    <!-- Buttons Dropdowns and Toolbars -->
    <div class="row">
        <div class="col-md-6">
            <!-- Button Group and Dropdowns -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Button Group and Dropdowns</h3>
                </div>
                <div class="block-content">
                    <p class="push-30">Grouping buttons or creating dropdowns is just a few lines away.</p>
                    <div class="row items-push">
                        <div class="col-lg-6">
                            <div class="btn-group">
                                <button class="btn btn-default" type="button">Dropdown</button>
                                <div class="btn-group">
                                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                        <span class="caret"></span>
                                    </button>
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
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="btn-group">
                                <button class="btn btn-default" type="button">Dropup</button>
                                <div class="btn-group dropup">
                                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                        <span class="caret"></span>
                                    </button>
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
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="btn-group" data-toggle="buttons">
                                <button class="btn btn-default" type="button">Left</button>
                                <button class="btn btn-default" type="button">Middle</button>
                                <button class="btn btn-default" type="button">Right</button>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="btn-group">
                                <button class="btn btn-default"><i class="fa fa-play"></i></button>
                                <button class="btn btn-default"><i class="fa fa-pause"></i></button>
                                <button class="btn btn-default"><i class="fa fa-stop"></i></button>
                            </div>
                        </div>
                    </div>
                    <p class="push-30-t push-30">You can also have vertical and justified button groups</p>
                    <div class="row items-push">
                        <div class="col-lg-6">
                            <div class="btn-group btn-group-vertical" data-toggle="buttons">
                                <button class="btn btn-default" type="button">Left</button>
                                <button class="btn btn-default" type="button">Middle</button>
                                <button class="btn btn-default" type="button">Right</button>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="btn-group btn-group-justified">
                                <div class="btn-group">
                                    <button class="btn btn-default" type="button"><i class="fa fa-arrow-left"></i></button>
                                </div>
                                <div class="btn-group">
                                    <button class="btn btn-default" type="button"><i class="fa fa-check"></i></button>
                                </div>
                                <div class="btn-group">
                                    <button class="btn btn-default" type="button"><i class="fa fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Button Group and Dropdowns -->
        </div>
        <div class="col-md-6">
            <!-- Toolbars -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Toolbars</h3>
                </div>
                <div class="block-content">
                    <p class="push-30">Create toolbars by using icons and buttons.</p>
                    <div class="row items-push">
                        <div class="col-xs-12">
                            <div class="btn-toolbar" role="toolbar">
                                <div class="btn-group" role="group">
                                    <button class="btn btn-default" type="button"><i class="fa fa-align-left"></i></button>
                                    <button class="btn btn-default" type="button"><i class="fa fa-align-center"></i></button>
                                    <button class="btn btn-default" type="button"><i class="fa fa-align-right"></i></button>
                                </div>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-default" type="button"><i class="fa fa-list-ul"></i></button>
                                    <button class="btn btn-default" type="button"><i class="fa fa-list-ol"></i></button>
                                </div>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                        <span class="caret"></span>
                                    </button>
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
                        <div class="col-xs-12">
                            <div class="btn-toolbar " role="toolbar">
                                <div class="btn-group" role="group">
                                    <button class="btn btn-default" type="button"><i class="fa fa-file"></i></button>
                                    <button class="btn btn-default" type="button"><i class="fa fa-floppy-o"></i></button>
                                </div>
                                <div class="btn-group" role="group" data-toggle="buttons">
                                    <button class="btn btn-default" type="button"><i class="fa fa-bold"></i></button>
                                    <button class="btn btn-default" type="button"><i class="fa fa-italic"></i></button>
                                    <button class="btn btn-default" type="button"><i class="fa fa-underline"></i></button>
                                    <button class="btn btn-default" type="button"><i class="fa fa-strikethrough"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="push-30-t push-30">You can also change toolbar’s size easily.</p>
                    <div class="btn-toolbar push" role="toolbar">
                        <div class="btn-group btn-group-sm" role="group">
                            <button class="btn btn-default" type="button"><i class="fa fa-file"></i></button>
                            <button class="btn btn-default" type="button"><i class="fa fa-floppy-o"></i></button>
                        </div>
                        <div class="btn-group btn-group-sm" role="group" data-toggle="buttons">
                            <button class="btn btn-default" type="button"><i class="fa fa-bold"></i></button>
                            <button class="btn btn-default" type="button"><i class="fa fa-italic"></i></button>
                            <button class="btn btn-default" type="button"><i class="fa fa-underline"></i></button>
                        </div>
                    </div>
                    <div class="btn-toolbar push" role="toolbar">
                        <div class="btn-group btn-group-lg" role="group">
                            <button class="btn btn-default" type="button"><i class="fa fa-file-o"></i></button>
                            <button class="btn btn-default" type="button"><i class="fa fa-floppy-o"></i></button>
                        </div>
                        <div class="btn-group btn-group-lg" role="group" data-toggle="buttons">
                            <button class="btn btn-default" type="button"><i class="fa fa-bold"></i></button>
                            <button class="btn btn-default" type="button"><i class="fa fa-italic"></i></button>
                            <button class="btn btn-default" type="button"><i class="fa fa-underline"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Toolbars -->
        </div>
    </div>
    <!-- END Buttons Dropdowns and Toolbars -->
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>
<?php require 'inc/views/template_footer_end.php'; ?>
