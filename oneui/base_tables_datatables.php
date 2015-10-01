<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/datatables/jquery.dataTables.min.css">

<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">
                DataTables <small>Tables transformed with dynamic features. Powered by DataTables.</small>
            </h1>
        </div>
        <div class="col-sm-5 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>Tables</li>
                <li><a class="link-effect" href="">DataTables</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content">
    <!-- Dynamic Table Full -->
    <div class="block">
        <div class="block-header">
            <h3 class="block-title">Dynamic Table <small>Full</small></h3>
        </div>
        <div class="block-content">
            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
            <table class="table table-bordered table-striped js-dataTable-full">
                <thead>
                    <tr>
                        <th class="text-center"></th>
                        <th>Name</th>
                        <th class="hidden-xs">Email</th>
                        <th class="hidden-xs" style="width: 15%;">Access</th>
                        <th class="text-center" style="width: 10%;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 1; $i < 41; $i++) { ?>
                    <tr>
                        <td class="text-center"><?php echo $i; ?></td>
                        <td class="font-w600"><?php $one->get_name(); ?></td>
                        <td class="hidden-xs">client<?php echo $i; ?>@example.com</td>
                        <td class="hidden-xs">
                            <?php $one->get_label(); ?>
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- END Dynamic Table Full -->

    <!-- Dynamic Table Simple -->
    <div class="block">
        <div class="block-header">
            <h3 class="block-title">Dynamic Table <small>With only sorting and pagination</small></h3>
        </div>
        <div class="block-content">
            <!-- DataTables init on table by adding .js-dataTable-simple class, functionality initialized in js/pages/base_tables_datatables.js -->
            <table class="table table-bordered table-striped js-dataTable-simple">
                <thead>
                    <tr>
                        <th class="text-center"></th>
                        <th>Name</th>
                        <th class="hidden-xs">Email</th>
                        <th class="hidden-xs" style="width: 15%;">Access</th>
                        <th class="text-center" style="width: 10%;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 1; $i < 41; $i++) { ?>
                    <tr>
                        <td class="text-center"><?php echo $i; ?></td>
                        <td class="font-w600"><?php $one->get_name(); ?></td>
                        <td class="hidden-xs">client<?php echo $i; ?>@example.com</td>
                        <td class="hidden-xs">
                            <?php $one->get_label(); ?>
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- END Dynamic Table Simple -->
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>

<!-- Page JS Plugins -->
<script src="<?php echo $one->assets_folder; ?>/js/plugins/datatables/jquery.dataTables.min.js"></script>

<!-- Page JS Code -->
<script src="<?php echo $one->assets_folder; ?>/js/pages/base_tables_datatables.js"></script>

<?php require 'inc/views/template_footer_end.php'; ?>