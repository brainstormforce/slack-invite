<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-8">
            <h1 class="page-heading">
                Typography <small>Good Typography not only looks good but also reinforces the meaning of the text.</small>
            </h1>
        </div>
        <div class="col-sm-4 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>UI Elements</li>
                <li><a class="link-effect" href="">Typography</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content">
    <!-- Headings -->
    <div class="row">
        <div class="col-md-4">
            <!-- Headings Light -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Headings <small>Light</small></h3>
                </div>
                <div class="block-content">
                    <h1 class="font-w300 push">h1. Heading</h1>
                    <h2 class="font-w300 push">h2. Heading</h2>
                    <h3 class="font-w300 push">h3. Heading</h3>
                    <h4 class="font-w300 push">h4. Heading</h4>
                    <h5 class="font-w300 push">h5. Heading</h5>
                </div>
            </div>
            <!-- END Headings Light -->
        </div>
        <div class="col-md-4">
            <!-- Headings Bold -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Headings <small>Bold</small></h3>
                </div>
                <div class="block-content">
                    <h1 class="push">h1. Heading</h1>
                    <h2 class="push">h2. Heading</h2>
                    <h3 class="push">h3. Heading</h3>
                    <h4 class="push">h4. Heading</h4>
                    <h5 class="push">h5. Heading</h5>
                </div>
            </div>
            <!-- END Headings Bold -->
        </div>
        <div class="col-md-4">
            <!-- Headings Extra Bold -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Headings <small>Extra Bold</small></h3>
                </div>
                <div class="block-content">
                    <h1 class="font-w700 push">h1. Heading</h1>
                    <h2 class="font-w700 push">h2. Heading</h2>
                    <h3 class="font-w700 push">h3. Heading</h3>
                    <h4 class="font-w700 push">h4. Heading</h4>
                    <h5 class="font-w700 push">h5. Heading</h5>
                </div>
            </div>
            <!-- END Headings Extra Bold -->
        </div>
    </div>
    <!-- END Headings -->

    <!-- Typography -->
    <div class="row">
        <div class="col-md-6">
            <!-- Paragraphs -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Paragraphs</h3>
                </div>
                <div class="block-content">
                    <p class="lead">This is a lead paragraph. You can use it you highlight your main point before your article. It is great for such usage.</p>
                    <div class="nice-copy">
                        <?php $one->get_text('medium', 2); ?>
                    </div>
                </div>
            </div>
            <!-- END Paragraphs -->

            <!-- Contextual Colors -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Contextual Colors</h3>
                </div>
                <div class="block-content">
                    <div class="row">
                        <div class="col-xs-6">
                            <p class="text-success">This text has the success color..</p>
                            <p class="text-info">This text has the info color..</p>
                            <p class="text-warning">This text has the warning color..</p>
                            <p class="text-danger">This text has the danger color..</p>
                            <p class="text-muted">This text has the muted color..</p>
                        </div>
                        <div class="col-xs-6">
                            <p class="text-primary-darker">This text has the primary darker color..</p>
                            <p class="text-primary-dark">This text has the primary dark color..</p>
                            <p class="text-primary">This text has the primary color ..</p>
                            <p class="text-primary-light">This text has the primary light color..</p>
                            <p class="text-primary-lighter">This text has the primary lighter color..</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Contextual Colors -->

            <!-- Contextual Backgrounds -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Contextual Backgrounds</h3>
                </div>
                <div class="block-content text-white">
                    <div class="row">
                        <div class="col-xs-6">
                            <p class="content-mini content-mini-full bg-muted">Muted</p>
                            <p class="content-mini content-mini-full bg-success">Success</p>
                            <p class="content-mini content-mini-full bg-info">Info</p>
                            <p class="content-mini content-mini-full bg-warning">Warning</p>
                            <p class="content-mini content-mini-full bg-danger">Danger</p>
                        </div>
                        <div class="col-xs-6">
                            <p class="content-mini content-mini-full bg-primary-darker">Darker</p>
                            <p class="content-mini content-mini-full bg-primary-dark">Dark</p>
                            <p class="content-mini content-mini-full bg-primary">Primary</p>
                            <p class="content-mini content-mini-full bg-primary-light">Light</p>
                            <p class="content-mini content-mini-full bg-primary-lighter">Lighter</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Contextual Backgrounds -->
        </div>
        <div class="col-md-6">
            <!-- Links -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Links</h3>
                </div>
                <div class="block-content">
                    <div class="row items-push">
                        <div class="col-sm-4">
                            <a href="javascript:void(0)">Default link</a>
                        </div>
                        <div class="col-sm-4">
                            <a class="link-effect" href="javascript:void(0)">Link with effect</a>
                        </div>
                        <div class="col-sm-4">
                            <a class="label label-primary" href="javascript:void(0)">Label link</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Links -->

            <!-- Labels -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Labels</h3>
                </div>
                <div class="block-content">
                    <p class="nice-copy">
                        <span class="label label-default">Default</span>
                        <span class="label label-primary">Primary</span>
                        <span class="label label-success">Success</span>
                        <span class="label label-info">Info</span>
                        <span class="label label-warning">Warning</span>
                        <span class="label label-danger">Danger</span>
                    </p>
                    <p class="nice-copy">
                        <span class="label label-default"><i class="fa fa-home"></i> Home</span>
                        <span class="label label-primary"><i class="fa fa-cog"></i> Settings</span>
                        <span class="label label-success"><i class="fa fa-check"></i> Great!</span>
                        <span class="label label-info"><i class="fa fa-info-circle"></i> More Info</span>
                        <span class="label label-warning"><i class="fa fa-exclamation-circle"></i>  Attention</span>
                        <span class="label label-danger"><i class="fa fa-times-circle"></i> Error</span>
                    </p>
                </div>
            </div>
            <!-- END Labels -->

            <!-- Badges -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Badges</h3>
                </div>
                <div class="block-content">
                    <p class="nice-copy">
                        <span class="badge">10</span>
                        <span class="badge badge-primary">125</span>
                        <span class="badge badge-success">632</span>
                        <span class="badge badge-info">25</span>
                        <span class="badge badge-warning">15</span>
                        <span class="badge badge-danger">63</span>
                    <p>
                    <p class="nice-copy">
                        <span class="badge"><i class="fa fa-home"></i> 100</span>
                        <span class="badge badge-primary"><i class="fa fa-cog"></i> 1250</span>
                        <span class="badge badge-success"><i class="fa fa-check"></i> 6320</span>
                        <span class="badge badge-info"><i class="fa fa-info-circle"></i> 250</span>
                        <span class="badge badge-warning"><i class="fa fa-exclamation-circle"></i>  151</span>
                        <span class="badge badge-danger"><i class="fa fa-times-circle"></i> 630</span>
                    </p>
                </div>
            </div>
            <!-- END Badges -->

            <!-- Blockquotes -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Blockquotes</h3>
                </div>
                <div class="block-content">
                    <blockquote class="blockquote-reverse">
                        <p>Be yourself; everyone else is already taken.</p>
                        <footer>Oscar Wilde</footer>
                    </blockquote>
                    <blockquote>
                        <p>Don't cry because it's over, smile because it happened.</p>
                        <footer>Dr. Seuss</footer>
                    </blockquote>
                </div>
            </div>
            <!-- END Blockquotes -->

            <!-- Addresses -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Addresses</h3>
                </div>
                <div class="block-content">
                    <address>
                        <strong>Twitter, Inc.</strong><br>
                        795 Folsom Ave, Suite 600<br>
                        San Francisco, CA 94107<br>
                        <abbr title="Phone">P:</abbr> (123) 456-7890
                    </address>
                    <address>
                        <strong>Full Name</strong><br>
                        <a href="mailto:#">first.last@example.com</a>
                    </address>
                </div>
            </div>
            <!-- END Addresses -->

            <!-- Text -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Text</h3>
                </div>
                <div class="block-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <p>The following snippet of text is <strong>rendered as bold text</strong>.</p>
                            <p>The following snippet of text is <em>rendered as italicized text</em>.</p>
                        </div>
                        <div class="col-lg-6">
                            <p>You can use the mark tag to <mark>highlight</mark> text.</p>
                            <p><del>This line of text is meant to be treated as deleted text.</del></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Text -->
        </div>
    </div>
    <!-- END Typography -->

    <!-- Lists -->
    <div class="block">
        <div class="block-header">
            <div class="block-title">Lists</div>
        </div>
        <div class="block-content">
            <div class="row items-push">
                <div class="col-md-3">
                    <h3 class="push">Unordered List</h3>
                    <ul>
                        <li>First item</li>
                        <li>Second item</li>
                        <li>
                            Sublist
                            <ul>
                                <li>First subitem</li>
                                <li>Second subitem</li>
                                <li>Third subitem</li>
                            </ul>
                        </li>
                        <li>Third item</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3 class="push">Ordered List</h3>
                    <ol>
                        <li>First item</li>
                        <li>Second item</li>
                        <li>
                            Sublist
                            <ol>
                                <li>First subitem</li>
                                <li>Second subitem</li>
                                <li>Third subitem</li>
                            </ol>
                        </li>
                        <li>Third item</li>
                    </ol>
                </div>
                <div class="col-md-3">
                    <h3 class="push">Icon List</h3>
                    <ul class="fa-ul">
                        <li><i class="fa fa-check fa-li"></i>First item</li>
                        <li><i class="fa fa-check fa-li"></i>Second item</li>
                        <li>
                            <i class="fa fa-check fa-li"></i>Sublist
                            <ul class="fa-ul">
                                <li><i class="fa fa-angle-right fa-li"></i>First subitem</li>
                                <li><i class="fa fa-angle-right fa-li"></i>Second subitem</li>
                                <li><i class="fa fa-angle-right fa-li"></i>Third subitem</li>
                            </ul>
                        </li>
                        <li><i class="fa fa-check fa-li"></i>Third item</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3 class="push">Unstyled List</h3>
                    <ul class="list-unstyled">
                        <li>First item</li>
                        <li>Second item</li>
                        <li>
                            Sublist
                            <ul>
                                <li>First subitem</li>
                                <li>Second subitem</li>
                                <li>Third subitem</li>
                            </ul>
                        </li>
                        <li>Third item</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END Lists -->
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>
<?php require 'inc/views/template_footer_end.php'; ?>