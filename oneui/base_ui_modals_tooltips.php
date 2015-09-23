<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">
                Modals &amp; Tooltips <small>Inform your users with multiple ways.</small>
            </h1>
        </div>
        <div class="col-sm-5 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>UI Elements</li>
                <li><a class="link-effect" href="">Modals &amp; Tooltips</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content content-narrow">
    <!-- Tooltips -->
    <h2 class="content-heading">Tooltips</h2>
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <!-- Top Tooltip -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Top</h3>
                </div>
                <div class="block-content block-content-full">
                    <button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Top Tooltip" type="button">Show Tooltip</button>
                </div>
            </div>
            <!-- END Top Tooltip -->
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- Right Tooltip -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Right</h3>
                </div>
                <div class="block-content block-content-full">
                    <button class="btn btn-danger" data-toggle="tooltip" data-placement="right" title="Right Tooltip" type="button">Show Tooltip</button>
                </div>
            </div>
            <!-- END Right Tooltip -->
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- Bottom Tooltip -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Bottom</h3>
                </div>
                <div class="block-content block-content-full">
                    <button class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Bottom Tooltip" type="button">Show Tooltip</button>
                </div>
            </div>
            <!-- END Bottom Tooltip -->
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- Left Tooltip -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Left</h3>
                </div>
                <div class="block-content block-content-full">
                    <button class="btn btn-danger" data-toggle="tooltip" data-placement="left" title="Left Tooltip" type="button">Show Tooltip</button>
                </div>
            </div>
            <!-- END Left Tooltip -->
        </div>
    </div>
    <!-- END Tooltips -->

    <!-- Popovers -->
    <h2 class="content-heading">Popovers</h2>
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <!-- Top Popover -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Top</h3>
                </div>
                <div class="block-content block-content-full">
                    <button class="btn btn-success" data-toggle="popover" title="Top Popover" data-placement="top" data-content="This is example content. You can put a description or more info here." type="button">Show Popover</button>
                </div>
            </div>
            <!-- END Top Popover -->
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- Right Popover -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Right</h3>
                </div>
                <div class="block-content block-content-full">
                    <button class="btn btn-success" data-toggle="popover" title="Right Popover" data-placement="right" data-content="This is example content. You can put a description or more info here." type="button">Show Popover</button>
                </div>
            </div>
            <!-- END Right Popover -->
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- Bottom Popover -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Bottom</h3>
                </div>
                <div class="block-content block-content-full">
                    <button class="btn btn-success" data-toggle="popover" title="Bottom Popover" data-placement="bottom" data-content="This is example content. You can put a description or more info here." type="button">Show Popover</button>
                </div>
            </div>
            <!-- END Bottom Popover -->
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- Left Popover -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Left</h3>
                </div>
                <div class="block-content block-content-full">
                    <button class="btn btn-success" data-toggle="popover" title="Left Popover" data-placement="left" data-content="This is example content. You can put a description or more info here." type="button">Show Popover</button>
                </div>
            </div>
            <!-- END Left Popover -->
        </div>
    </div>
    <!-- END Popovers -->

    <!-- Bootstrap Modals -->
    <!-- For advanced modal usage you can check out http://getbootstrap.com/javascript/#modals -->
    <h2 class="content-heading">Bootstrap Modals</h2>
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <!-- Normal Modal -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Normal</h3>
                </div>
                <div class="block-content block-content-full">
                    <button class="btn btn-info" data-toggle="modal" data-target="#modal-normal" type="button">Launch Modal</button>
                </div>
            </div>
            <!-- END Normal Modal -->
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- Small Modal -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Small</h3>
                </div>
                <div class="block-content block-content-full">
                    <button class="btn btn-info" data-toggle="modal" data-target="#modal-small" type="button">Launch Modal</button>
                </div>
            </div>
            <!-- END Small Modal -->
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- Large Modal -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Large</h3>
                </div>
                <div class="block-content block-content-full">
                    <button class="btn btn-info" data-toggle="modal" data-target="#modal-large" type="button">Launch Modal</button>
                </div>
            </div>
            <!-- END Large Modal -->
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- Fade In Modal -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Fade In <small>Effect</small></h3>
                </div>
                <div class="block-content block-content-full">
                    <button class="btn btn-info" data-toggle="modal" data-target="#modal-fadein" type="button">Launch Modal</button>
                </div>
            </div>
            <!-- END Fade In Modal -->
        </div>
    </div>
    <!-- Bootstrap Modals -->

    <!-- Extra Modal Options -->
    <h2 class="content-heading">Extra Modal Options</h2>
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <!-- Top Modal -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Top Position</h3>
                </div>
                <div class="block-content block-content-full">
                    <button class="btn btn-default" data-toggle="modal" data-target="#modal-top" type="button">Launch Modal</button>
                </div>
            </div>
            <!-- END Top Modal -->
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- Pop In Modal -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Pop In <small>Effect</small></h3>
                </div>
                <div class="block-content block-content-full">
                    <button class="btn btn-default" data-toggle="modal" data-target="#modal-popin" type="button">Launch Modal</button>
                </div>
            </div>
            <!-- END Pop In Modal -->
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- Pop Out Modal -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Pop Out <small>Effect</small></h3>
                </div>
                <div class="block-content block-content-full">
                    <button class="btn btn-default" data-toggle="modal" data-target="#modal-popout" type="button">Launch Modal</button>
                </div>
            </div>
            <!-- END Pop Out Modal -->
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- Slide Up Modal -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Slide Up <small>Effect</small></h3>
                </div>
                <div class="block-content block-content-full">
                    <button class="btn btn-default" data-toggle="modal" data-target="#modal-slideup" type="button">Launch Modal</button>
                </div>
            </div>
            <!-- END Slide Up Modal -->
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- Slide Right Modal -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Slide Right <small>Effect</small></h3>
                </div>
                <div class="block-content block-content-full">
                    <button class="btn btn-default" data-toggle="modal" data-target="#modal-slideright" type="button">Launch Modal</button>
                </div>
            </div>
            <!-- END Slide Right Modal -->
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- Slide Left Modal -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Slide Left <small>Effect</small></h3>
                </div>
                <div class="block-content block-content-full">
                    <button class="btn btn-default" data-toggle="modal" data-target="#modal-slideleft" type="button">Launch Modal</button>
                </div>
            </div>
            <!-- END Slide Left Modal -->
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- From Right Modal -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">From Right <small>Effect</small></h3>
                </div>
                <div class="block-content block-content-full">
                    <button class="btn btn-default" data-toggle="modal" data-target="#modal-fromright" type="button">Launch Modal</button>
                </div>
            </div>
            <!-- END From Right Modal -->
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- From Left Modal -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">From Left <small>Effect</small></h3>
                </div>
                <div class="block-content block-content-full">
                    <button class="btn btn-default" data-toggle="modal" data-target="#modal-fromleft" type="button">Launch Modal</button>
                </div>
            </div>
            <!-- END From Left Modal -->
        </div>
    </div>
    <!-- Extra Modal Options -->
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>

