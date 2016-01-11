<?php

session_start();
var_dump($_SESSION);
die;
if(isset($_SESSION['login_user'])){
	session_destroy();
	echo"<h2>Logout successfull</h2>";
	header('Location: ../index.php');
}
else{
	header('Location: ../index.php');
}
?>