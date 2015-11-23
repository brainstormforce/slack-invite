<?php
session_start();
if(isset($_SESSION['login_user'])){
	session_destroy();
	echo"<h2>Logout successfull</h2>";
	header('Location: ../index.php');
}
else{
	header('Location: ../index.php');
}
?>