<!-- Normal Modal -->
<div class="modal" id="modal-normal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
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
                    <?php $one->get_text('small', 2); ?>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                <button class="btn btn-sm btn-primary" type="button" data-dismiss="modal"><i class="fa fa-check"></i> Ok</button>
            </div>
        </div>
    </div>
</div>
<!-- END Normal Modal -->

<!-- Small Modal -->
<div class="modal" id="modal-small" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
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
                    <?php $one->get_text('small', 2); ?>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                <button class="btn btn-sm btn-primary" type="button" data-dismiss="modal"><i class="fa fa-check"></i> Ok</button>
            </div>
        </div>
    </div>
</div>
<!-- END Small Modal -->

<!-- Large Modal -->
<div class="modal" id="modal-large" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
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
                    <?php $one->get_text('small', 2); ?>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                <button class="btn btn-sm btn-primary" type="button" data-dismiss="modal"><i class="fa fa-check"></i> Ok</button>
            </div>
        </div>
    </div>
</div>
<!-- END Large Modal -->

<!-- Fade In Modal -->
<div class="modal fade" id="modal-fadein" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
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
                    <?php $one->get_text('small', 2); ?>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                <button class="btn btn-sm btn-primary" type="button" data-dismiss="modal"><i class="fa fa-check"></i> Ok</button>
            </div>
        </div>
    </div>
