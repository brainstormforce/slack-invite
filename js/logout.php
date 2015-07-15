<?php
session_destroy($_SESSION['login_user']);
echo"<h2>Logout successfull</h2>";
header('Location:login.php');
?>