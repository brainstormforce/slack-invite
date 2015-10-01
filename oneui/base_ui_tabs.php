<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">
                Tabs <small>Swap content with style.</small>
            </h1>
        </div>
        <div class="col-sm-5 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>UI Elements</li>
                <li><a class="link-effect" href="">Tabs</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content content-narrow">
    <!-- Block Tabs -->
    <h2 class="content-heading">Block Tabs</h2>
    <div class="row">
        <div class="col-md-6">
            <!-- Block Tabs Default Style -->
            <div class="block">
                <ul class="nav nav-tabs" data-toggle="tabs">
                    <li class="active">
                        <a href="#btabs-static-home">Home</a>
                    </li>
                    <li>
                        <a href="#btabs-static-profile">Profile</a>
                    </li>
                    <li class="pull-right">
                        <a href="#btabs-static-settings" data-toggle="tooltip" title="Settings"><i class="si si-settings"></i></a>
                    </li>
                </ul>
                <div class="block-content tab-content">
                    <div class="tab-pane active" id="btabs-static-home">
                        <h4 class="font-w300 push-15">Home Tab</h4>
                        <p>...</p>
                    </div>
                    <div class="tab-pane" id="btabs-static-profile">
                        <h4 class="font-w300 push-15">Profile Tab</h4>
                        <p>...</p>
                    </div>
                    <div class="tab-pane" id="btabs-static-settings">
                        <h4 class="font-w300 push-15">Settings Tab</h4>
                        <p>...</p>
                    </div>
                </div>
            </div>
            <!-- END Block Tabs Default Style -->

            <!-- Block Tabs Alternative Style -->
            <div class="block">
                <ul class="nav nav-tabs nav-tabs-alt" data-toggle="tabs">
                    <li class="active">
                        <a href="#btabs-alt-static-home">Home</a>
                    </li>
                    <li>
                        <a href="#btabs-alt-static-profile">Profile</a>
                    </li>
                    <li class="pull-right">
                        <a href="#btabs-alt-static-settings" data-toggle="tooltip" title="Settings"><i class="si si-settings"></i></a>
                    </li>
                </ul>
                <div class="block-content tab-content">
                    <div class="tab-pane active" id="btabs-alt-static-home">
                        <h4 class="font-w300 push-15">Home Tab</h4>
                        <p>...</p>
                    </div>
                    <div class="tab-pane" id="btabs-alt-static-profile">
                        <h4 class="font-w300 push-15">Profile Tab</h4>
                        <p>...</p>
                    </div>
                    <div class="tab-pane" id="btabs-alt-static-settings">
                        <h4 class="font-w300 push-15">Settings Tab</h4>
                        <p>...</p>
                    </div>
                </div>
            </div>
            <!-- END Block Tabs Alternative Style -->
        </div>
        <div class="col-md-6">
            <!-- Block Tabs Default Style (Right) -->
            <div class="block">
                <ul class="nav nav-tabs nav-tabs-right" data-toggle="tabs">
                    <li class="active">
                        <a href="#btabs-static2-home">Home</a>
                    </li>
                    <li>
                        <a href="#btabs-static2-profile">Profile</a>
                    </li>
                    <li class="pull-left">
                        <a href="#btabs-static2-settings" data-toggle="tooltip" title="Settings"><i class="si si-settings"></i></a>
                    </li>
                </ul>
                <div class="block-content tab-content">
                    <div class="tab-pane active" id="btabs-static2-home">
                        <h4 class="font-w300 push-15">Home Tab</h4>
                        <p>...</p>
                    </div>
                    <div class="tab-pane" id="btabs-static2-profile">
                        <h4 class="font-w300 push-15">Profile Tab</h4>
                        <p>...</p>
                    </div>
                    <div class="tab-pane" id="btabs-static2-settings">
                        <h4 class="font-w300 push-15">Settings Tab</h4>
                        <p>...</p>
                    </div>
                </div>
            </div>
            <!-- END Block Tabs Default Style (Right) -->

            <!-- Block Tabs Alternative Style (Right) -->
            <div class="block">
                <ul class="nav nav-tabs nav-tabs-alt nav-tabs-right" data-toggle="tabs">
                    <li class="active">
                        <a href="#btabs-alt-static2-home">Home</a>
                    </li>
                    <li>
                        <a href="#btabs-alt-static2-profile">Profile</a>
                    </li>
                    <li class="pull-left">
                        <a href="#btabs-alt-static2-settings" data-toggle="tooltip" title="Settings"><i class="si si-settings"></i></a>
                    </li>
                </ul>
                <div class="block-content tab-content">
                    <div class="tab-pane active" id="btabs-alt-static2-home">
                        <h4 class="font-w300 push-15">Home Tab</h4>
                        <p>...</p>
                    </div>
                    <div class="tab-pane" id="btabs-alt-static2-profile">
                        <h4 class="font-w300 push-15">Profile Tab</h4>
                        <p>...</p>
                    </div>
                    <div class="tab-pane" id="btabs-alt-static2-settings">
                        <h4 class="font-w300 push-15">Settings Tab</h4>
                        <p>...</p>
                    </div>
                </div>
            </div>
            <!-- END Block Tabs Alternative Style (Right) -->
        </div>
    </div>
    <!-- END Block Tabs -->

    <!-- Justified Tabs -->
    <h2 class="content-heading">Justified Tabs</h2>
    <div class="row">
        <div class="col-md-6">
            <!-- Block Tabs Justified Default Style -->
            <div class="block">
                <ul class="nav nav-tabs nav-justified" data-toggle="tabs">
                    <li class="active">
                        <a href="#btabs-static-justified-home"><i class="fa fa-home"></i> Home</a>
                    </li>
                    <li>
                        <a href="#btabs-static-justified-profile"><i class="fa fa-pencil"></i> Profile</a>
                    </li>
                    <li>
                        <a href="#btabs-static-justified-settings"><i class="fa fa-cog"></i> Settings</a>
                    </li>
                </ul>
                <div class="block-content tab-content">
                    <div class="tab-pane active" id="btabs-static-justified-home">
                        <h4 class="font-w300 push-15">Home Tab</h4>
                        <p>...</p>
                    </div>
                    <div class="tab-pane" id="btabs-static-justified-profile">
                        <h4 class="font-w300 push-15">Profile Tab</h4>
                        <p>...</p>
                    </div>
                    <div class="tab-pane" id="btabs-static-justified-settings">
                        <h4 class="font-w300 push-15">Settings Tab</h4>
                        <p>...</p>
                    </div>
                </div>
            </div>
            <!-- END Block Tabs Justified Alternative Style -->
        </div>
        <div class="col-md-6">
            <!-- Block Tabs Justified Alternative Style -->
            <div class="block">
                <ul class="nav nav-tabs nav-tabs-alt nav-justified" data-toggle="tabs">
                    <li class="active">
                        <a href="#btabs-alt-static-justified-home"><i class="fa fa-home"></i> Home</a>
                    </li>
                    <li>
                        <a href="#btabs-alt-static-justified-profile"><i class="fa fa-pencil"></i> Profile</a>
                    </li>
                    <li>
                        <a href="#btabs-alt-static-justified-settings"><i class="fa fa-cog"></i> Settings</a>
                    </li>
                </ul>
                <div class="block-content tab-content">
                    <div class="tab-pane active" id="btabs-alt-static-justified-home">
                        <h4 class="font-w300 push-15">Home Tab</h4>
                        <p>...</p>
                    </div>
                    <div class="tab-pane" id="btabs-alt-static-justified-profile">
                        <h4 class="font-w300 push-15">Profile Tab</h4>
                        <p>...</p>
                    </div>
                    <div class="tab-pane" id="btabs-alt-static-justified-settings">
                        <h4 class="font-w300 push-15">Settings Tab</h4>
                        <p>...</p>
                    </div>
                </div>
            </div>
            <!-- END Block Tabs Justified Default Style -->
        </div>
    </div>
    <!-- END Justified Tabs -->

    <!-- Block Tabs Content Animation -->
    <h2 class="content-heading">Tabs with Animation</h2>
    <div class="row">
        <div class="col-md-6">
            <!-- Block Tabs Animated Fade -->
            <div class="block">
                <ul class="nav nav-tabs" data-toggle="tabs">
                    <li class="active">
                        <a href="#btabs-animated-fade-home">Home</a>
                    </li>
                    <li>
                        <a href="#btabs-animated-fade-profile">Profile</a>
                    </li>
                    <li class="pull-right">
                        <a href="#btabs-animated-fade-settings" data-toggle="tooltip" title="Settings"><i class="si si-settings"></i></a>
                    </li>
                </ul>
                <div class="block-content tab-content">
                    <div class="tab-pane fade in active" id="btabs-animated-fade-home">
                        <h4 class="font-w300 push-15">Home Tab</h4>
                        <p>Content fades in..</p>
                    </div>
                    <div class="tab-pane fade" id="btabs-animated-fade-profile">
                        <h4 class="font-w300 push-15">Profile Tab</h4>
                        <p>Content fades in..</p>
                    </div>
                    <div class="tab-pane fade" id="btabs-animated-fade-settings">
                        <h4 class="font-w300 push-15">Settings Tab</h4>
                        <p>Content fades in..</p>
                    </div>
                </div>
            </div>
            <!-- END Block Tabs Animated Fade -->

            <!-- Block Tabs Animated Slide Left -->
            <div class="block">
                <ul class="nav nav-tabs" data-toggle="tabs">
                    <li class="active">
                        <a href="#btabs-animated-slideleft-home">Home</a>
                    </li>
                    <li>
                        <a href="#btabs-animated-slideleft-profile">Profile</a>
                    </li>
                    <li class="pull-right">
                        <a href="#btabs-animated-slideleft-settings" data-toggle="tooltip" title="Settings"><i class="si si-settings"></i></a>
                    </li>
                </ul>
                <div class="block-content tab-content">
                    <div class="tab-pane fade fade-left in active" id="btabs-animated-slideleft-home">
                        <h4 class="font-w300 push-15">Home Tab</h4>
                        <p>Content slides in to the left..</p>
                    </div>
                    <div class="tab-pane fade fade-left" id="btabs-animated-slideleft-profile">
                        <h4 class="font-w300 push-15">Profile Tab</h4>
                        <p>Content slides in to the left..</p>
                    </div>
                    <div class="tab-pane fade fade-left" id="btabs-animated-slideleft-settings">
                        <h4 class="font-w300 push-15">Settings Tab</h4>
                        <p>Content slides in to the left..</p>
                    </div>
                </div>
            </div>
            <!-- END Block Tabs Animated Slide Left -->
        </div>
        <div class="col-md-6">
            <!-- Block Tabs Animated Slide Up -->
            <div class="block">
                <ul class="nav nav-tabs" data-toggle="tabs">
                    <li class="active">
                        <a href="#btabs-animated-slideup-home">Home</a>
                    </li>
                    <li>
                        <a href="#btabs-animated-slideup-profile">Profile</a>
                    </li>
                    <li class="pull-right">
                        <a href="#btabs-animated-slideup-settings" data-toggle="tooltip" title="Settings"><i class="si si-settings"></i></a>
                    </li>
                </ul>
                <div class="block-content tab-content">
                    <div class="tab-pane fade fade-up in active" id="btabs-animated-slideup-home">
                        <h4 class="font-w300 push-15">Home Tab</h4>
                        <p>Content slides up..</p>
                    </div>
                    <div class="tab-pane fade fade-up" id="btabs-animated-slideup-profile">
                        <h4 class="font-w300 push-15">Profile Tab</h4>
                        <p>Content slides up..</p>
                    </div>
                    <div class="tab-pane fade fade-up" id="btabs-animated-slideup-settings">
                        <h4 class="font-w300 push-15">Settings Tab</h4>
                        <p>Content slides up..</p>
                    </div>
                </div>
            </div>
            <!-- END Block Tabs Animated Slide Up -->

            <!-- Block Tabs Animated Slide Right -->
            <div class="block">
                <ul class="nav nav-tabs" data-toggle="tabs">
                    <li class="active">
                        <a href="#btabs-animated-slideright-home">Home</a>
                    </li>
                    <li>
                        <a href="#btabs-animated-slideright-profile">Profile</a>
                    </li>
                    <li class="pull-right">
                        <a href="#btabs-animated-slideright-settings" data-toggle="tooltip" title="Settings"><i class="si si-settings"></i></a>
                    </li>
                </ul>
                <div class="block-content tab-content">
                    <div class="tab-pane fade fade-right in active" id="btabs-animated-slideright-home">
                        <h4 class="font-w300 push-15">Home Tab</h4>
                        <p>Content slides in to the right..</p>
                    </div>
                    <div class="tab-pane fade fade-right" id="btabs-animated-slideright-profile">
                        <h4 class="font-w300 push-15">Profile Tab</h4>
                        <p>Content slides in to the right..</p>
                    </div>
                    <div class="tab-pane fade fade-right" id="btabs-animated-slideright-settings">
                        <h4 class="font-w300 push-15">Settings Tab</h4>
                        <p>Content slides in to the right..</p>
                    </div>
                </div>
            </div>
            <!-- END Block Tabs Animated Slide Right -->
        </div>
    </div>
    <!-- END Block Tabs Content Animation -->
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>
<?php require 'inc/views/template_footer_end.php'; ?>