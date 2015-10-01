<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-8">
            <h1 class="page-heading">
                Color Themes <small>Carefully picked colors that will inspire and make you more productive.</small>
            </h1>
        </div>
        <div class="col-sm-4 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>UI Elements</li>
                <li><a class="link-effect" href="">Color Themes</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- END Page Header -->

<!-- Page Content -->
<!-- Preview Color Themes -->
<!-- Themes functionality initialized in App() -> uiHandleTheme() -->
<div class="content">
    <h2 class="content-heading">Preview Color Theme</h2>
</div>
<div class="content bg-white">
    <div class="row items-push text-center">
        <div class="col-xs-6 col-sm-6 col-lg-2">
            <a class="item item-circle bg-default text-white-op center-block" data-toggle="theme" data-theme="default" href="javascript:void(0)">
                <i class="si si-drop"></i>
            </a>
            <div class="push-10-t font-w600">Default</div>
        </div>
        <div class="col-xs-6 col-sm-6 col-lg-2">
            <a class="item item-circle bg-amethyst text-white-op center-block" data-toggle="theme" data-theme="<?php echo $one->assets_folder; ?>/css/themes/amethyst.min.css" href="javascript:void(0)">
                <i class="si si-drop"></i>
            </a>
            <div class="push-10-t font-w600">Amethyst</div>
        </div>
        <div class="col-xs-6 col-sm-6 col-lg-2">
            <a class="item item-circle bg-city text-white-op center-block" data-toggle="theme" data-theme="<?php echo $one->assets_folder; ?>/css/themes/city.min.css" href="javascript:void(0)">
                <i class="si si-drop"></i>
            </a>
            <div class="push-10-t font-w600">City</div>
        </div>
        <div class="col-xs-6 col-sm-6 col-lg-2">
            <a class="item item-circle bg-flat text-white-op center-block" data-toggle="theme" data-theme="<?php echo $one->assets_folder; ?>/css/themes/flat.min.css" href="javascript:void(0)">
                <i class="si si-drop"></i>
            </a>
            <div class="push-10-t font-w600">Flat</div>
        </div>
        <div class="col-xs-6 col-sm-6 col-lg-2">
            <a class="item item-circle bg-modern text-white-op center-block" data-toggle="theme" data-theme="<?php echo $one->assets_folder; ?>/css/themes/modern.min.css" href="javascript:void(0)">
                <i class="si si-drop"></i>
            </a>
            <div class="push-10-t font-w600">Modern</div>
        </div>
        <div class="col-xs-6 col-sm-6 col-lg-2">
            <a class="item item-circle bg-smooth text-white-op center-block" data-toggle="theme" data-theme="<?php echo $one->assets_folder; ?>/css/themes/smooth.min.css" href="javascript:void(0)">
                <i class="si si-drop"></i>
            </a>
            <div class="push-10-t font-w600">Smooth</div>
        </div>
    </div>
</div>
<!-- END Preview Color Themes -->

<!-- Primary Colors -->
<div class="content">
    <h2 class="content-heading">Primary Colors <small>Colors of the active color theme</small></h2>
</div>
<div class="content bg-white">
    <div class="row items-push text-center">
        <div class="col-xs-6 col-sm-4 col-lg-2">
            <div class="item item-circle bg-primary-lighter center-block" data-toggle="tooltip" title=".bg-primary-lighter"></div>
        </div>
        <div class="col-xs-6 col-sm-4 col-lg-2">
            <div class="item item-circle bg-primary-light center-block" data-toggle="tooltip" title=".bg-primary-light"></div>
        </div>
        <div class="col-xs-12 col-sm-4 col-lg-4">
            <div class="item item-circle bg-primary center-block" data-toggle="tooltip" title=".bg-primary"></div>
        </div>
        <div class="col-xs-6 col-sm-6 col-lg-2">
            <div class="item item-circle bg-primary-dark center-block" data-toggle="tooltip" title=".bg-primary-dark"></div>
        </div>
        <div class="col-xs-6 col-sm-6 col-lg-2">
            <div class="item item-circle bg-primary-darker center-block" data-toggle="tooltip" title=".bg-primary-darker"></div>
        </div>
    </div>
</div>
<!-- END Primary Colors -->

<!-- Gray Colors -->
<div class="content">
    <h2 class="content-heading">Gray Colors</h2>
</div>
<div class="content bg-white">
    <div class="row items-push text-center">
        <div class="col-xs-6 col-sm-4 col-lg-2">
            <div class="item item-circle bg-gray-lighter center-block" data-toggle="tooltip" title=".bg-gray-lighter"></div>
        </div>
        <div class="col-xs-6 col-sm-4 col-lg-2">
            <div class="item item-circle bg-gray-light center-block" data-toggle="tooltip" title=".bg-gray-light"></div>
        </div>
        <div class="col-xs-12 col-sm-4 col-lg-4">
            <div class="item item-circle bg-gray center-block" data-toggle="tooltip" title=".bg-gray"></div>
        </div>
        <div class="col-xs-6 col-sm-6 col-lg-2">
            <div class="item item-circle bg-gray-dark center-block" data-toggle="tooltip" title=".bg-gray-dark"></div>
        </div>
        <div class="col-xs-6 col-sm-6 col-lg-2">
            <div class="item item-circle bg-gray-darker center-block" data-toggle="tooltip" title=".bg-gray-darker"></div>
        </div>
    </div>
