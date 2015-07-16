<?php 
	// echo "<pre>";
	// print_r( $_SERVER );
	// echo "</pre>";

$URL = 'http://'.$_SERVER['HTTP_HOST'].''.$_SERVER['REQUEST_URI'] ;
echo $URL;
?>