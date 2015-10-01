<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>

<!-- Error Content -->
<div class="content bg-white text-center pulldown overflow-hidden">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <!-- Error Titles -->
            <h1 class="font-s128 font-w300 text-smooth animated rollIn">503</h1>
            <h2 class="h3 font-w300 push-50 animated fadeInUp">We are sorry but our service is currently not available..</h2>
            <!-- END Error Titles -->

            <!-- Search Form -->
            <form class="form-horizontal push-50" action="base_pages_search.php" method="post">
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3">
                        <div class="input-group input-group-lg">
                            <input class="form-control" type="text" placeholder="Search application..">
                            <div class="input-group-btn">
                                <button class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- END Search Form -->
        </div>
    </div>
</div>
<!-- END Error Content -->

<!-- Error Footer -->
<div class="content pulldown text-muted text-center">
    Would you like to let us know about it?<br>
    <a class="link-effect" href="javascript:void(0)">Report it</a> or <a class="link-effect" href="index.php">Go Back to Dashboard</a>
</div>
<!-- END Error Footer -->

<?php require 'inc/views/template_footer_start.php'; ?>
<?php require 'inc/views/template_footer_end.php'; ?>