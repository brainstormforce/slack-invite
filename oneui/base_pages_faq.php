<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">
                FAQ <small>Check out answers to the most common questions.</small>
            </h1>
        </div>
        <div class="col-sm-5 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>Generic</li>
                <li><a class="link-effect" href="">FAQ</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content content-boxed">
    <!-- Frequently Asked Questions -->
    <div class="block">
        <div class="block-content block-content-full block-content-narrow">
            <!-- Introduction -->
            <h2 class="h3 font-w600 push-30-t push">Introduction</h2>
            <div id="faq1" class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq1" href="#faq1_q1">Welcome to our service!</a>
                        </h3>
                    </div>
                    <div id="faq1_q1" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <?php $one->get_text('medium', 2); ?>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq1" href="#faq1_q2">Who are we?</a>
                        </h3>
                    </div>
                    <div id="faq1_q2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <?php $one->get_text('medium', 2); ?>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq1" href="#faq1_q3">What are our values?</a>
                        </h3>
                    </div>
                    <div id="faq1_q3" class="panel-collapse collapse">
                        <div class="panel-body">
                            <?php $one->get_text('medium', 2); ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Introduction -->

            <!-- Functionality -->
            <h2 class="h3 font-w600 push-50-t push">Functionality</h2>
            <div id="faq2" class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq2" href="#faq2_q1">What are the key features?</a>
                        </h3>
                    </div>
                    <div id="faq2_q1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <?php $one->get_text('medium', 2); ?>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq2" href="#faq2_q2">Does your App support mobile devices?</a>
                        </h3>
                    </div>
                    <div id="faq2_q2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <?php $one->get_text('medium', 2); ?>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq2" href="#faq2_q3">Why should I choose your service?</a>
                        </h3>
                    </div>
                    <div id="faq2_q3" class="panel-collapse collapse">
                        <div class="panel-body">
                            <?php $one->get_text('medium', 2); ?>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq2" href="#faq2_q4">Is my data secure?</a>
                        </h3>
                    </div>
                    <div id="faq2_q4" class="panel-collapse collapse">
                        <div class="panel-body">
                            <?php $one->get_text('medium', 2); ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Functionality -->

            <!-- Payments -->
            <h2 class="h3 font-w600 push-50-t push">Payments</h2>
            <div id="faq3" class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq3" href="#faq3_q1">Is there any free plan?</a>
                        </h3>
                    </div>
                    <div id="faq3_q1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <?php $one->get_text('medium', 2); ?>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq3" href="#faq3_q2">What are the available payment options?</a>
                        </h3>
                    </div>
                    <div id="faq3_q2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <?php $one->get_text('medium', 2); ?>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq3" href="#faq3_q3">Can multiple people use my account?</a>
                        </h3>
                    </div>
                    <div id="faq3_q3" class="panel-collapse collapse">
                        <div class="panel-body">
                            <?php $one->get_text('medium', 2); ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Payments -->

            <!-- Contact Form -->
            <h2 class="h3 font-w600 push-50-t push">Do you have any further questions?</h2>
            <div id="faq4" class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq4" href="#faq4_q1"><i class="fa fa-envelope-o"></i> Contact Us</a>
                        </h3>
                    </div>
                    <div id="faq4_q1" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <form class="form-horizontal push-10-t" action="base_pages_faq.php" method="post" onsubmit="return false;">
                                <div class="form-group">
                                    <div class="col-xs-6 col-sm-4">
                                        <div class="form-material form-material-primary">
                                            <input class="form-control" type="text" id="faq-contact-firstname" name="faq-contact-firstname" placeholder="Enter your firstname..">
                                            <label for="faq-contact-firstname">Firstname</label>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-4">
                                        <div class="form-material form-material-primary">
                                            <input class="form-control" type="text" id="faq-contact-lastname" name="faq-contact-lastname" placeholder="Enter your lastname..">
                                            <label for="faq-contact-lastname">Lastname</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-8">
                                        <div class="form-material form-material-primary input-group">
                                            <input class="form-control" type="email" id="faq-contact-email" name="faq-contact-email" placeholder="Enter your email..">
                                            <label for="faq-contact-email">Email</label>
                                            <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-4">
                                        <div class="form-material form-material-primary">
                                            <select class="form-control" id="faq-contact-subject" name="faq-contact-subject" size="1">
                                                <option value="1">Support</option>
                                                <option value="2">Billing</option>
                                                <option value="3">Management</option>
                                                <option value="4">Feature Request</option>
                                            </select>
                                            <label for="faq-contact-subject">Where?</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material form-material-primary">
                                            <textarea class="form-control" id="faq-contact-msg" name="faq-contact-msg" rows="7" placeholder="Enter your message.."></textarea>
                                            <label for="faq-contact-msg">Message</label>
                                        </div>
                                        <div class="help-block text-right">Feel free to use common tags: &lt;blockquote&gt;, &lt;strong&gt;, &lt;em&gt;</div>
                                    </div>
                                </div>
                                <div class="form-group remove-margin-b">
                                    <div class="col-xs-12">
                                        <button class="btn btn-sm btn-primary" type="submit"><i class="fa fa-send push-5-r"></i> Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Contact Form -->
        </div>
    </div>
    <!-- END Frequently Asked Questions -->
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>
<?php require 'inc/views/template_footer_end.php'; ?>