</div>
<!-- END Fade In Modal -->

<!-- Top Modal -->
<div class="modal fade" id="modal-top" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-top">
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
                    <?php $one->get_text('small', 2); ?>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                <button class="btn btn-sm btn-primary" type="button" data-dismiss="modal"><i class="fa fa-check"></i> Ok</button>
            </div>
        </div>
    </div>
</div>
<!-- END Top Modal -->

<!-- Pop In Modal -->
<div class="modal fade" id="modal-popin" tabindex="-1" role="dialog" aria-hidden="true">
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
                    <?php $one->get_text('small', 2); ?>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                <button class="btn btn-sm btn-primary" type="button" data-dismiss="modal"><i class="fa fa-check"></i> Ok</button>
            </div>
        </div>
    </div>
</div>
<!-- END Pop In Modal -->

<!-- Pop Out Modal -->
<div class="modal fade" id="modal-popout" tabindex="-1" role="dialog" aria-hidden="true">
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
                    <?php $one->get_text('small', 2); ?>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                <button class="btn btn-sm btn-primary" type="button" data-dismiss="modal"><i class="fa fa-check"></i> Ok</button>
            </div>
        </div>
    </div>
</div>
<!-- END Pop Out Modal -->

<!-- Slide Up Modal -->
<div class="modal fade" id="modal-slideup" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideup">
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
                    <?php $one->get_text('small', 2); ?>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                <button class="btn btn-sm btn-primary" type="button" data-dismiss="modal"><i class="fa fa-check"></i> Ok</button>
            </div>
        </div>
    </div>
</div>
<!-- END Slide Up Modal -->

<!-- Slide Right Modal -->
<div class="modal fade" id="modal-slideright" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideright">
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
                    <?php $one->get_text('small', 2); ?>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                <button class="btn btn-sm btn-primary" type="button" data-dismiss="modal"><i class="fa fa-check"></i> Ok</button>
            </div>
        </div>
    </div>
</div>
<!-- END Slide Right Modal -->

<!-- Slide Left Modal -->
<div class="modal fade" id="modal-slideleft" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideleft">
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
                    <?php $one->get_text('small', 2); ?>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                <button class="btn btn-sm btn-primary" type="button" data-dismiss="modal"><i class="fa fa-check"></i> Ok</button>
            </div>
        </div>
    </div>
</div>
<!-- END Slide Left Modal -->

<!-- From Right Modal -->
<div class="modal fade" id="modal-fromright" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-fromright">
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
                    <?php $one->get_text('small', 2); ?>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                <button class="btn btn-sm btn-primary" type="button" data-dismiss="modal"><i class="fa fa-check"></i> Ok</button>
            </div>
        </div>
    </div>
</div>
<!-- END From Right Modal -->

<!-- From Left Modal -->
<div class="modal fade" id="modal-fromleft" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-fromleft">
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
                    <?php $one->get_text('small', 2); ?>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                <button class="btn btn-sm btn-primary" type="button" data-dismiss="modal"><i class="fa fa-check"></i> Ok</button>
            </div>
        </div>
    </div>
</div>
<!-- END From Left Modal -->

<?php require 'inc/views/template_footer_start.php'; ?>
<?php require 'inc/views/template_footer_end.php'; ?>