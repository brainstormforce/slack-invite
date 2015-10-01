<?php
/**
 * template_head_end.php
 *
 * Author: pixelcave
 *
 * (continue) The first block of code used in every page of the template
 *
 * The reason we separated template_head_start.php and template_head_end.php
 * is for enabling us to include between them extra plugin CSS files needed only in
 * specific pages
 *
 */
?>

    <!-- OneUI CSS framework -->
    <link rel="stylesheet" id="css-main" href="<?php echo $one->assets_folder; ?>/css/oneui.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
    <?php if ($one->theme) { ?>
    <link rel="stylesheet" id="css-theme" href="<?php echo $one->assets_folder; ?>/css/themes/<?php echo $one->theme; ?>.min.css">
    <?php } ?>
    <!-- END Stylesheets -->
</head>
<body<?php if ($one->body_bg) { echo ' class="bg-image" style="background-image: url(\'' . $one->body_bg . '\');"'; } ?>>