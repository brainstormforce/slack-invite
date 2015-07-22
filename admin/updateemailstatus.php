
<?php 
include '../functions/connections.php';
	 $email=$_POST['email'];
	echo 'Email: '.$email;
	 $status=$_POST['status'];
	$sql="UPDATE `notification_emails` SET `status`=:getstatus WHERE `email`=:getemail";
	$q=$conn->prepare( $sql );
	 print_r( $q->execute( array( ':getstatus'=>$status, ':getemail'=>$email  ) ) );

?>