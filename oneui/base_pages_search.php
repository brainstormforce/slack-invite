<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">
                Search Results <small>Vital page found in most web applications.</small>
            </h1>
        </div>
        <div class="col-sm-5 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>Generic</li>
                <li><a class="link-effect" href="">Search Results</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- END Page Header -->

<!-- Search Section -->
<div class="content">
    <form action="base_pages_search.php" method="post">
        <div class="input-group input-group-lg">
            <input class="form-control" type="text" placeholder="Search application..">
            <div class="input-group-btn">
                <button class="btn btn-default"><i class="fa fa-search"></i></button>
            </div>
        </div>
    </form>
</div>
<!-- END Search Section -->

<!-- Page Content -->
<div class="content">
    <div class="block">
        <ul class="nav nav-tabs" data-toggle="tabs">
            <li class="active">
                <a href="#search-projects">Projects</a>
            </li>
            <li>
                <a href="#search-users">Users</a>
            </li>
            <li>
                <a href="#search-classic">Classic</a>
            </li>
        </ul>
        <div class="block-content tab-content bg-white">
            <!-- Projects -->
            <div class="tab-pane fade fade-up in active" id="search-projects">
                <div class="border-b push-30">
                    <h2 class="push-10">6 <span class="h5 font-w400 text-muted">Projects Found</span></h2>
                </div>
                <table class="table table-striped table-vcenter">
                    <thead>
                        <tr>
                            <th><i class="fa fa-suitcase text-gray"></i> Project Name</th>
                            <th class="text-center hidden-xs" style="width: 15%;"><i class="fa fa-ticket text-gray"></i> Tickets</th>
                            <th class="text-center hidden-xs hidden-sm" style="width: 15%;"><i class="fa fa-bar-chart text-gray"></i> Sales</th>
                            <th class="text-right" style="width: 15%; min-width: 110px;"><i class="fa fa-trophy text-gray"></i> Earnings</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <h3 class="h5 font-w600 push-10">
                                    <a class="link-effect" href="javascript:void(0)">Web Application Framework</a>
                                </h3>
                                <div class="push-10">
                                    <span class="label label-success"><i class="fa fa-check"></i> Completed</span>
                                </div>
                                <div class="font-s13 text-muted hidden-xs">
                                    <?php $one->get_text('small'); ?>
                                </div>
                            </td>
                            <td class="h3 text-center hidden-xs">15</td>
                            <td class="h3 text-center hidden-xs hidden-sm">520</td>
                            <td class="h3 text-primary text-right">$ 7,850</td>
                        </tr>
                        <tr>
                            <td>
                                <h3 class="h5 font-w600 push-10">
                                    <a class="link-effect" href="javascript:void(0)">Wordpress Theme</a>
                                </h3>
                                <div class="push-10">
                                    <span class="label label-warning"><i class="fa fa-refresh fa-spin"></i> In Progress</span>
                                </div>
                                <div class="font-s13 text-muted hidden-xs">
                                    <?php $one->get_text('small'); ?>
                                </div>
                            </td>
                            <td class="h3 text-center hidden-xs">-</td>
                            <td class="h3 text-center hidden-xs hidden-sm">-</td>
                            <td class="h3 text-primary text-right">-</td>
                        </tr>
                        <tr>
                            <td>
                                <h3 class="h5 font-w600 push-10">
                                    <a class="link-effect" href="javascript:void(0)">Mobile Application</a>
                                </h3>
                                <div class="push-10">
                                    <span class="label label-success"><i class="fa fa-check"></i> Completed</span>
                                </div>
                                <div class="font-s13 text-muted hidden-xs">
                                    <?php $one->get_text('small'); ?>
                                </div>
                            </td>
                            <td class="h3 text-center hidden-xs">25</td>
                            <td class="h3 text-center hidden-xs hidden-sm">980</td>
                            <td class="h3 text-primary text-right">$ 16,698</td>
                        </tr>
                        <tr>
                            <td>
                                <h3 class="h5 font-w600 push-10">
                                    <a class="link-effect" href="javascript:void(0)">UI Kit</a>
                                </h3>
                                <div class="push-10">
                                    <span class="label label-danger"><i class="fa fa-times"></i> Cancelled</span>
                                </div>
                                <div class="font-s13 text-muted hidden-xs">
                                    <?php $one->get_text('small'); ?>
                                </div>
                            </td>
                            <td class="h3 text-center hidden-xs">-</td>
                            <td class="h3 text-center hidden-xs hidden-sm">-</td>
                            <td class="h3 text-primary text-right">-</td>
                        </tr>
                        <tr>
                            <td>
                                <h3 class="h5 font-w600 push-10">
                                    <a class="link-effect" href="javascript:void(0)">Admin Template</a>
                                </h3>
                                <div class="push-10">
                                    <span class="label label-success"><i class="fa fa-check"></i> Completed</span>
                                </div>
                                <div class="font-s13 text-muted hidden-xs">
                                    <?php $one->get_text('small'); ?>
                                </div>
                            </td>
                            <td class="h3 text-center hidden-xs">262</td>
                            <td class="h3 text-center hidden-xs hidden-sm">1600</td>
                            <td class="h3 text-primary text-right">$ 12,320</td>
                        </tr>
                        <tr>
                            <td>
                                <h3 class="h5 font-w600 push-10">
                                    <a class="link-effect" href="javascript:void(0)">Flat Icon Set</a>
                                </h3>
                                <div class="push-10">
                                    <span class="label label-success"><i class="fa fa-check"></i> Completed</span>
                                </div>
                                <div class="font-s13 text-muted hidden-xs">
                                    <?php $one->get_text('small'); ?>
                                </div>
                            </td>
                            <td class="h3 text-center hidden-xs">3</td>
                            <td class="h3 text-center hidden-xs hidden-sm">148</td>
                            <td class="h3 text-primary text-right">$ 6,320</td>
                        </tr>
                    </tbody>
                </table>
                <div class="border-t">
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
            <!-- END Projects -->

            <!-- Users -->
            <div class="tab-pane fade fade-up" id="search-users">
                <div class="border-b push-30">
                    <h2 class="push-10">192 <span class="h5 font-w400 text-muted">Users Found</span></h2>
                </div>
                <table class="table table-striped table-vcenter">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 100px;"><i class="si si-user"></i></th>
                            <th>Name</th>
                            <th class="hidden-xs" style="width: 30%;">Email</th>
                            <th class="hidden-xs hidden-sm" style="width: 15%;">Access</th>
                            <th class="text-center" style="width: 80px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $gender = array('male', 'female'); ?>
                        <?php for ($i = 1; $i < 19; $i++) { ?>
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
                <div class="border-t">
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

            <!-- Classic -->
            <div class="tab-pane fade fade-up" id="search-classic">
                <div class="border-b push-30">
                    <h2 class="push-10">270 <span class="h5 font-w400 text-muted">Sites Found</span></h2>
                </div>
                <?php for ($i = 1; $i < 10; $i++) { ?>
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
                <div class="border-t">
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
            <!-- END Classic -->
        </div>
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>
<?php require 'inc/views/template_footer_end.php'; ?>