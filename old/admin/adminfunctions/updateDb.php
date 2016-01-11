<?php
//this page updates invitation status
include '../../functions/connections.php';

	$email = $_POST['semail'];
	$status = $_POST['status'];
	 $sql="UPDATE `members` SET `status`=:getstatus WHERE `email`=:getemail";
	 $q=$conn->prepare( $sql );

	 print_r( $q->execute( array( ':getstatus'=>$status, ':getemail'=>$email  ) ) );

?>