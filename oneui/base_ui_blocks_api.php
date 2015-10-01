<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">
                Block API <small>Powerful way to manipulate any block you want.</small>
            </h1>
        </div>
        <div class="col-sm-5 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>UI Elements</li>
                <li>Blocks</li>
                <li><a class="link-effect" href="">API</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content">
    <!-- Blocks API, functionality initialized in App() -> uiBlocksApi() -->
    <h2 class="content-heading">API</h2>
    <div class="row">
        <div class="col-sm-8">
            <div class="block">
                <div class="block-content">
                    <p>You can use <code>App.blocks('_blockId_', '_mode_');</code></p>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Live</th>
                                    <th>Mode</th>
                                    <th>Live</th>
                                    <th>Mode</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <button class="btn btn-sm btn-primary" type="button" onclick="App.blocks('#my-block', 'content_toggle');">Toggle Content</button>
                                    </td>
                                    <td>
                                        <code>content_toggle</code>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-warning" type="button" onclick="App.blocks('#my-block', 'refresh_toggle');">Toggle Refresh</button>
                                    </td>
                                    <td>
                                        <code>refresh_toggle</code>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <button class="btn btn-sm btn-primary" type="button" onclick="App.blocks('#my-block', 'content_hide');">Hide Content</button>
                                    </td>
                                    <td>
                                        <code>content_hide</code>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-warning" type="button" onclick="App.blocks('#my-block', 'state_loading');">State Loading</button>
                                    </td>
                                    <td>
                                        <code>state_loading</code>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <button class="btn btn-sm btn-primary" type="button" onclick="App.blocks('#my-block', 'content_show');">Show Content</button>
                                    </td>
                                    <td>
                                        <code>content_show</code>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-warning" type="button" onclick="App.blocks('#my-block', 'state_normal');">State Normal</button>
                                    </td>
                                    <td>
                                        <code>state_normal</code>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <button class="btn btn-sm btn-success" type="button" onclick="App.blocks('#my-block', 'fullscreen_toggle');">Toggle Fullscreen</button>
                                    </td>
                                    <td>
                                        <code>fullscreen_toggle</code>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-danger" type="button" onclick="App.blocks('#my-block', 'close');">Close</button>
                                    </td>
                                    <td>
                                        <code>close</code>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <button class="btn btn-sm btn-success" type="button" onclick="App.blocks('#my-block', 'fullscreen_on');">Fullscreen On</button>
                                    </td>
                                    <td>
                                        <code>fullscreen_on</code>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-danger" type="button" onclick="App.blocks('#my-block', 'open');">Open</button>
                                    </td>
                                    <td>
                                        <code>open</code>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <button class="btn btn-sm btn-success" type="button" onclick="App.blocks('#my-block', 'fullscreen_off');">Fullscreen Off</button>
                                    </td>
                                    <td>
                                        <code>fullscreen_off</code>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="block" id="my-block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                        </li>
                        <li>
                            <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Test Block</h3>
                </div>
                <div class="block-content">
                    <p>This is our test block with id <code>my-block</code></p>
                </div>
            </div>
        </div>
    </div>
    <!-- END Blocks API -->

    <!-- Interactive Blocks, functionality initialized in App() -> uiBlocks() -->
    <!-- In fullscreen and content toggle buttons, icon classes are auto added from App() -> uiBlocks() -->
    <h2 class="content-heading">Interactive Blocks</h2>
    <div class="row">
        <div class="col-sm-6">
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <!-- To toggle block's content, just add the following properties to your button: data-toggle="block-option" data-action="content_toggle" -->
                            <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Toggle Content</h3>
                </div>
                <div class="block-content">
                    <?php $one->get_text('small'); ?>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <!-- To close a block, just add the following properties to your button: data-toggle="block-option" data-action="close" -->
                            <button type="button" data-toggle="block-option" data-action="close"><i class="si si-close"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Close Block</h3>
                </div>
                <div class="block-content">
                    <?php $one->get_text('small'); ?>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <!-- To toggle fullscreen a block, just add the following properties to your button: data-toggle="block-option" data-action="fullscreen_toggle" -->
                            <button type="button" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Maximize Block</h3>
                </div>
                <div class="block-content">
                    <?php $one->get_text('small'); ?>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <!--
                            To activate loading state to a block, just add the following properties to your button: data-toggle="block-option" data-action="refresh_toggle"
                            If you also add the property data-action-mode="demo" the loading state will be disabled in 2 seconds for demostration purposes

                            Without the demo mode, you can restore the block to its normal state by using the following JS code: App.blocks('yourBlockId','state_normal');
                            You can use it after you've loaded successfully your data (please check Blocks API)
                            -->
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Refresh</h3>
                </div>
                <div class="block-content">
                    <?php $one->get_text('small'); ?>
                </div>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="block">
                <div class="block-header">
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
                        <li>
                            <button type="button" data-toggle="block-option" data-action="close"><i class="si si-close"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">All Together</h3>
                </div>
                <div class="block-content">
                    <?php $one->get_text('medium', 2); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- END Interactive Blocks -->
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>
<?php require 'inc/views/template_footer_end.php'; ?>