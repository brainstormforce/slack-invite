<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Header -->
<!-- You can use the .hidden-print class to hide an element in printing -->
<div class="content bg-gray-lighter hidden-print">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">
                Invoice <small>Clean and professional design.</small>
            </h1>
        </div>
        <div class="col-sm-5 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>Generic</li>
                <li><a class="link-effect" href="">Invoice</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content content-boxed">
    <!-- Invoice -->
    <div class="block">
        <div class="block-header">
            <ul class="block-options">
                <li>
                    <!-- Print Page functionality is initialized in App() -> uiHelperPrint() -->
                    <button type="button" onclick="App.initHelper('print-page');"><i class="si si-printer"></i> Print Invoice</button>
                </li>
                <li>
                    <button type="button" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                </li>
                <li>
                    <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                </li>
            </ul>
            <h3 class="block-title">#INV0625</h3>
        </div>
        <div class="block-content block-content-narrow">
            <!-- Invoice Info -->
            <div class="h1 text-center push-30-t push-30 hidden-print">INVOICE</div>
            <hr class="hidden-print">
            <div class="row items-push-2x">
                <!-- Company Info -->
                <div class="col-xs-6 col-sm-4 col-lg-3">
                    <p class="h2 font-w400 push-5">Company</p>
                    <address>
                        Address<br>
                        Town/City<br>
                        Region, Zip/Postal Code<br>
                        <i class="si si-call-end"></i> (000) 000-0000
                    </address>
                </div>
                <!-- END Company Info -->

                <!-- Client Info -->
                <div class="col-xs-6 col-sm-4 col-sm-offset-4 col-lg-3 col-lg-offset-6 text-right">
                    <p class="h2 font-w400 push-5">Client</p>
                    <address>
                        Address<br>
                        Town/City<br>
                        Region, Zip/Postal Code<br>
                        <i class="si si-call-end"></i> (000) 000-0000
                    </address>
                </div>
                <!-- END Client Info -->
            </div>
            <!-- END Invoice Info -->

            <!-- Table -->
            <div class="table-responsive push-50">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 50px;"></th>
                            <th>Product</th>
                            <th class="text-center" style="width: 100px;">Quantity</th>
                            <th class="text-right" style="width: 120px;">Unit</th>
                            <th class="text-right" style="width: 120px;">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>
                                <p class="font-w600 push-10">App Design &amp; Development</p>
                                <div class="text-muted">Design/Development of iOS and Android application</div>
                            </td>
                            <td class="text-center"><span class="badge badge-primary">1</span></td>
                            <td class="text-right">$ 25.000,00</td>
                            <td class="text-right">$ 25.000,00</td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td>
                                <p class="font-w600 push-10">Icon Pack Design</p>
                                <div class="text-muted">50 uniquely crafted icons for promotion</div>
                            </td>
                            <td class="text-center"><span class="badge badge-primary">1</span></td>
                            <td class="text-right">$ 900,00</td>
                            <td class="text-right">$ 900,00</td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td>
                                <p class="font-w600 push-10">Website Design</p>
                                <div class="text-muted">Promotional website for the mobile application</div>
                            </td>
                            <td class="text-center"><span class="badge badge-primary">1</span></td>
                            <td class="text-right">$ 1.600,00</td>
                            <td class="text-right">$ 1.600,00</td>
                        </tr>
                        <tr>
                            <td colspan="4" class="font-w600 text-right">Subtotal</td>
                            <td class="text-right">$ 27.500,00</td>
                        </tr>
                        <tr>
                            <td colspan="4" class="font-w600 text-right">Vat Rate</td>
                            <td class="text-right">20%</td>
                        </tr>
                        <tr>
                            <td colspan="4" class="font-w600 text-right">Vat Due</td>
                            <td class="text-right">$ 5.500,00</td>
                        </tr>
                        <tr class="active">
                            <td colspan="4" class="font-w700 text-uppercase text-right">Total Due</td>
                            <td class="font-w700 text-right">$ 33.000,00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- END Table -->

            <!-- Footer -->
            <hr class="hidden-print">
            <p class="text-muted text-center"><small>Thank you very much for doing business with us. We look forward to working with you again!</small></p>
            <!-- END Footer -->
        </div>
    </div>
    <!-- END Invoice -->
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>
<?php require 'inc/views/template_footer_end.php'; ?>