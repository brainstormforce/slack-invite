<?php
$name= test_input($_POST['fname']);
$email= test_input($_POST['email']);
$about= test_input($_POST['about_yourself']);
$contact= test_input($_POST['contact']);
//$notification_status=$_POST['ntfstatus'];
include 'functions/connections.php';
//sql injection 
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;

}
	print_r( $_POST );
	try {
		$pdo =$conn;// new PDO("mysql:host=localhost;dbname=slack_invite", 'root', '');//
		$count = $pdo->exec( "INSERT INTO `members`(`name`, `email`, `about`, `contact`) VALUES ('$name', '$email', '$about',  '$contact')" );
		if($count==1){		
			echo"success";
			//mail to notification to admin 
			if($notification_status){
					$to = "somebody@example.com";
					$subject = "My subject";
					$txt = "Hello world!";
					$headers = "From: webmaster@example.com" . "\r\n" .
					"CC: somebodyelse@example.com";
					mail($to,$subject,$txt,$headers);
				}
			}
		else{
				echo "failed";
			}
		$pdo=null;
	}
	catch(PDOException $e) {
		echo $e->getMessage();
	}
