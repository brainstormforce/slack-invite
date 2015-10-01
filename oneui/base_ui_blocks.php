<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">
                Block Styles <small>Solid foundation and integral part of the design.</small>
            </h1>
        </div>
        <div class="col-sm-5 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>UI Elements</li>
                <li>Blocks</li>
                <li><a class="link-effect" href="">Styles</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content">
    <!-- Simple Blocks -->
    <h2 class="content-heading">Simple</h2>
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Block Title</h3>
                </div>
                <div class="block-content">
                    <p>Simple block..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-bordered">
                <div class="block-header bg-gray-lighter">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Block Title</h3>
                </div>
                <div class="block-content">
                    <p>With header background..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-bordered">
                <div class="block-header bg-gray-lighter">
                    <h3 class="block-title">Block Title</h3>
                </div>
                <div class="block-content">
                    <p>Bordered block..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-bordered">
                <div class="block-header bg-gray-lighter">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Block Title</h3>
                </div>
                <div class="block-content">
                    <p>Bordered block with header background..</p>
                </div>
            </div>
        </div>
    </div>
    <!-- END Simple Blocks -->

    <!-- Rounded Blocks -->
    <h2 class="content-heading">Rounded</h2>
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <div class="block block-rounded">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Block Title</h3>
                </div>
                <div class="block-content">
                    <p>Simple block..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-rounded">
                <div class="block-header bg-gray-lighter">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Block Title</h3>
                </div>
                <div class="block-content">
                    <p>With header background..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-rounded block-bordered">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Block Title</h3>
                </div>
                <div class="block-content">
                    <p>Bordered block..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-rounded block-bordered">
                <div class="block-header bg-gray-lighter">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Block Title</h3>
                </div>
                <div class="block-content">
                    <p>Bordered block with header background..</p>
                </div>
            </div>
        </div>
    </div>
    <!-- END Rounded Blocks -->

    <!-- Link Blocks -->
    <h2 class="content-heading">Links</h2>
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <a class="block" href="javascript:void(0)">
                <div class="block-header">
                    <h3 class="block-title">Block Title</h3>
                </div>
                <div class="block-content">
                    <p>Simple opacity hover effect..</p>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a class="block block-link-hover1" href="javascript:void(0)">
                <div class="block-header">
                    <h3 class="block-title">Block Title</h3>
                </div>
                <div class="block-content">
                    <p>Simple hover effect..</p>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a class="block block-link-hover2" href="javascript:void(0)">
                <div class="block-header">
                    <h3 class="block-title">Block Title</h3>
                </div>
                <div class="block-content">
                    <p>Pop hover effect..</p>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a class="block block-link-hover3" href="javascript:void(0)">
                <div class="block-header">
                    <h3 class="block-title">Block Title</h3>
                </div>
                <div class="block-content">
                    <p>Shadow hover effect..</p>
                </div>
            </a>
        </div>
    </div>
    <!-- END Link Blocks -->

    <!-- Transparent Blocks -->
    <h2 class="content-heading">Transparent</h2>
    <div class="row">
        <div class="col-sm-6">
            <div class="block block-transparent">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Block Title</h3>
                </div>
                <div class="block-content">
                    <?php $one->get_text('small'); ?>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="block block-transparent">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Block Title</h3>
                </div>
                <div class="block-content">
                    <?php $one->get_text('small'); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- END Transparent Blocks -->

    <!-- Blocks with Options -->
    <h2 class="content-heading">Options</h2>
    <div class="row">
        <div class="col-sm-6">
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="tooltip" title="Undo"><i class="si si-action-undo"></i></button>
                        </li>
                        <li>
                            <button type="button" data-toggle="tooltip" title="Redo"><i class="si si-action-redo"></i></button>
                        </li>
                        <li>
                            <button type="button" data-toggle="tooltip" title="Edit"><i class="si si-pencil"></i></button>
                        </li>
                        <li class="dropdown">
                            <button type="button" data-toggle="dropdown">More <span class="caret"></span></button>
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
                        </li>
                    </ul>
                    <h3 class="block-title">Block Title</h3>
                </div>
                <div class="block-content">
                    <p>With button options to the right..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="block">
                <div class="block-header">
                    <ul class="block-options block-options-left">
                        <li>
                            <button type="button" data-toggle="tooltip" title="Undo"><i class="si si-action-undo"></i></button>
                        </li>
                        <li>
                            <button type="button" data-toggle="tooltip" title="Redo"><i class="si si-action-redo"></i></button>
                        </li>
                        <li>
                            <button type="button" data-toggle="tooltip" title="Profile"><i class="si si-user"></i></button>
                        </li>
                        <li class="dropdown">
                            <button type="button" data-toggle="dropdown">More <span class="caret"></span></button>
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
                        </li>
                    </ul>
                    <h3 class="block-title">Block Title</h3>
                </div>
                <div class="block-content">
                    <p>With button options to the left..</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <span>Text 1</span>
                        </li>
                        <li>
                            <span>Text 2</span>
                        </li>
                        <li>
                            <span>Text 3</span>
                        </li>
                    </ul>
                    <h3 class="block-title">Block Title</h3>
                </div>
                <div class="block-content">
                    <p>With text items to the right..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="block">
                <div class="block-header">
                    <ul class="block-options block-options-left">
                        <li>
                            <span>Text 1</span>
                        </li>
                        <li>
                            <span>Text 2</span>
                        </li>
                        <li>
                            <span>Text 3</span>
                        </li>
                    </ul>
                    <h3 class="block-title">Block Title</h3>
                </div>
                <div class="block-content">
                    <p>With text items to the left..</p>
                </div>
            </div>
        </div>
    </div>
    <!-- END Blocks with Options -->

    <!-- Themed Blocks -->
    <h2 class="content-heading">Themed</h2>
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed">
                <div class="block-header bg-primary">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Primary</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed">
                <div class="block-header bg-primary-light">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Primary Light</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed">
                <div class="block-header bg-primary-dark">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Primary Dark</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed">
                <div class="block-header bg-primary-darker">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Primary Darker</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed">
                <div class="block-header bg-success">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Success</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed">
                <div class="block-header bg-info">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Info</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed">
                <div class="block-header bg-warning">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Warning</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed">
                <div class="block-header bg-danger">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Danger</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed">
                <div class="block-header bg-gray">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Gray</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed">
                <div class="block-header bg-muted">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Gray Dark</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed">
                <div class="block-header bg-gray-darker">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Gray Darker</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed">
                <div class="block-header bg-black">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Black</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed">
                <div class="block-header bg-amethyst">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Amethyst</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed">
                <div class="block-header bg-amethyst-light">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Amethyst Light</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed">
                <div class="block-header bg-amethyst-dark">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Amethyst Dark</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed">
                <div class="block-header bg-amethyst-darker">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Amethyst Darker</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed">
                <div class="block-header bg-city">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">City</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed">
                <div class="block-header bg-city-light">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">City Light</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed">
                <div class="block-header bg-city-dark">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">City Dark</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed">
                <div class="block-header bg-city-darker">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">City Darker</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed">
                <div class="block-header bg-flat">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Flat</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed">
                <div class="block-header bg-flat-light">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Flat Light</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed">
                <div class="block-header bg-flat-dark">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Flat Dark</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed">
                <div class="block-header bg-flat-darker">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Flat Darker</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed">
                <div class="block-header bg-modern">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Modern</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed">
                <div class="block-header bg-modern-light">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Modern Light</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed">
                <div class="block-header bg-modern-dark">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Modern Dark</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed">
                <div class="block-header bg-modern-darker">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Modern Darker</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed">
                <div class="block-header bg-smooth">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Smooth</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed">
                <div class="block-header bg-smooth-light">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Smooth light</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed">
                <div class="block-header bg-smooth-dark">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Smooth Dark</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed">
                <div class="block-header bg-smooth-darker">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Smooth Darker</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
    </div>
    <!-- END Themed Blocks -->

    <!-- Themed Rounded Blocks -->
    <h2 class="content-heading">Themed Rounded</h2>
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed block-rounded">
                <div class="block-header bg-primary">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Primary</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed block-rounded">
                <div class="block-header bg-primary-light">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Primary Light</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed block-rounded">
                <div class="block-header bg-primary-dark">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Primary Dark</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed block-rounded">
                <div class="block-header bg-primary-darker">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Primary Darker</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed block-rounded">
                <div class="block-header bg-success">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Success</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed block-rounded">
                <div class="block-header bg-info">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Info</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed block-rounded">
                <div class="block-header bg-warning">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Warning</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed block-rounded">
                <div class="block-header bg-danger">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Danger</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed block-rounded">
                <div class="block-header bg-gray">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Gray</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed block-rounded">
                <div class="block-header bg-muted">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Gray Dark</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed block-rounded">
                <div class="block-header bg-gray-darker">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Gray Darker</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed block-rounded">
                <div class="block-header bg-black">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Black</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed block-rounded">
                <div class="block-header bg-amethyst">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Amethyst</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed block-rounded">
                <div class="block-header bg-amethyst-light">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Amethyst Light</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed block-rounded">
                <div class="block-header bg-amethyst-dark">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Amethyst Dark</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed block-rounded">
                <div class="block-header bg-amethyst-darker">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Amethyst Darker</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed block-rounded">
                <div class="block-header bg-city">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">City</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed block-rounded">
                <div class="block-header bg-city-light">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">City Light</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed block-rounded">
                <div class="block-header bg-city-dark">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">City Dark</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed block-rounded">
                <div class="block-header bg-city-darker">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">City Darker</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed block-rounded">
                <div class="block-header bg-flat">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Flat</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed block-rounded">
                <div class="block-header bg-flat-light">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Flat Light</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed block-rounded">
                <div class="block-header bg-flat-dark">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Flat Dark</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed block-rounded">
                <div class="block-header bg-flat-darker">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Flat Darker</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed block-rounded">
                <div class="block-header bg-modern">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Modern</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed block-rounded">
                <div class="block-header bg-modern-light">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Modern Light</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed block-rounded">
                <div class="block-header bg-modern-dark">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Modern Dark</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed block-rounded">
                <div class="block-header bg-modern-darker">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Modern Darker</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed block-rounded">
                <div class="block-header bg-smooth">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Smooth</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed block-rounded">
                <div class="block-header bg-smooth-light">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Smooth light</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed block-rounded">
                <div class="block-header bg-smooth-dark">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Smooth Dark</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="block block-themed block-rounded">
                <div class="block-header bg-smooth-darker">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Smooth Darker</h3>
                </div>
                <div class="block-content">
                    <p>Block’s content..</p>
                </div>
            </div>
        </div>
    </div>
    <!-- END Themed Rounded Blocks -->
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>
<?php require 'inc/views/template_footer_end.php'; ?>