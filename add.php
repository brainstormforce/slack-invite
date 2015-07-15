<?php
$name= test_input($_POST['fname']);
$email= test_input($_POST['email']);
$about= test_input($_POST['about_yourself']);
$contact= test_input($_POST['contact']);

//sql injection 
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;

}
	print_r( $_POST );
	try {
		$pdo = new PDO("mysql:host=localhost;dbname=slack_invite", 'root', 'aftermath7');
		$count = $pdo->exec( "INSERT INTO `members`(`name`, `email`, `about`, `contact`) VALUES ('$name', '$email', '$about',  '$contact')" );
		if($count==1){		
			echo"successful";
		}
		else{
			echo"something went wrong";
		}
		$pdo=null;
	}
	catch(PDOException $e) {
		echo $e->getMessage();
	}