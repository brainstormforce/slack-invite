<?php
session_start();
require_once ( '../functions/connections.php' );
require 'classes/db_queries.php'; 
$slack_obj = new data_queries();

if (isset($_POST['submit'])) {
	if (empty($_POST['username']) || empty($_POST['password'])){   //checks whether user has entered any values or not
		$error = "please enter Username and  Password ";
		echo $error;
	}
	else
	{
		// gets $username and $password from user
		$username= $_POST['username'];
		$password= SHA1($_POST['password']);
		$result = $slack_obj ->chk_login($username,$password);
		if($result == "done")
		{
			header("Location: invitees");
		}else{
			header("Location: login?err=err");
			
		}
	}
}
?>
