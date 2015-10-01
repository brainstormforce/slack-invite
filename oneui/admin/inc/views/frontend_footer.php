<?php
/**
 * frontend_footer.php
 *
 * Author: pixelcave
 *
 * The footer of each page (Frontend)
 *
 */
?>
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <footer id="page-footer" class="bg-white">
        <div class="content content-boxed">
            <!-- Footer Navigation -->
            <div class="row push-30-t items-push-2x">
                <div class="col-sm-4">
                    <h3 class="h5 font-w600 text-uppercase push-20">Company</h3>
                    <ul class="list list-simple-mini font-s13">
                        <li>
                            <a class="font-w600" href="frontend_home.php">Home</a>
                        </li>
                        <li>
                            <a class="font-w600" href="frontend_features.php">Features</a>
                        </li>
                        <li>
                            <a class="font-w600" href="frontend_pricing.php">Pricing</a>
                        </li>
                        <li>
                            <a class="font-w600" href="frontend_about.php">About Us</a>
                        </li>
                        <li>
                            <a class="font-w600" href="frontend_contact.php">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <h3 class="h5 font-w600 text-uppercase push-20">Support</h3>
                    <ul class="list list-simple-mini font-s13">
                        <li>
                            <a class="font-w600" href="frontend_login.php">Log In</a>
                        </li>
                        <li>
                            <a class="font-w600" href="frontend_signup.php">Sign Up</a>
                        </li>
                        <li>
                            <a class="font-w600" href="frontend_support.php">Support Center</a>
                        </li>
                        <li>
                            <a class="font-w600" href="javascript:void(0)">Privacy Policy</a>
                        </li>
                        <li>
                            <a class="font-w600" href="javascript:void(0)">Terms &amp; Conditions</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <h3 class="h5 font-w600 text-uppercase push-20">Get In Touch</h3>
                    <div class="font-s13 push">
                        <strong>Company, Inc.</strong><br>
                        980 Folsom Ave, Suite 1230<br>
                        San Francisco, CA 94107<br>
                        <abbr title="Phone">P:</abbr> (123) 456-7890
                    </div>
                    <div class="font-s13">
                        <i class="si si-envelope-open"></i> company@example.com
                    </div>
                </div>
            </div>
            <!-- END Footer Navigation -->

            <!-- Copyright Info -->
            <div class="font-s12 push-20 clearfix">
                <hr class="remove-margin-t">
                <div class="pull-right">
                    Crafted with <i class="fa fa-heart text-city"></i> by <a class="font-w600" href="http://goo.gl/vNS3I" target="_blank">pixelcave</a>
                </div>
                <div class="pull-left">
                    <a class="font-w600" href="javascript:void(0)" target="_blank"><?php echo $one->name . ' ' . $one->version; ?></a> &copy; <span class="js-year-copy"></span>
                </div>
            </div>
            <!-- END Copyright Info -->
        </div>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Page Container -->
