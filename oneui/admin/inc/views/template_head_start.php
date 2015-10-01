<?php
/**
 * template_head_start.php
 *
 * Author: pixelcave
 *
 * The first block of code used in every page of the template
 *
 */
?>
<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title><?php echo $one->title; ?></title>

        <meta name="description" content="<?php echo $one->description; ?>">
        <meta name="author" content="<?php echo $one->author; ?>">
        <meta name="robots" content="<?php echo $one->robots; ?>">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="<?php echo $one->assets_folder; ?>/img/favicons/favicon.png">

        <link rel="icon" type="image/png" href="<?php echo $one->assets_folder; ?>/img/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="icon" type="image/png" href="<?php echo $one->assets_folder; ?>/img/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="<?php echo $one->assets_folder; ?>/img/favicons/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="<?php echo $one->assets_folder; ?>/img/favicons/favicon-160x160.png" sizes="160x160">
        <link rel="icon" type="image/png" href="<?php echo $one->assets_folder; ?>/img/favicons/favicon-192x192.png" sizes="192x192">

        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $one->assets_folder; ?>/img/favicons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $one->assets_folder; ?>/img/favicons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $one->assets_folder; ?>/img/favicons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $one->assets_folder; ?>/img/favicons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $one->assets_folder; ?>/img/favicons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $one->assets_folder; ?>/img/favicons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $one->assets_folder; ?>/img/favicons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $one->assets_folder; ?>/img/favicons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $one->assets_folder; ?>/img/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Web fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
