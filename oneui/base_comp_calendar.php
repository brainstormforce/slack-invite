<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/fullcalendar/fullcalendar.min.css">

<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-8">
            <h1 class="page-heading">
                Calendar <small>A solid foundation to build your calendar based web application. Powered by Full Calendar.</small>
            </h1>
        </div>
        <div class="col-sm-4 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>Components</li>
                <li><a class="link-effect" href="">Calendar</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content bg-white">
    <!-- Calendar and Events functionality (initialized in js/pages/base_comp_calendar.js), for more info and examples you can check out http://fullcalendar.io/ -->
    <div class="row items-push">
        <div class="col-md-4 col-md-push-8 col-lg-2 col-lg-push-10">
            <!-- Add Event Form -->
            <form class="js-form-add-event push-30" action="base_comp_calendar.php" method="post">
                <div class="input-group">
                    <input class="js-add-event form-control" type="text" placeholder="Add event..">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="fa fa-plus"></i></button>
                    </div>
                </div>
            </form>
            <!-- END Add Event Form -->

            <!-- Event List -->
            <ul class="js-events list list-events">
                <li style="background-color: #fac5a5;">Work</li>
                <li style="background-color: #b5d0eb;">Relax</li>
                <li style="background-color: #faeab9;">Gym</li>
                <li style="background-color: #fac5a5;">Secret Project</li>
                <li style="background-color: #c8e2b3;">Cinema</li>
                <li style="background-color: #b6d1ec;">Biking</li>
                <li style="background-color: #c8e2b3;">Trip</li>
                <li style="background-color: #faeab9;">Swimming</li>
            </ul>
            <div class="text-center text-muted">
                <small><em><i class="fa fa-arrows"></i> Drag and drop events on the calendar</em></small>
            </div>
            <!-- END Event List -->
        </div>
        <div class="col-md-8 col-md-pull-4 col-lg-10 col-lg-pull-2">
            <!-- Calendar Container -->
            <div class="js-calendar"></div>
        </div>
    </div>
    <!-- END Calendar -->
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>

<!-- Page Plugins -->
<script src="<?php echo $one->assets_folder; ?>/js/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/fullcalendar/moment.min.js"></script>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/fullcalendar/fullcalendar.min.js"></script>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/fullcalendar/gcal.min.js"></script>

<!-- Page JS Code -->
<script src="<?php echo $one->assets_folder; ?>/js/pages/base_comp_calendar.js"></script>

<?php require 'inc/views/template_footer_end.php'; ?>