</div>
<!-- END Gray Colors -->

<!-- Default Theme -->
<div class="content">
    <h2 class="content-heading">Default Theme</h2>
</div>
<div class="content bg-white">
    <div class="row items-push text-center">
        <div class="col-xs-6 col-sm-4 col-lg-2">
            <div class="item item-circle bg-default-lighter center-block" data-toggle="tooltip" title=".bg-default-lighter"></div>
        </div>
        <div class="col-xs-6 col-sm-4 col-lg-2">
            <div class="item item-circle bg-default-light center-block" data-toggle="tooltip" title=".bg-default-light"></div>
        </div>
        <div class="col-xs-12 col-sm-4 col-lg-4">
            <div class="item item-circle bg-default center-block" data-toggle="tooltip" title=".bg-default"></div>
        </div>
        <div class="col-xs-6 col-sm-6 col-lg-2">
            <div class="item item-circle bg-default-dark center-block" data-toggle="tooltip" title=".bg-default-dark"></div>
        </div>
        <div class="col-xs-6 col-sm-6 col-lg-2">
            <div class="item item-circle bg-default-darker center-block" data-toggle="tooltip" title=".bg-default-darker"></div>
        </div>
    </div>
</div>
<!-- END Default Theme -->

<!-- Amethyst Theme -->
<div class="content">
    <h2 class="content-heading">Amethyst Theme</h2>
</div>
<div class="content bg-white">
    <div class="row items-push text-center">
        <div class="col-xs-6 col-sm-4 col-lg-2">
            <div class="item item-circle bg-amethyst-lighter center-block" data-toggle="tooltip" title=".bg-amethyst-lighter"></div>
        </div>
        <div class="col-xs-6 col-sm-4 col-lg-2">
            <div class="item item-circle bg-amethyst-light center-block" data-toggle="tooltip" title=".bg-amethyst-light"></div>
        </div>
        <div class="col-xs-12 col-sm-4 col-lg-4">
            <div class="item item-circle bg-amethyst center-block" data-toggle="tooltip" title=".bg-amethyst"></div>
        </div>
        <div class="col-xs-6 col-sm-6 col-lg-2">
            <div class="item item-circle bg-amethyst-dark center-block" data-toggle="tooltip" title=".bg-amethyst-dark"></div>
        </div>
        <div class="col-xs-6 col-sm-6 col-lg-2">
            <div class="item item-circle bg-amethyst-darker center-block" data-toggle="tooltip" title=".bg-amethyst-darker"></div>
        </div>
    </div>
</div>
<!-- END Amethyst Theme -->

<!-- City Theme -->
<div class="content">
    <h2 class="content-heading">City Theme</h2>
</div>
<div class="content bg-white">
    <div class="row items-push text-center">
        <div class="col-xs-6 col-sm-4 col-lg-2">
            <div class="item item-circle bg-city-lighter center-block" data-toggle="tooltip" title=".bg-city-lighter"></div>
        </div>
        <div class="col-xs-6 col-sm-4 col-lg-2">
            <div class="item item-circle bg-city-light center-block" data-toggle="tooltip" title=".bg-city-light"></div>
        </div>
        <div class="col-xs-12 col-sm-4 col-lg-4">
            <div class="item item-circle bg-city center-block" data-toggle="tooltip" title=".bg-city"></div>
        </div>
        <div class="col-xs-6 col-sm-6 col-lg-2">
            <div class="item item-circle bg-city-dark center-block" data-toggle="tooltip" title=".bg-city-dark"></div>
        </div>
        <div class="col-xs-6 col-sm-6 col-lg-2">
            <div class="item item-circle bg-city-darker center-block" data-toggle="tooltip" title=".bg-city-darker"></div>
        </div>
    </div>
</div>
<!-- END City Theme -->

<!-- Flat Theme -->
<div class="content">
    <h2 class="content-heading">Flat Theme</h2>
