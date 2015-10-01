<?php require 'inc/config.php'; ?>
<?php
// Specific Page Options
$one->l_sidebar_visible_desktop = false;
?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <h1 class="page-heading push">
        Hidden Sidebar <small>Screen width greater than 991px - lower than 992px always hidden</small>
    </h1>
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content content-boxed">
    <!-- Open Sidebar -->
    <div class="text-center">
        <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
        <button class="btn btn-success push" type="button" data-toggle="layout" data-action="sidebar_open">Open Sidebar</button>
    </div>
    <!-- END Open Sidebar -->

    <!-- Demo Content -->
    <div class="block block-rounded">
        <div class="block-header">
            <ul class="block-options">
                <li>
                    <button type="button"><i class="si si-settings"></i></button>
                </li>
            </ul>
            <h3 class="block-title">Demo Content</h3>
        </div>
        <div class="block-content block-content-full block-content-narrow">
            <div class="push-30 push-30-t">
                <?php $one->get_text('large', 5); ?>
            </div>
        </div>
    </div>
    <!-- END Demo Content -->
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>
<?php require 'inc/views/template_footer_end.php'; ?>