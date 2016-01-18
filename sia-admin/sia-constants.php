<?php 
error_reporting(E_ALL);
session_start();
ob_start();
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$res_url ="";
$get_url = explode("/",$_SERVER['REQUEST_URI']);
for($k=1;$k<count($get_url) - 2 ;$k++){
	$res_url = $res_url . "/".$get_url[$k];
}
define("BASE_PATH", $protocol . $_SERVER['HTTP_HOST'] . $res_url ."/sia-admin/");


$filepath = "../sia-config.php";
if(file_exists($filepath)){
	require("../sia-config.php");
	require("classes/sia-connection.php");
	
}else{
	function check_install_complete(){
		if(strpos($_SERVER['REQUEST_URI'],"sia-admin")){
			if(file_exists("../sia-config.php")){ return true; }else{ return false; }
		}else{
			if(file_exists("sia-config.php")){ return true; }else{ return false; }
		}
	}
}
require("classes/sia-queries.php");
$sia_obj = new db_queries();


?>