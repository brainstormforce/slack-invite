<?php
session_start();
/*if(!isset($_SESSION['login_user'])){
	header("Location: login");
}*/
require 'inc/config.php';
require 'inc/views/template_head_start.php';
require 'inc/views/template_head_end.php'; 
require 'inc/views/base_head.php'; 
require 'constants.php'; 
//require 'classes/db_queries.php'; 
//$slack_obj = new data_queries();
//echo $_SERVER['HTTP_HOST'];
?>
<head>
    <title>Add Database</title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_PATH; ?>assets/css/formcss.css"></link>
    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>assets/css/style.css"></link>
    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>assets/css/font-awesome/css/font-awesome.min.css"></link>
</head>