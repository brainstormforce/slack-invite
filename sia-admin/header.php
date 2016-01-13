<?php
require 'constants.php'; 
if(check_install_complete() == false){
	header("Location: chk_install.php");
}
if($sia_obj->chk_tables() == false){
	header("Location: chk_install.php");
}
if($sia_obj->chk_tables() == "nou"){ header("Location: create_admin.php"); }
if(!isset($_SESSION['login_user'])){ header("Location: index.php"); }
require 'inc/config.php';
require 'inc/views/template_head_start.php';
require 'inc/views/template_head_end.php'; 
require 'inc/views/base_head.php'; 

?>
<head>
    <title>Add Database</title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_PATH; ?>assets/css/formcss.css"></link>
    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>assets/css/style.css"></link>
    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>assets/css/font-awesome/css/font-awesome.min.css"></link>
</head>