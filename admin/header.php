<?php
session_start();
require_once ( '../functions/connections.php' );
if(!isset($_SESSION['login_user'])){
	header("Location: login");
}
require 'inc/config.php';
require 'inc/views/template_head_start.php';
require 'inc/views/template_head_end.php'; 
require 'inc/views/base_head.php'; 
require 'classes/db_queries.php'; 
$slack_obj = new data_queries();
?>