</div>
<div class="content bg-white">
    <div class="row items-push text-center">
        <div class="col-xs-6 col-sm-4 col-lg-2">
            <div class="item item-circle bg-flat-lighter center-block" data-toggle="tooltip" title=".bg-flat-lighter"></div>
        </div>
        <div class="col-xs-6 col-sm-4 col-lg-2">
            <div class="item item-circle bg-flat-light center-block" data-toggle="tooltip" title=".bg-flat-light"></div>
        </div>
        <div class="col-xs-12 col-sm-4 col-lg-4">
            <div class="item item-circle bg-flat center-block" data-toggle="tooltip" title=".bg-flat"></div>
        </div>
        <div class="col-xs-6 col-sm-6 col-lg-2">
            <div class="item item-circle bg-flat-dark center-block" data-toggle="tooltip" title=".bg-flat-dark"></div>
        </div>
        <div class="col-xs-6 col-sm-6 col-lg-2">
            <div class="item item-circle bg-flat-darker center-block" data-toggle="tooltip" title=".bg-flat-darker"></div>
        </div>
    </div>
</div>
<!-- END Flat Theme -->

<!-- Modern Theme -->
<div class="content">
    <h2 class="content-heading">Modern Theme</h2>
</div>
<div class="content bg-white">
    <div class="row items-push text-center">
        <div class="col-xs-6 col-sm-4 col-lg-2">
            <div class="item item-circle bg-modern-lighter center-block" data-toggle="tooltip" title=".bg-modern-lighter"></div>
        </div>
        <div class="col-xs-6 col-sm-4 col-lg-2">
            <div class="item item-circle bg-modern-light center-block" data-toggle="tooltip" title=".bg-modern-light"></div>
        </div>
        <div class="col-xs-12 col-sm-4 col-lg-4">
            <div class="item item-circle bg-modern center-block" data-toggle="tooltip" title=".bg-modern"></div>
        </div>
        <div class="col-xs-6 col-sm-6 col-lg-2">
            <div class="item item-circle bg-modern-dark center-block" data-toggle="tooltip" title=".bg-modern-dark"></div>
        </div>
        <div class="col-xs-6 col-sm-6 col-lg-2">
            <div class="item item-circle bg-modern-darker center-block" data-toggle="tooltip" title=".bg-modern-darker"></div>
        </div>
    </div>
</div>
<!-- END Modern Theme -->

<!-- Smooth Theme -->
<div class="content">
    <h2 class="content-heading">Smooth Theme</h2>
</div>
<div class="content bg-white">
    <div class="row items-push text-center">
        <div class="col-xs-6 col-sm-4 col-lg-2">
            <div class="item item-circle bg-smooth-lighter center-block" data-toggle="tooltip" title=".bg-smooth-lighter"></div>
        </div>
        <div class="col-xs-6 col-sm-4 col-lg-2">
            <div class="item item-circle bg-smooth-light center-block" data-toggle="tooltip" title=".bg-smooth-light"></div>
        </div>
        <div class="col-xs-12 col-sm-4 col-lg-4">
            <div class="item item-circle bg-smooth center-block" data-toggle="tooltip" title=".bg-smooth"></div>
        </div>
        <div class="col-xs-6 col-sm-6 col-lg-2">
            <div class="item item-circle bg-smooth-dark center-block" data-toggle="tooltip" title=".bg-smooth-dark"></div>
        </div>
        <div class="col-xs-6 col-sm-6 col-lg-2">
            <div class="item item-circle bg-smooth-darker center-block" data-toggle="tooltip" title=".bg-smooth-darker"></div>
        </div>
    </div>
</div>
<!-- END Smooth Theme -->

<!-- Contextual Colors -->
<div class="content">
    <h2 class="content-heading">Contextual Colors</h2>
</div>
<div class="content bg-white">
    <div class="row items-push text-center">
        <div class="col-xs-6 col-sm-3">
            <div class="item item-circle bg-success center-block" data-toggle="tooltip" title=".bg-success"></div>
        </div>
        <div class="col-xs-6 col-sm-3">
            <div class="item item-circle bg-info center-block" data-toggle="tooltip" title=".bg-info"></div>
        </div>
        <div class="col-xs-6 col-sm-3">
            <div class="item item-circle bg-warning center-block" data-toggle="tooltip" title=".bg-warning"></div>
        </div>
        <div class="col-xs-6 col-sm-3">
            <div class="item item-circle bg-danger center-block" data-toggle="tooltip" title=".bg-danger"></div>
        </div>
        <div class="col-xs-6 col-sm-3">
            <div class="item item-circle bg-success-light center-block" data-toggle="tooltip" title=".bg-success-light"></div>
        </div>
        <div class="col-xs-6 col-sm-3">
            <div class="item item-circle bg-info-light center-block" data-toggle="tooltip" title=".bg-info-light"></div>
        </div>
        <div class="col-xs-6 col-sm-3">
            <div class="item item-circle bg-warning-light center-block" data-toggle="tooltip" title=".bg-warning-light"></div>
        </div>
        <div class="col-xs-6 col-sm-3">
            <div class="item item-circle bg-danger-light center-block" data-toggle="tooltip" title=".bg-danger-light"></div>
        </div>
    </div>
</div>
<!-- END Contextual Colors -->
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>
<?php require 'inc/views/template_footer_end.php'; ?>