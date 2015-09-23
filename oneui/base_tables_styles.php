<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">
                Table Styles <small>Multiple style options to match your preferences.</small>
            </h1>
        </div>
        <div class="col-sm-5 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>Tables</li>
                <li><a class="link-effect" href="">Styles</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content">
    <div class="row">
        <div class="col-lg-6">
            <!-- Default Table -->
            <div class="block">
                <div class="block-header">
                    <div class="block-options">
                        <code>.table</code>
                    </div>
                    <h3 class="block-title">Default Table</h3>
                </div>
                <div class="block-content">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 50px;">#</th>
                                <th>Name</th>
                                <th class="hidden-xs" style="width: 15%;">Access</th>
                                <th class="text-center" style="width: 100px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 1; $i < 7; $i++) { ?>
                            <tr>
                                <td class="text-center"><?php echo $i; ?></td>
                                <td><?php $one->get_name(); ?></td>
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
            <!-- END Default Table -->
        </div>
        <div class="col-lg-6">
            <!-- Striped Table -->
            <div class="block">
                <div class="block-header">
                    <div class="block-options">
                        <code>.table-striped</code>
                    </div>
                    <h3 class="block-title">Striped Table</h3>
                </div>
                <div class="block-content">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 50px;">#</th>
                                <th>Name</th>
                                <th class="hidden-xs" style="width: 15%;">Access</th>
                                <th class="text-center" style="width: 100px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 1; $i < 7; $i++) { ?>
                            <tr>
                                <td class="text-center"><?php echo $i; ?></td>
                                <td><?php $one->get_name(); ?></td>
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
            <!-- END Striped Table -->
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <!-- Hover Table -->
            <div class="block">
                <div class="block-header">
                    <div class="block-options">
                        <code>.table-hover</code>
                    </div>
                    <h3 class="block-title">Hover Table</h3>
                </div>
                <div class="block-content">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 50px;">#</th>
                                <th>Name</th>
                                <th class="hidden-xs" style="width: 15%;">Access</th>
                                <th class="text-center" style="width: 100px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 1; $i < 7; $i++) { ?>
                            <tr>
                                <td class="text-center"><?php echo $i; ?></td>
                                <td><?php $one->get_name(); ?></td>
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
            <!-- END Hover Table -->
        </div>
        <div class="col-lg-6">
            <!-- Bordered Table -->
            <div class="block">
                <div class="block-header">
                    <div class="block-options">
                        <code>.table-bordered</code>
                    </div>
                    <h3 class="block-title">Bordered Table</h3>
                </div>
                <div class="block-content">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 50px;">#</th>
                                <th>Name</th>
                                <th class="hidden-xs" style="width: 15%;">Access</th>
                                <th class="text-center" style="width: 100px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 1; $i < 7; $i++) { ?>
                            <tr>
                                <td class="text-center"><?php echo $i; ?></td>
                                <td><?php $one->get_name(); ?></td>
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
            <!-- END Bordered Table -->
        </div>
        <div class="col-lg-6">
            <!-- Borderless Table -->
            <div class="block">
                <div class="block-header">
                    <div class="block-options">
                        <code>.table-borderless</code>
                    </div>
                    <h3 class="block-title">Borderless Table</h3>
                </div>
                <div class="block-content">
                    <table class="table table-hover table-borderless">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 50px;">#</th>
                                <th>Name</th>
                                <th class="hidden-xs" style="width: 15%;">Access</th>
                                <th class="text-center" style="width: 100px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 1; $i < 7; $i++) { ?>
                            <tr>
                                <td class="text-center"><?php echo $i; ?></td>
                                <td><?php $one->get_name(); ?></td>
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
            <!-- END Borderless Table -->
        </div>
        <div class="col-lg-6">
            <!-- Condensed Table -->
            <div class="block">
                <div class="block-header">
                    <div class="block-options">
                        <code>.table-condensed</code>
                    </div>
                    <h3 class="block-title">Condensed Table</h3>
                </div>
                <div class="block-content">
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 50px;">#</th>
                                <th>Name</th>
                                <th class="hidden-xs" style="width: 15%;">Access</th>
                                <th class="text-center" style="width: 100px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 1; $i < 9; $i++) { ?>
                            <tr>
                                <td class="text-center"><?php echo $i; ?></td>
                                <td><?php $one->get_name(); ?></td>
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
            <!-- END Condensed Table -->
        </div>
        <div class="col-lg-6">
            <!-- Header BG Table -->
            <div class="block">
                <div class="block-header">
                    <div class="block-options">
                        <code>.table-header-bg</code>
                    </div>
                    <h3 class="block-title">Header Background Table</h3>
                </div>
                <div class="block-content">
                    <table class="table table-striped table-borderless table-header-bg">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 50px;">#</th>
                                <th>Name</th>
                                <th class="hidden-xs" style="width: 15%;">Access</th>
                                <th class="text-center" style="width: 100px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 1; $i < 10; $i++) { ?>
                            <tr>
                                <td class="text-center"><?php echo $i; ?></td>
                                <td><?php $one->get_name(); ?></td>
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
            <!-- END Header BG Table -->
        </div>
        <div class="col-lg-6">
            <!-- Contextual Table -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Contextual Table</h3>
                </div>
                <div class="block-content">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 50px;">#</th>
                                <th>Name</th>
                                <th class="hidden-xs" style="width: 15%;">Access</th>
                                <th class="text-center" style="width: 100px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="active">
                                <td class="text-center">1</td>
                                <td><?php $one->get_name(); ?></td>
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
                            <tr>
                                <td class="text-center">2</td>
                                <td><?php $one->get_name(); ?></td>
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
                            <tr class="warning">
                                <td class="text-center">3</td>
                                <td><?php $one->get_name(); ?></td>
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
                            <tr>
                                <td class="text-center">4</td>
                                <td><?php $one->get_name(); ?></td>
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
                            <tr class="danger">
                                <td class="text-center">5</td>
                                <td><?php $one->get_name(); ?></td>
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
                            <tr>
                                <td class="text-center">6</td>
                                <td><?php $one->get_name(); ?></td>
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
                            <tr class="info">
                                <td class="text-center">7</td>
                                <td><?php $one->get_name(); ?></td>
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
                            <tr>
                                <td class="text-center">8</td>
                                <td><?php $one->get_name(); ?></td>
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
                            <tr class="success">
                                <td class="text-center">9</td>
                                <td><?php $one->get_name(); ?></td>
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
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END Contextual Table -->
        </div>
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>
<?php require 'inc/views/template_footer_end.php'; ?>