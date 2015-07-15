<?php
	session_start(); // Starting Session
	include '../header.php';
	$error=''; // Variable To Store Error Message
	if (isset($_POST['submit'])) {
	if (empty($_POST['username']) || empty($_POST['password'])){   //checks whether user has entered any values or not
		$error = "please enter Username and  Password ";
		echo $error;
	}else
	{
		
		// gets $username and $password from user
		$username= $_POST['username'];
		$password=$_POST['password'];
			$conn = new PDO("mysql:host=localhost;dbname=slack_invite", 'root', '');//Establish connection
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
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

						}
						else {
							$error = "  Password is invalid";
							echo $error;
							header('location:index.php');
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
