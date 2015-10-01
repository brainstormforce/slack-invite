<?php
	session_start(); // Starting Session
	include '../../functions/connections.php';
	if (isset($_POST['submit'])) {
	if (empty($_POST['username']) || empty($_POST['password'])){   //checks whether user has entered any values or not
		$error = "please enter Username and  Password ";
		echo $error;
	}else
	{
		// gets $username and $password from user
		$username= $_POST['username'];
		$password=$_POST['password'];
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo"hello";
		try{
				
			$stmt = "SELECT `user_id`, `user_name`, `passwd` FROM `user_admin` WHERE user_name = '".$username."'"; //query

			$rs= $conn->query($stmt);
			
			if($rs){
				echo $username;
				 foreach ($rs as $key) {				
						$username=$key['user_name'];
						$passwd= $key['passwd'];
						if( $passwd==$password){
							$_SESSION['login_user']=$username;
							echo"  login Successfull";
							echo $_SESSION['login_user'];
							header('location:../base_tables_responsive.php');
						}
						else {
							$error = "  Password is invalid";
							echo $error;
							header('location:../index.php');
						}

				  } 
			}
			else{
				echo"  username is Invalid";
			}

			$conn=null;// Closing Connection
			}

			catch(PDOException $e) {
					echo $e->getMessage();
				}
		}
}
		
?>
