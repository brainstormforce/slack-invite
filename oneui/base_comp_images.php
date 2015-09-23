<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">
                Images <small>Bring your images and galleries to life with amazing animations.</small>
            </h1>
        </div>
        <div class="col-sm-5 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>Components</li>
                <li><a class="link-effect" href="">Images</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content content-narrow">
    <div class="row">
        <div class="col-md-6">
            <!-- Default -->
            <h2 class="content-heading">Default</h2>
            <div class="row items-push">
                <?php for($i = 1; $i < 3; $i++) { ?>
                <div class="col-lg-6 animated fadeIn">
                    <div class="img-container">
                        <?php $one->get_photo($i, false, 'img-responsive'); ?>
                        <div class="img-options">
                            <div class="img-options-content">
                                <h3 class="font-w400 text-white push-5">Image Caption</h3>
                                <h4 class="h6 font-w400 text-white-op push-15">Some Extra Info</h4>
                                <a class="btn btn-sm btn-default" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a>
                                <a class="btn btn-sm btn-default" href="javascript:void(0)"><i class="fa fa-times"></i> Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <!-- END Default -->
        </div>
        <div class="col-md-6">
            <!-- Image Zoom In -->
            <h2 class="content-heading">Image Zoom In <code class="text-lowercase">.fx-img-zoom-in</code></h2>
            <div class="row items-push">
                <?php for($i = 3; $i < 5; $i++) { ?>
                <div class="col-lg-6 animated fadeIn">
                    <div class="img-container fx-img-zoom-in">
                        <?php $one->get_photo($i, false, 'img-responsive'); ?>
                        <div class="img-options">
                            <div class="img-options-content">
                                <h3 class="font-w400 text-white push-5">Image Caption</h3>
                                <h4 class="h6 font-w400 text-white-op push-15">Some Extra Info</h4>
                                <a class="btn btn-sm btn-default" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a>
                                <a class="btn btn-sm btn-default" href="javascript:void(0)"><i class="fa fa-times"></i> Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <!-- END Image Zoom In -->
        </div>
        <div class="col-md-6">
            <!-- Image Rotate Right -->
            <h2 class="content-heading">Image Rotate Right <code class="text-lowercase">.fx-img-rotate-r</code></h2>
            <div class="row items-push">
                <?php for($i = 5; $i < 7; $i++) { ?>
                <div class="col-lg-6 animated fadeIn">
                    <div class="img-container fx-img-rotate-r">
                        <?php $one->get_photo($i, false, 'img-responsive'); ?>
                        <div class="img-options">
                            <div class="img-options-content">
                                <h3 class="font-w400 text-white push-5">Image Caption</h3>
                                <h4 class="h6 font-w400 text-white-op push-15">Some Extra Info</h4>
                                <a class="btn btn-sm btn-default" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a>
                                <a class="btn btn-sm btn-default" href="javascript:void(0)"><i class="fa fa-times"></i> Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <!-- END Image Rotate Right -->
        </div>
        <div class="col-md-6">
            <!-- Image Rotate Left -->
            <h2 class="content-heading">Image Rotate Left <code class="text-lowercase">.fx-img-rotate-l</code></h2>
            <div class="row items-push">
                <?php for($i = 7; $i < 9; $i++) { ?>
                <div class="col-lg-6 animated fadeIn">
                    <div class="img-container fx-img-rotate-l">
                        <?php $one->get_photo($i, false, 'img-responsive'); ?>
                        <div class="img-options">
                            <div class="img-options-content">
                                <h3 class="font-w400 text-white push-5">Image Caption</h3>
                                <h4 class="h6 font-w400 text-white-op push-15">Some Extra Info</h4>
                                <a class="btn btn-sm btn-default" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a>
                                <a class="btn btn-sm btn-default" href="javascript:void(0)"><i class="fa fa-times"></i> Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <!-- END Image Rotate Left -->
        </div>
        <div class="col-md-6">
            <!-- Slide Left -->
            <h2 class="content-heading">Slide Left <code class="text-lowercase">.fx-opt-slide-left</code></h2>
            <div class="row items-push">
                <?php for($i = 9; $i < 11; $i++) { ?>
                <div class="col-lg-6 animated fadeIn">
                    <div class="img-container fx-img-zoom-in fx-opt-slide-left">
                        <?php $one->get_photo($i, false, 'img-responsive'); ?>
                        <div class="img-options">
                            <div class="img-options-content">
                                <h3 class="font-w400 text-white push-5">Image Caption</h3>
                                <h4 class="h6 font-w400 text-white-op push-15">Some Extra Info</h4>
                                <a class="btn btn-sm btn-default" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a>
                                <a class="btn btn-sm btn-default" href="javascript:void(0)"><i class="fa fa-times"></i> Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <!-- END Slide Left -->
        </div>
        <div class="col-md-6">
            <!-- Slide Right -->
            <h2 class="content-heading">Slide Right <code class="text-lowercase">.fx-opt-slide-right</code></h2>
            <div class="row items-push">
                <?php for($i = 11; $i < 13; $i++) { ?>
                <div class="col-lg-6 animated fadeIn">
                    <div class="img-container fx-img-zoom-in fx-opt-slide-right">
                        <?php $one->get_photo($i, false, 'img-responsive'); ?>
                        <div class="img-options">
                            <div class="img-options-content">
                                <h3 class="font-w400 text-white push-5">Image Caption</h3>
                                <h4 class="h6 font-w400 text-white-op push-15">Some Extra Info</h4>
                                <a class="btn btn-sm btn-default" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a>
                                <a class="btn btn-sm btn-default" href="javascript:void(0)"><i class="fa fa-times"></i> Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <!-- END Slide Right -->
        </div>
        <div class="col-md-6">
            <!-- Slide Down -->
            <h2 class="content-heading">Slide Down <code class="text-lowercase">.fx-opt-slide-down</code></h2>
            <div class="row items-push">
                <?php for($i = 13; $i < 15; $i++) { ?>
                <div class="col-lg-6 animated fadeIn">
                    <div class="img-container fx-img-zoom-in fx-opt-slide-down">
                        <?php $one->get_photo($i, false, 'img-responsive'); ?>
                        <div class="img-options">
                            <div class="img-options-content">
                                <h3 class="font-w400 text-white push-5">Image Caption</h3>
                                <h4 class="h6 font-w400 text-white-op push-15">Some Extra Info</h4>
                                <a class="btn btn-sm btn-default" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a>
                                <a class="btn btn-sm btn-default" href="javascript:void(0)"><i class="fa fa-times"></i> Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <!-- END Slide Down -->
        </div>
        <div class="col-md-6">
            <!-- Slide Top -->
            <h2 class="content-heading">Slide Top <code class="text-lowercase">.fx-opt-slide-top</code></h2>
            <div class="row items-push">
                <?php for($i = 15; $i < 17; $i++) { ?>
                <div class="col-lg-6 animated fadeIn">
                    <div class="img-container fx-img-zoom-in fx-opt-slide-top">
                        <?php $one->get_photo($i, false, 'img-responsive'); ?>
                        <div class="img-options">
                            <div class="img-options-content">
                                <h3 class="font-w400 text-white push-5">Image Caption</h3>
                                <h4 class="h6 font-w400 text-white-op push-15">Some Extra Info</h4>
                                <a class="btn btn-sm btn-default" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a>
                                <a class="btn btn-sm btn-default" href="javascript:void(0)"><i class="fa fa-times"></i> Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <!-- END Slide Top -->
        </div>
        <div class="col-md-6">
            <!-- Zoom In -->
            <h2 class="content-heading">Zoom In <code class="text-lowercase">.fx-opt-zoom-in</code></h2>
            <div class="row items-push">
                <?php for($i = 17; $i < 19; $i++) { ?>
                <div class="col-lg-6 animated fadeIn">
                    <div class="img-container fx-img-zoom-in fx-opt-zoom-in">
                        <?php $one->get_photo($i, false, 'img-responsive'); ?>
                        <div class="img-options">
                            <div class="img-options-content">
                                <h3 class="font-w400 text-white push-5">Image Caption</h3>
                                <h4 class="h6 font-w400 text-white-op push-15">Some Extra Info</h4>
                                <a class="btn btn-sm btn-default" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a>
                                <a class="btn btn-sm btn-default" href="javascript:void(0)"><i class="fa fa-times"></i> Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <!-- END Zoom In -->
        </div>
        <div class="col-md-6">
            <!-- Zoom Out -->
            <h2 class="content-heading">Zoom Out <code class="text-lowercase">.fx-opt-zoom-out</code></h2>
            <div class="row items-push">
                <?php for($i = 19; $i < 21; $i++) { ?>
                <div class="col-lg-6 animated fadeIn">
                    <div class="img-container fx-img-zoom-in fx-opt-zoom-out">
                        <?php $one->get_photo($i, false, 'img-responsive'); ?>
                        <div class="img-options">
                            <div class="img-options-content">
                                <h3 class="font-w400 text-white push-5">Image Caption</h3>
                                <h4 class="h6 font-w400 text-white-op push-15">Some Extra Info</h4>
                                <a class="btn btn-sm btn-default" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a>
                                <a class="btn btn-sm btn-default" href="javascript:void(0)"><i class="fa fa-times"></i> Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <!-- END Zoom Out -->
        </div>
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>
<?php require 'inc/views/template_footer_end.php'; ?>