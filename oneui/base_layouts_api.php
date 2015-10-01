<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <h1 class="page-heading push">
        Layout API <small>Powerful layout that you can manipulate any way you want.</small>
    </h1>
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content bg-white">
    <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
    <p>You can either use <code>App.layout('_mode_');</code> or enable it on a button with the attributes <code>data-toggle=&quot;layout&quot; data-action=&quot;_mode_&quot;</code></p>
    <div class="table-responsive push">
        <table class="table table-bordered remove-margin-b">
            <thead>
                <tr>
                    <th>Live</th>
                    <th>Mode</th>
                </tr>
            </thead>
            <tbody>
                <tr class="active">
                    <th colspan="2">Sidebar Visibility</th>
                </tr>
                <tr>
                    <td style="width: 25%;">
                        <button class="btn btn-sm btn-primary" type="button" data-toggle="layout" data-action="sidebar_toggle">Toggle Sidebar</button>
                    </td>
                    <td style="width: 75%;">
                        <code>sidebar_toggle</code>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="btn btn-sm btn-primary" type="button" data-toggle="layout" data-action="sidebar_open">Open Sidebar</button>
                    </td>
                    <td>
                        <code>sidebar_open</code>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="btn btn-sm btn-primary" type="button" data-toggle="layout" data-action="sidebar_close">Close Sidebar</button>
                    </td>
                    <td>
                        <code>sidebar_close</code>
                    </td>
                </tr>
                <tr class="active">
                    <th colspan="2">Mini Sidebar Mode <span class="font-s13 text-muted">Screen width greater than 991px</span></th>
                </tr>
                <tr>
                    <td>
                        <button class="btn btn-sm btn-warning" type="button" data-toggle="layout" data-action="sidebar_mini_toggle">Toggle Mini Sidebar Mode</button>
                    </td>
                    <td>
                        <code>sidebar_mini_toggle</code>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="btn btn-sm btn-warning" type="button" data-toggle="layout" data-action="sidebar_mini_on">Enable Mini Sidebar</button>
                    </td>
                    <td>
                        <code>sidebar_mini_on</code>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="btn btn-sm btn-warning" type="button" data-toggle="layout" data-action="sidebar_mini_off">Disable Mini Sidebar</button>
                    </td>
                    <td>
                        <code>sidebar_mini_off</code>
                    </td>
                </tr>

                <tr class="active">
                    <th colspan="2">Sidebar Position</th>
                </tr>
                <tr>
                    <td>
                        <button class="btn btn-sm btn-danger" type="button" data-toggle="layout" data-action="sidebar_pos_toggle">Toggle Sidebar Position</button>
                    </td>
                    <td>
                        <code>sidebar_pos_toggle</code>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="btn btn-sm btn-danger" type="button" data-toggle="layout" data-action="sidebar_pos_left">Left Sidebar Position</button>
                    </td>
                    <td>
                        <code>sidebar_pos_left</code>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="btn btn-sm btn-danger" type="button" data-toggle="layout" data-action="sidebar_pos_right">Right Sidebar Position</button>
                    </td>
                    <td>
                        <code>sidebar_pos_right</code>
                    </td>
                </tr>
                <tr class="active">
                    <th colspan="2">Side Overlay Visibility</th>
                </tr>
                <tr>
                    <td>
                        <button class="btn btn-sm btn-info" type="button" data-toggle="layout" data-action="side_overlay_toggle">Toggle Side Overlay</button>
                    </td>
                    <td>
                        <code>side_overlay_toggle</code>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="btn btn-sm btn-info" type="button" data-toggle="layout" data-action="side_overlay_open">Open Side Overlay</button>
                    </td>
                    <td>
                        <code>side_overlay_open</code>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="btn btn-sm btn-info" type="button" data-toggle="layout" data-action="side_overlay_close">Close Side Overlay</button>
                    </td>
                    <td>
                        <code>side_overlay_close</code>
                    </td>
                </tr>
                <tr class="active">
                    <th colspan="2">Side Overlay Hover Mode <span class="font-s13 text-muted">Screen width greater than 991px</span></th>
                </tr>
                <tr>
                    <td>
                        <button class="btn btn-sm btn-success" type="button" data-toggle="layout" data-action="side_overlay_hoverable_toggle">Toggle Side Overlay Hover Mode</button>
                    </td>
                    <td>
                        <code>side_overlay_hoverable_toggle</code>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="btn btn-sm btn-success" type="button" data-toggle="layout" data-action="side_overlay_hoverable_on">Enable Side Overlay Hover Mode</button>
                    </td>
                    <td>
                        <code>side_overlay_hoverable_on</code>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="btn btn-sm btn-success" type="button" data-toggle="layout" data-action="side_overlay_hoverable_off">Disabled Side Overlay Hover Mode</button>
                    </td>
                    <td>
                        <code>side_overlay_hoverable_off</code>
                    </td>
                </tr>
                <tr class="active">
                    <th colspan="2">Header Fixed Mode</th>
                </tr>
                <tr>
                    <td>
                        <button class="btn btn-sm btn-warning" type="button" data-toggle="layout" data-action="header_fixed_toggle">Toggle Header Fixed Mode</button>
                    </td>
                    <td>
                        <code>header_fixed_toggle</code>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="btn btn-sm btn-warning" type="button" data-toggle="layout" data-action="header_fixed_on">Enable Header Fixed Mode</button>
                    </td>
                    <td>
                        <code>header_fixed_on</code>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="btn btn-sm btn-warning" type="button" data-toggle="layout" data-action="header_fixed_off">Disable Header Fixed Mode</button>
                    </td>
                    <td>
                        <code>header_fixed_off</code>
                    </td>
                </tr>
                <tr class="active">
                    <th colspan="2">Custom Side Scrolling Mode <span class="font-s13 text-muted">Screen width greater than 991px</span></th>
                </tr>
                <tr>
                    <td>
                        <button class="btn btn-sm btn-primary" type="button" data-toggle="layout" data-action="side_scroll_toggle">Toggle Custom Side Scroll</button>

                    </td>
                    <td>
                        <code>side_scroll_toggle</code>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="btn btn-sm btn-primary" type="button" data-toggle="layout" data-action="side_scroll_on">Enable Custom Side Scroll</button>
                    </td>
                    <td>
                        <code>side_scroll_on</code>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="btn btn-sm btn-primary" type="button" data-toggle="layout" data-action="side_scroll_off">Disable Custom Side Scroll</button>
                    </td>
                    <td>
                        <code>side_scroll_off</code>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- END Layout API -->
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>
<?php require 'inc/views/template_footer_end.php'; ?>