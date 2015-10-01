<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">
                Table Tools <small>Custom functionality to further enrich your tables.</small>
            </h1>
        </div>
        <div class="col-sm-5 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>Tables</li>
                <li><a class="link-effect" href="">Tools</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content content-boxed">
    <!-- Table Sections (.js-table-sections class is initialized in App() -> uiHelperTableToolsSections()) -->
    <div class="block">
        <div class="block-header">
            <div class="block-options">
                <code>.js-table-sections</code>
            </div>
            <h3 class="block-title">Table Sections</h3>
        </div>
        <div class="block-content">
            <!--
            Separate your table content with multiple tbody sections. Add one row and add the class .js-table-sections-header to a
            tbody section to make it clickable. It will then toggle the next tbody section which can have multiple rows. Eg:

            <tbody class="js-table-sections-header">One row</tbody>
            <tbody>Multiple rows</tbody>
            <tbody class="js-table-sections-header">One row</tbody>
            <tbody>Multiple rows</tbody>
            <tbody class="js-table-sections-header">One row</tbody>
            <tbody>Multiple rows</tbody>

            You can also add the class .open in your tbody.js-table-sections-header to make the next tbody section visible by default
            -->
            <table class="js-table-sections table table-hover">
                <thead>
                    <tr>
                        <th style="width: 30px;"></th>
                        <th>Name</th>
                        <th style="width: 15%;">Access</th>
                        <th class="hidden-xs" style="width: 15%;">Date</th>
                    </tr>
                </thead>
                <?php for ($i = 1; $i < 7; $i++) { ?>
                <tbody class="js-table-sections-header<?php if ($i == 1) { echo ' open'; } ?>">
                    <tr>
                        <td class="text-center">
                            <i class="fa fa-angle-right"></i>
                        </td>
                        <td class="font-w600"><?php $one->get_name(); ?></td>
                        <td>
                            <?php $one->get_label(); ?>
                        </td>
                        <td class="hidden-xs">
                            <em class="text-muted">June <?php echo rand(1, 28); ?>, 2015 12:16</em>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <?php for ($j = 1; $j < 5; $j++) { ?>
                    <tr>
                        <td class="text-center"></td>
                        <td class="font-w600 text-success">+ $<?php echo rand(10, 100); ?>,00</td>
                        <td>
                            <small>Paypal</small>
                        </td>
                        <td class="hidden-xs">
                            <small class="text-muted">June <?php echo rand(1, 28); ?>, 2015 12:16</small>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
                <?php } ?>
            </table>
        </div>
    </div>
    <!-- END Table Sections -->

    <!-- Checkable Table (.js-table-checkable class is initialized in App() -> uiHelperTableToolsCheckable()) -->
    <div class="block">
        <div class="block-header">
            <div class="block-options">
                <code>.js-table-checkable</code>
            </div>
            <h3 class="block-title">Checkable Table</h3>
        </div>
        <div class="block-content">
            <!-- If you put a checkbox in thead section, it will automatically toggle all tbody section checkboxes -->
            <table class="js-table-checkable table table-hover">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 70px;">
                            <label class="css-input css-checkbox css-checkbox-primary remove-margin-t remove-margin-b">
                                <input type="checkbox" id="check-all" name="check-all"><span></span>
                            </label>
                        </th>
                        <th>Name</th>
                        <th class="hidden-xs" style="width: 15%;">Access</th>
                        <th class="hidden-xs" style="width: 15%;">Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 1; $i < 7; $i++) { ?>
                    <tr>
                        <td class="text-center">
                            <label class="css-input css-checkbox css-checkbox-primary">
                                <input type="checkbox" id="row_<?php echo $i; ?>" name="row_<?php echo $i; ?>"><span></span>
                            </label>
                        </td>
                        <td>
                            <p class="font-w600 push-10"><?php $one->get_name(); ?></p>
                            <p class="text-muted remove-margin-b">Customer details and further information</p>
                        </td>
                        <td class="hidden-xs">
                            <?php $one->get_label(); ?>
                        </td>
                        <td class="hidden-xs">
                            <em class="text-muted">June <?php echo rand(1, 28); ?>, 2015 12:16</em>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- END Checkable Table -->
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>

<!-- Page JS Code -->
<script>
    $(function(){
        // Init page helpers (Table Tools helper)
        App.initHelpers('table-tools');
    });
</script>

<?php require 'inc/views/template_footer_end.php'; ?>