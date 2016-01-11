<?php 
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$res_url ="";
$get_url = explode("/",$_SERVER['REQUEST_URI']);
for($k=1;$k<count($get_url) - 2 ;$k++){
	$res_url = $res_url . "/".$get_url[$k];
}
define("BASE_PATH", $protocol . $_SERVER['HTTP_HOST'] . $res_url ."/sia-admin/");
?>