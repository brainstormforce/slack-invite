<?php
 error_reporting(E_ALL);
   ini_set('display_errors', 1);
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
		$pdo =$conn;
		$sql="INSERT INTO `members`(`name`, `email`, `about`, `contact`) VALUES ('$name', '$email', '$about',  '$contact')";

		if($pdo->exec( $sql )){	

			echo json_encode(array('msg' => 'noerror'));
		     //include 'newmail.php';
			}
		else{
			//echo json_encode(array('msg' => 'errors'));
			}
			
		$pdo=null;

die();