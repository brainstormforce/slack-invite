<?php
session_start();
if(isset($_SESSION['login_user'])){
	session_destroy();
	echo"<h2>Logout successfull</h2>";
	header('Location:'.$URL.'/admin/index.php');
}
?>