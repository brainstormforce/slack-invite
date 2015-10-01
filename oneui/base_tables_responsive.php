<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">
                Responsive Tables <small>Mobile friendly tables that work across all screen sizes.</small>
            </h1>
        </div>
        <div class="col-sm-5 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>Tables</li>
                <li><a class="link-effect" href="">Responsive</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content">
    <!-- Full Table -->
    <div class="block">
        <div class="block-header">
            <h3 class="block-title">Full Table</h3>
        </div>
        <div class="block-content">
            <p class="push-30">The first way to make a table responsive, is to wrap it with <code>&lt;div class=&quot;table-responsive&quot;&gt;&lt;/div&gt;</code>. This way the table will be horizontally scrollable and all data will be accessible on smaller screens (&lt; 768px).</p>
            <div class="table-responsive">
                <table class="table table-striped table-vcenter">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 120px;"><i class="si si-user"></i></th>
                            <th>Name</th>
                            <th style="width: 30%;">Email</th>
                            <th style="width: 15%;">Access</th>
                            <th class="text-center" style="width: 100px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i = 1; $i < 6; $i++) { ?>
                        <tr>
                            <td class="text-center">
                                <?php $one->get_avatar(0, 'female', 48); ?>
                            </td>
                            <td class="font-w600"><?php $one->get_name('female'); ?></td>
                            <td>client<?php echo $i; ?>@example.com</td>
                            <td>
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
    </div>
    <!-- END Full Table -->

    <!-- Partial Table -->
    <div class="block">
        <div class="block-header">
            <h3 class="block-title">Partial Table</h3>
        </div>
        <div class="block-content">
            <p>The second way is to use specific CSS classes for hiding columns in various screen resolutions. This way you can hide the less important columns and keep the most valuable on mobiles. At the following example the <strong>Access</strong> column isn't visible on small and extra small screens and <strong>Email</strong> column isn't visible on extra small screens.</p>
            <table class="table table-striped table-vcenter">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 120px;"><i class="si si-user"></i></th>
                        <th>Name</th>
                        <th class="hidden-xs" style="width: 30%;">Email</th>
                        <th class="hidden-xs hidden-sm" style="width: 15%;">Access</th>
                        <th class="text-center" style="width: 100px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 1; $i < 6; $i++) { ?>
                    <tr>
                        <td class="text-center">
                            <?php $one->get_avatar(0, 'male', 48); ?>
                        </td>
                        <td class="font-w600"><?php $one->get_name('male'); ?></td>
                        <td class="hidden-xs">client<?php echo $i; ?>@example.com</td>
                        <td class="hidden-xs hidden-sm">
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
    <!-- END Partial Table -->

    <!-- Helper Classes -->
    <div class="block">
        <div class="block-header">
            <h3 class="block-title">Helper Classes</h3>
        </div>
        <div class="block-content">
            <div class="table-responsive">
                <table class="table table-striped table-borderless text-center">
                    <thead>
                        <tr>
                            <th style="width: 10%;"></th>
                            <th class="text-center">
                                Extra small devices<br>
                                <small class="text-capitalize font-w400 text-muted">Phones (&lt;768px)</small>
                            </th>
                            <th class="text-center">
                                Small devices<br>
                                <small class="text-capitalize font-w400 text-muted">Tablets (&ge;768px)</small>
                            </th>
                            <th class="text-center">
                                Medium devices<br>
                                <small class="text-capitalize font-w400 text-muted">Desktops (&ge;992px)</small>
                            </th>
                            <th class="text-center">
                                Large devices<br>
                                <small class="text-capitalize font-w400 text-muted">Desktops (&ge;1200px)</small>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><code>.visible-xs</code></td>
                            <td><i class="si si-check text-success"></i></td>
                            <td><i class="si si-close text-danger"></i></td>
                            <td><i class="si si-close text-danger"></i></td>
                            <td><i class="si si-close text-danger"></i></td>
                        </tr>
                        <tr>
                            <td><code>.visible-sm</code></td>
                            <td><i class="si si-close text-danger"></i></td>
                            <td><i class="si si-check text-success"></i></td>
                            <td><i class="si si-close text-danger"></i></td>
                            <td><i class="si si-close text-danger"></i></td>
                        </tr>
                        <tr>
                            <td><code>.visible-md</code></td>
                            <td><i class="si si-close text-danger"></i></td>
                            <td><i class="si si-close text-danger"></i></td>
                            <td><i class="si si-check text-success"></i></td>
                            <td><i class="si si-close text-danger"></i></td>
                        </tr>
                        <tr>
                            <td><code>.visible-lg</code></td>
                            <td><i class="si si-close text-danger"></i></td>
                            <td><i class="si si-close text-danger"></i></td>
                            <td><i class="si si-close text-danger"></i></td>
                            <td><i class="si si-check text-success"></i></td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td><code>.hidden-xs</code></td>
                            <td><i class="si si-close text-danger"></i></td>
                            <td><i class="si si-check text-success"></i></td>
                            <td><i class="si si-check text-success"></i></td>
                            <td><i class="si si-check text-success"></i></td>
                        </tr>
                        <tr>
                            <td><code>.hidden-sm</code></td>
                            <td><i class="si si-check text-success"></i></td>
                            <td><i class="si si-close text-danger"></i></td>
                            <td><i class="si si-check text-success"></i></td>
                            <td><i class="si si-check text-success"></i></td>
                        </tr>
                        <tr>
                            <td><code>.hidden-md</code></td>
                            <td><i class="si si-check text-success"></i></td>
                            <td><i class="si si-check text-success"></i></td>
                            <td><i class="si si-close text-danger"></i></td>
                            <td><i class="si si-check text-success"></i></td>
                        </tr>
                        <tr>
                            <td><code>.hidden-lg</code></td>
                            <td><i class="si si-check text-success"></i></td>
                            <td><i class="si si-check text-success"></i></td>
                            <td><i class="si si-check text-success"></i></td>
                            <td><i class="si si-close text-danger"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- END Helper Classes -->
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>
<?php require 'inc/views/template_footer_end.php'; ?>