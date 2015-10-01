<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/magnific-popup/magnific-popup.min.css">

<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">
                Timeline <small>UI components that just work and look great.</small>
            </h1>
        </div>
        <div class="col-sm-5 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>UI Elements</li>
                <li><a class="link-effect" href="">Timeline</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content">
    <!-- Timelines Row -->
    <div class="row">
        <div class="col-lg-6">
            <!-- Icon Based -->
            <h2 class="content-heading">Icon Based</h2>
            <div class="block block-themed">
                <div class="block-header bg-primary">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                        </li>
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                        <li>
                            <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                        </li>
                    </ul>
                    <h3 class="block-title">News</h3>
                </div>
                <div class="block-content">
                    <ul class="list list-timeline pull-t">
                        <!-- Facebook Notification -->
                        <li>
                            <div class="list-timeline-time">3 hrs ago</div>
                            <i class="fa fa-facebook list-timeline-icon bg-default"></i>
                            <div class="list-timeline-content">
                                <p class="font-w600">+ 290 Page Likes</p>
                                <p class="font-s13">This is great, keep it up!</p>
                            </div>
                        </li>
                        <!-- END Facebook Notification -->

                        <!-- Photo Notification -->
                        <li>
                            <div class="list-timeline-time">4 hrs ago</div>
                            <i class="fa fa-picture-o list-timeline-icon bg-flat"></i>
                            <div class="list-timeline-content">
                                <p class="font-w600">+ 3 New Photos</p>
                                <p class="font-s13">Travel hacks and ideas!</p>
                                <!-- Gallery (.js-gallery class is initialized in App() -> uiHelperMagnific()) -->
                                <!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
                                <div class="row items-push js-gallery">
                                    <div class="col-sm-6 col-lg-4">
                                        <a class="img-link" href="<?php echo $one->assets_folder; ?>/img/photos/photo2@2x.jpg">
                                            <?php $one->get_photo(2, false, 'img-responsive'); ?>
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-lg-4">
                                        <a class="img-link" href="<?php echo $one->assets_folder; ?>/img/photos/photo8@2x.jpg">
                                            <?php $one->get_photo(8, false, 'img-responsive'); ?>
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-lg-4">
                                        <a class="img-link" href="<?php echo $one->assets_folder; ?>/img/photos/photo16@2x.jpg">
                                            <?php $one->get_photo(16, false, 'img-responsive'); ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- END Photos Notification -->

                        <!-- Twitter Notification -->
                        <li>
                            <div class="list-timeline-time">12 hrs ago</div>
                            <i class="fa fa-twitter list-timeline-icon bg-info"></i>
                            <div class="list-timeline-content">
                                <p class="font-w600">+ 1150 Followers</p>
                                <p class="font-s13">You’re getting more and more followers, keep it up!</p>
                            </div>
                        </li>
                        <!-- END Twitter Notification -->

                        <!-- System Notification -->
                        <li>
                            <div class="list-timeline-time">1 day ago</div>
                            <i class="fa fa-database list-timeline-icon bg-smooth"></i>
                            <div class="list-timeline-content">
                                <p class="font-w600">Database backup completed!</p>
                                <p class="font-s13">Download the <a href="javascript:void(0)">latest backup</a>.</p>
                            </div>
                        </li>
                        <!-- END System Notification -->

                        <!-- Social Notification -->
                        <li>
                            <div class="list-timeline-time">2 days ago</div>
                            <i class="fa fa-user-plus list-timeline-icon bg-success"></i>
                            <div class="list-timeline-content">
                                <p class="font-w600">+ 3 Friend Requests</p>
                                <ul class="nav-users push-10-t push">
                                    <li>
                                        <a href="base_pages_profile.php">
                                            <?php $one->get_avatar('', 'female'); ?>
                                            <i class="fa fa-circle text-success"></i> <?php $one->get_name('female'); echo "\n"; ?>
                                            <div class="font-w400 text-muted"><small>Web Designer</small></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="base_pages_profile.php">
                                            <?php $one->get_avatar('', 'male'); ?>
                                            <i class="fa fa-circle text-success"></i> <?php $one->get_name('male'); echo "\n"; ?>
                                            <div class="font-w400 text-muted"><small>Graphic Designer</small></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="base_pages_profile.php">
                                            <?php $one->get_avatar('', 'female'); ?>
                                            <i class="fa fa-circle text-success"></i> <?php $one->get_name('female'); echo "\n"; ?>
                                            <div class="font-w400 text-muted"><small>Photographer</small></div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- END Social Notification -->

                        <!-- Photo Notification -->
                        <li>
                            <div class="list-timeline-time">6 days ago</div>
                            <i class="fa fa-picture-o list-timeline-icon bg-flat"></i>
                            <div class="list-timeline-content">
                                <p class="font-w600">+ 2 New Photos</p>
                                <p class="font-s13">Went hiking and had a great time!</p>
                                <!-- Gallery (.js-gallery class is initialized in App() -> uiHelperMagnific()) -->
                                <!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
                                <div class="row items-push js-gallery">
                                    <div class="col-sm-6 col-lg-4">
                                        <a class="img-link" href="<?php echo $one->assets_folder; ?>/img/photos/photo13@2x.jpg">
                                            <?php $one->get_photo(13, false, 'img-responsive'); ?>
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-lg-4">
                                        <a class="img-link" href="<?php echo $one->assets_folder; ?>/img/photos/photo14@2x.jpg">
                                            <?php $one->get_photo(14, false, 'img-responsive'); ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- END Photo Notification -->

                        <!-- System Notification -->
                        <li>
                            <div class="list-timeline-time">1 week ago</div>
                            <i class="fa fa-cog list-timeline-icon bg-primary-dark"></i>
                            <div class="list-timeline-content">
                                <p class="font-w600">System updated to v2.02</p>
                                <p class="font-s13">Check the complete changelog at the <a href="javascript:void(0)">activity page</a>.</p>
                            </div>
                        </li>
                        <!-- END System Notification -->
                    </ul>
                </div>
            </div>
            <!-- END Icon Based -->

            <!-- Activity Timeline -->
            <h2 class="content-heading">Activity Timeline</h2>
            <div class="block">
                <div class="block-content">
                    <ul class="list list-activity push">
                        <li>
                            <i class="si si-wallet text-success"></i>
                            <div class="font-w600">New sale ($15)</div>
                            <div><a href="javascript:void(0)">Admin Template</a></div>
                            <div><small class="text-muted">3 min ago</small></div>
                        </li>
                        <li>
                            <i class="si si-pencil text-info"></i>
                            <div class="font-w600">You edited the file</div>
                            <div><a href="javascript:void(0)"><i class="fa fa-file-text-o"></i> Documentation.doc</a></div>
                            <div><small class="text-muted">15 min ago</small></div>
                        </li>
                        <li>
                            <i class="si si-plus text-success"></i>
                            <div class="font-w600">New user</div>
                            <div><a href="javascript:void(0)">StudioWeb - View Profile</a></div>
                            <div><small class="text-muted">2 hours ago</small></div>
                        </li>
                        <li>
                            <i class="si si-close text-danger"></i>
                            <div class="font-w600">Project deleted</div>
                            <div><a href="javascript:void(0)">Line Icon Set</a></div>
                            <div><small class="text-muted">4 hours ago</small></div>
                        </li>
                        <li>
                            <i class="si si-wrench text-warning"></i>
                            <div class="font-w600">Core v2.5 is available</div>
                            <div><a href="javascript:void(0)">Update now</a></div>
                            <div><small class="text-muted">6 hours ago</small></div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END Activity Timeline -->
        </div>
        <div class="col-lg-6">
            <!-- Block Based -->
            <h2 class="content-heading">Block Based</h2>
            <div class="block block-themed">
                <div class="block-header bg-amethyst">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                        </li>
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                        <li>
                            <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Timeline</h3>
                </div>
                <div class="block-content block-content-full">
                    <!-- Facebook Notification -->
                    <div class="block block-transparent pull-r-l">
                        <div class="block-header bg-gray-lighter">
                            <ul class="block-options">
                                <li>
                                    <span><em>3 hrs ago</em></span>
                                </li>
                                <li>
                                    <span><i class="fa fa-facebook text-primary"></i></span>
                                </li>
                            </ul>
                            <h3 class="block-title">+ 290 Page Likes</h3>
                        </div>
                        <div class="block-content">
                            <p class="font-s13">This is great, keep it up!</p>
                        </div>
                    </div>
                    <!-- END Facebook Notification -->

                    <!-- Photo Notification -->
                    <div class="block block-transparent pull-r-l">
                        <div class="block-header bg-gray-lighter">
                            <ul class="block-options">
                                <li>
                                    <span><em>4 hrs ago</em></span>
                                </li>
                                <li>
                                    <span><i class="fa fa-picture-o text-danger"></i></span>
                                </li>
                            </ul>
                            <h3 class="block-title">+ 3 New Photos</h3>
                        </div>
                        <div class="block-content">
                            <p class="font-s13">Travel hacks and ideas!</p>
                            <!-- Gallery (.js-gallery class is initialized in App() -> uiHelperMagnific()) -->
                            <!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
                            <div class="row items-push js-gallery">
                                <div class="col-sm-6 col-lg-4">
                                    <a class="img-link" href="<?php echo $one->assets_folder; ?>/img/photos/photo2@2x.jpg">
                                        <?php $one->get_photo(2, false, 'img-responsive'); ?>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <a class="img-link" href="<?php echo $one->assets_folder; ?>/img/photos/photo8@2x.jpg">
                                        <?php $one->get_photo(8, false, 'img-responsive'); ?>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <a class="img-link" href="<?php echo $one->assets_folder; ?>/img/photos/photo16@2x.jpg">
                                        <?php $one->get_photo(16, false, 'img-responsive'); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Photo Notification -->

                    <!-- Twitter Notification -->
                    <div class="block block-transparent pull-r-l">
                        <div class="block-header bg-gray-lighter">
                            <ul class="block-options">
                                <li>
                                    <span><em>12 hrs ago</em></span>
                                </li>
                                <li>
                                    <span><i class="fa fa-twitter text-info"></i></span>
                                </li>
                            </ul>
                            <h3 class="block-title">+ 1150 Followers</h3>
                        </div>
                        <div class="block-content">
                            <p class="font-s13">You’re getting more and more followers, keep it up!</p>
                        </div>
                    </div>
                    <!-- END Twitter Notification -->

                    <!-- System Notification -->
                    <div class="block block-transparent pull-r-l">
                        <div class="block-header bg-gray-lighter">
                            <ul class="block-options">
                                <li>
                                    <span><em>1 day ago</em></span>
                                </li>
                                <li>
                                    <span><i class="fa fa-database text-warning"></i></span>
                                </li>
                            </ul>
                            <h3 class="block-title">Database backup completed!</h3>
                        </div>
                        <div class="block-content">
                            <p class="font-s13">Download the <a href="javascript:void(0)">latest backup</a>.</p>
                        </div>
                    </div>
                    <!-- END System Notification -->

                    <!-- Social Notification -->
                    <div class="block block-transparent pull-r-l">
                        <div class="block-header bg-gray-lighter">
                            <ul class="block-options">
                                <li>
                                    <span><em>2 days ago</em></span>
                                </li>
                                <li>
                                    <span><i class="fa fa-user-plus text-success"></i></span>
                                </li>
                            </ul>
                            <h3 class="block-title">+ 3 Friend Requests</h3>
                        </div>
                        <div class="block-content">
                            <ul class="nav-users push">
                                <li>
                                    <a href="base_pages_profile.php">
                                        <?php $one->get_avatar('', 'female'); ?>
                                        <i class="fa fa-circle text-success"></i> <?php $one->get_name('female'); echo "\n"; ?>
                                        <div class="font-w400 text-muted"><small>Web Designer</small></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="base_pages_profile.php">
                                        <?php $one->get_avatar('', 'male'); ?>
                                        <i class="fa fa-circle text-success"></i> <?php $one->get_name('male'); echo "\n"; ?>
                                        <div class="font-w400 text-muted"><small>Graphic Designer</small></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="base_pages_profile.php">
                                        <?php $one->get_avatar('', 'female'); ?>
                                        <i class="fa fa-circle text-success"></i> <?php $one->get_name('female'); echo "\n"; ?>
                                        <div class="font-w400 text-muted"><small>Photographer</small></div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- END Social Notification -->

                    <!-- Photo Notification -->
                    <div class="block block-transparent pull-r-l">
                        <div class="block-header bg-gray-lighter">
                            <ul class="block-options">
                                <li>
                                    <span><em>6 days ago</em></span>
                                </li>
                                <li>
                                    <span><i class="fa fa-picture-o text-danger"></i></span>
                                </li>
                            </ul>
                            <h3 class="block-title">+ 3 New Photos</h3>
                        </div>
                        <div class="block-content">
                            <p class="font-s13">Went hiking and had a great time!</p>
                            <!-- Gallery (.js-gallery class is initialized in App() -> uiHelperMagnific()) -->
                            <!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
                            <div class="row items-push js-gallery">
                                <div class="col-sm-6 col-lg-4">
                                    <a class="img-link" href="<?php echo $one->assets_folder; ?>/img/photos/photo13@2x.jpg">
                                        <?php $one->get_photo(13, false, 'img-responsive'); ?>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <a class="img-link" href="<?php echo $one->assets_folder; ?>/img/photos/photo14@2x.jpg">
                                        <?php $one->get_photo(14, false, 'img-responsive'); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Photo Notification -->

                    <!-- System Notification -->
                    <div class="block block-transparent pull-r-l">
                        <div class="block-header bg-gray-lighter">
                            <ul class="block-options">
                                <li>
                                    <span><em>1 week ago</em></span>
                                </li>
                                <li>
                                    <span><i class="fa fa-cog text-primary-dark"></i></span>
                                </li>
                            </ul>
                            <h3 class="block-title">System updated to v2.02</h3>
                        </div>
                        <div class="block-content">
                            <p class="font-s13">Check the complete changelog at the <a href="javascript:void(0)">activity page</a>.</p>
                        </div>
                    </div>
                    <!-- END System Notification -->
                </div>
            </div>
            <!-- END Block Based -->
        </div>
    </div>
    <!-- END Timelines Row -->
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>

<!-- Page JS Plugins -->
<script src="<?php echo $one->assets_folder; ?>/js/plugins/magnific-popup/magnific-popup.min.js"></script>

<!-- Page JS Code -->
<script>
    $(function(){
        // Init page helpers (Magnific Popup plugin)
        App.initHelpers('magnific-popup');
    });
</script>

<?php require 'inc/views/template_footer_end.php'; ?>