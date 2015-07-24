<?php 
include '../../functions/connections.php';

try{
	
if($_GET['action']=='settings_email'){


		echo $name=$_POST['name'];
		echo $email=$_POST['notification_email'];
		 $sql="INSERT INTO `notification_emails` ( `name`, `email`) VALUES ('".$name."', '".$email."')";
		$r=$conn->exec($sql);
		 if($r){echo "successful";}
		 else{
		 	echo"failed";
		 }
	}
	else if($_GET['action']=='update_email_status'){

		$email=$_POST['email'];
		echo 'Email: '.$email;
		 $status=$_POST['status'];
		$sql="UPDATE `notification_emails` SET `status`=:getstatus WHERE `email`=:getemail";
		$q=$conn->prepare( $sql );
		 print_r( $q->execute( array( ':getstatus'=>$status, ':getemail'=>$email  ) ) );
	}
	else if($_GET['action']='add_slack_setting'){
		
		$name=$_POST['user_name'];
		$slackurl=$_POST['slack_url'];
		$token=$_POST['token'];
		$sql="INSERT INTO `slack_settings` (`name`, `url`, `token`) VALUES ('$name', '$slackurl', '$token')";
		if($rs=$conn->exec($sql)){
			echo "success";
		}
	}
}catch(PDOException $e) {
		echo $e->getMessage();
	}
?>