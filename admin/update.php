<?php
include '../functions/connections.php';
	$email = $_POST['semail'];
	$status = $_POST['status'];
	 $sql="UPDATE `members` SET `status`=:getstatus WHERE `email`=:getemail";
	 $q=$conn->prepare( $sql );
	//$count = $conn->exec( "UPDATE `members` SET `status`='". $status ."' WHERE `email`='". $email ."'" );
	//if($count){
	//	echo $count."Rows affected";
	//}
	 print_r( $q->execute( array( ':getstatus'=>$status, ':getemail'=>$email  ) ) );

?>