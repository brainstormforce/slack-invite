<?php require 'inc/config.php'; require 'inc/frontend_config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/frontend_head.php'; ?>

<!-- Hero Content -->
<div class="bg-primary-dark">
    <section class="content content-full content-boxed">
        <!-- Section Content -->
        <div class="push-100-t push-50 text-center">
            <h1 class="h2 text-white push-10 visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">Search Results.</h1>
            <h2 class="h5 text-white-op visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">Everything you are looking for is here.</h2>
        </div>
        <!-- END Section Content -->
    </section>
</div>
<!-- END Hero Content -->

<!-- Search Form -->
<div class="bg-white">
    <section class="content content-full content-boxed">
        <!-- Section Content -->
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <form action="frontend_search.php" method="post">
                    <div class="input-group input-group-lg">
                        <input class="form-control" type="text" placeholder="Search everything..">
                        <div class="input-group-btn">
                            <button class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END Section Content -->
    </section>
</div>
<!-- END Search Form -->

<!-- Mini Stats -->
<div class="bg-gray-lighter">
    <section class="content content-boxed">
        <!-- Section Content -->
        <div class="row items-push text-center">
            <div class="col-xs-6">
                <div class="h1 push-5" data-toggle="countTo" data-to="270"></div>
                <div class="font-w600 text-uppercase text-muted">Pages</div>
            </div>
            <div class="col-xs-6">
                <div class="h1 push-5" data-toggle="countTo" data-to="590"></div>
                <div class="font-w600 text-uppercase text-muted">Users</div>
            </div>
        </div>
        <!-- END Section Content -->
    </section>
</div>
<!-- END Mini Stats -->

<!-- Results -->
<div class="bg-white">
    <section class="content content-boxed">
        <!-- Section Content -->
        <div class="block block-transparent">
            <ul class="nav nav-tabs nav-justified nav-tabs-alt" data-toggle="tabs">
                <li class="active">
                    <a href="#front-search-pages">Pages</a>
                </li>
                <li>
                    <a href="#front-search-users">Users</a>
                </li>
            </ul>
            <div class="block-content tab-content bg-white">
                <!-- Pages -->
                <div class="tab-pane fade fade-right in active push-30-t" id="front-search-pages">
                    <?php for ($i = 1; $i < 5; $i++) { ?>
                    <div class="row items-push">
                        <div class="col-md-6">
                            <h3 class="h5 font-w600">
                                <a class="link-effect" href="javascript:void(0)">OneUI - Admin UI Framework</a>
                            </h3>
                            <div class="font-s13 text-success push-5">http://pixelcave.com/oneui/</div>
                            <?php $one->get_text('small'); ?>
                        </div>
                        <div class="col-md-6">
                            <h3 class="h5 font-w600">
                                <a class="link-effect" href="javascript:void(0)">OneUI - Admin UI Framework</a>
                            </h3>
                            <div class="font-s13 text-success push-5">http://pixelcave.com/oneui/</div>
                            <?php $one->get_text('small'); ?>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="text-center">
                        <ul class="pagination">
                            <li class="disabled"><a href="javascript:void(0)">Prev</a></li>
                            <li class="active"><a href="javascript:void(0)">1</a></li>
                            <li><a href="javascript:void(0)">2</a></li>
                            <li><span>...</span></li>
                            <li><a href="javascript:void(0)">10</a></li>
                            <li><a href="javascript:void(0)">Next</a></li>
                        </ul>
                    </div>
                </div>
                <!-- END Pages -->

                <!-- Users -->
                <div class="tab-pane fade fade-left push-30-t" id="front-search-users">
                    <table class="table table-borderless table-striped table-vcenter">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 100px;"><i class="si si-user"></i></th>
                                <th>Name</th>
                                <th class="hidden-xs" style="width: 30%;">Email</th>
                                <th class="hidden-xs hidden-sm" style="width: 15%;">Access</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $gender = array('male', 'female'); ?>
                            <?php for ($i = 1; $i < 10; $i++) { ?>
                            <?php $gender_random = $gender[rand(0,1)]; ?>
                            <tr>
                                <td class="text-center">
                                    <?php $one->get_avatar(0, $gender_random, 48); ?>
                                </td>
                                <td class="font-w600"><?php $one->get_name($gender_random); ?></td>
                                <td class="hidden-xs">client<?php echo $i; ?>@example.com</td>
                                <td class="hidden-xs hidden-sm">
                                    <?php $one->get_label(); ?>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <div class="text-center">
                        <ul class="pagination">
                            <li class="disabled"><a href="javascript:void(0)">Prev</a></li>
                            <li class="active"><a href="javascript:void(0)">1</a></li>
                            <li><a href="javascript:void(0)">2</a></li>
                            <li><span>...</span></li>
                            <li><a href="javascript:void(0)">10</a></li>
                            <li><a href="javascript:void(0)">Next</a></li>
                        </ul>
                    </div>
                </div>
                <!-- END Users -->
            </div>
        </div>
        <!-- END Section Content -->
    </section>
</div>
<!-- END Results -->

<!-- Log In -->
<div class="bg-gray-lighter">
    <section class="content content-full content-boxed">
        <!-- Section Content -->
        <div class="push-20-t push-20 text-center">
            <h3 class="h4 push-20 visibility-hidden" data-toggle="appear">Would you like to see more examples?</h3>
            <a class="btn btn-rounded btn-noborder btn-lg btn-success visibility-hidden" data-toggle="appear" data-class="animated bounceIn" href="frontend_login.php">Log In</a>
        </div>
        <!-- END Section Content -->
    </section>
</div>
<!-- END Log In -->

<?php require 'inc/views/frontend_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>

<!-- Page JS Code -->
<script>
    $(function(){
        // Init page helpers (Appear + CountTo plugins)
        App.initHelpers(['appear', 'appear-countTo']);
    });
</script>

<?php require 'inc/views/template_footer_end.php'; ?>