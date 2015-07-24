<?php 
include '../../functions/connections.php';
//this file is called from settings.php > settings.js
//add notification email
if($_POST['ajaxfunction']=='settings_email'){

		echo $name=$_POST['name'];
		echo $email=$_POST['notification_email'];
		 $sql="INSERT INTO `notification_emails` ( `name`, `email`) VALUES ('".$name."', '".$email."')";
		$r=$conn->exec($sql);
		 if($r){echo "successful"; die();}
		 else{
		 	echo"failed";
		 	die();
		 }
	}

	//edit slack token and url
	else if($_POST['ajaxfunction']=='edit_token'){
		echo $url=$_POST['url'];
		echo $token=$_POST['token'];
		$sql="UPDATE `slack_settings` SET `url`=:geturl, `token`=:gettoken WHERE `name`='Raju'";
		$q=$conn->prepare( $sql );
		 print_r($q->execute( array( ':geturl'=>$url, ':gettoken'=>$token  ) ) ); 
		 die();
		
	}

	// Set notification email status on/off
	else if($_POST['ajaxfunction']=='update_email_status'){

		$email=$_POST['email'];
		echo 'Email: '.$email;
		 $status=$_POST['status'];
		$sql="UPDATE `notification_emails` SET `status`=:getstatus WHERE `email`=:getemail";
		$q=$conn->prepare( $sql );
		 print_r( $q->execute( array( ':getstatus'=>$status, ':getemail'=>$email  ) ) );
		 die();
	}

	//deletes notification emails
	else if($_POST['ajaxfunction']=='delete'){
		$email=$_POST['delete_email'];
		$sql="DELETE FROM `notification_emails` WHERE `email`=:Email";
		$stmt=$conn->prepare($sql);
		$var = $stmt->execute( array( ":Email" => $email ));
		if($var){
			echo "Record Deleted";
			die();
		}
		else{
			echo "Record Not Deleted";
			die();
		}
	}