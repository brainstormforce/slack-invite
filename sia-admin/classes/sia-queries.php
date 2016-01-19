<?php

if(strpos($_SERVER['REQUEST_URI'],"sia-admin")){
	require 'phpmailer/phpmailerautoload.php';
}else{
	require 'sia-admin/phpmailer/phpmailerautoload.php';
}
class db_queries
{
	/*** BASIC SET Up Functions ***/
	function cretae_database($dbname){
		$sql = "CREATE DATABASE IF NOT EXISTS  $dbname";
		if(run_query($sql)){
			
		}
	}
	function create_basic_set_up(){
		$result ="";
		//creating members Table
		$sqlmember = "CREATE TABLE IF NOT EXISTS `sia-members` (
			`member_id` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
			`name` VARCHAR(50) NOT NULL,
			`email` VARCHAR(50) NOT NULL,
			`about` VARCHAR(1000) ,
			`contact` VARCHAR(12),
			`status`  CHAR(25)
		)";
		if(run_query($sqlmember)){
			$result = "success";
		}else{
			$result = "fail";
		}
		
		//creating table for Notification emails
		$sqlnotification="CREATE TABLE IF NOT EXISTS `sia-options`(
			`id` int(11) AUTO_INCREMENT PRIMARY KEY,
			`option_name` VARCHAR(150) NOT NULL,
			`option_value` LONGTEXT NOT NULL
			)";
		if(run_query($sqlnotification)){
			$result = "success";
		}else{
			$result = "fail";
		}
		return($result);
	}

	/*** Create New Administrator ***/
	function create_new_administrator($userpname,$username,$pass,$useremail){
		$result ="";
		
		$admin_details = array(validate_input($username),validate_input(SHA1($pass)),validate_input($useremail));
		$notification_email_details['user0'] = array(validate_input($userpname),validate_input($useremail),"on");

		$sql = run_query("INSERT INTO `sia-options`(`option_name`, `option_value`) VALUES ( 'admin-user','". serialize($admin_details)."')");

		$get_noti = $this->get_email_notifications();
		if(chk_result_if_empty($get_noti)>0){

			$res_noti = fetch_data($get_noti);
			$notification_email_details = $res_noti['option_value'] . serialize($notification_email_details);
			$sql=run_query("update `sia-options` set `option_value` = '".$notification_email_details."' where id='".$res_noti['id']."'");
		}else{
			$notification_email_details = serialize($notification_email_details);
			$sql=run_query("INSERT INTO `sia-options` ( `option_name`, `option_value`) VALUES ('notification-emails','".$notification_email_details."')");
		}
	}

	/*** Check tables were created or not ***/
	function chk_tables(){
		$result = run_query("SHOW TABLES");
		if (chk_result_if_empty($result) > 0) {
			$r = fetch_data($result);
			$result_u = run_query("select count(*) from `sia-options` where `option_name` = 'admin-user'");
			$r_u = fetch_data($result_u);
			if ($r_u['count(*)'] > 0) {
				$r = "send_to_login";
			}else{
				$r = "nou";
			}
		}else{
			$r = false;
		}
		
		return $r;
	}

	/*** Create Configuration File ***/
	function database_connection_setup($dbname,$dbuser,$dbpwd,$dbhost){
		$con = mysqli_connect($dbhost,$dbuser,$dbpwd,$dbname);
		if(mysqli_connect_errno()>0){
			header("Location: sia-install.php?conerr=yes");
		}else{
			$fp=fopen('../sia-config.php','w');
			fwrite($fp, "<?php \n
				define('DB_NAME', '".$dbname."');
				define('DB_USER', '".$dbuser."');
				define('DB_PASSWORD', '".$dbpwd."');
				define('DB_HOST', '".$dbhost."'); \n?>");
			fclose($fp);
			header("Location: sia-install-result.php");
		}
	}

	/*** Check Login credentials ***/
	function chk_login($username,$pwd){
		$result = "";
		$stmt = "SELECT * FROM `sia-options` WHERE option_name = 'admin-user'";
		$rs = run_query($stmt);
		if($rs){
			foreach ($rs as $key) {
				$login_result = unserialize($key['option_value']);
				
			}
			if ($login_result[0] == validate_input($username) && $login_result[1] == validate_input(SHA1($pwd))) {
				$_SESSION['login_user'] = $login_result[0];
				$_SESSION['uid'] = "1";
				$_SESSION['email'] = $login_result[2];
				$result = "done";
			}
		}else{
			$result = "err";
		}
		return($result);
	}

	/*** Slack Token Functions ***/
	function get_slack_token(){
		$result = "";
		$sql = run_query("select * from `sia-options` where option_name='slack_token'");
		if(chk_result_if_empty($sql) > 0){
			$result = fetch_data($sql);
		}
		return($result);
	}
	function add_new_slack_token($name,$url,$token){
		$slack_value = array($name,$url,$token,"activated");
		$sql = run_query("insert into `sia-options`(`option_name`,`option_value`)VALUES('slack_token','".serialize($slack_value)."')");
	}
	function edit_new_slack_token($id,$name,$url,$token){
		$slack_value = array($name,$url,$token,"activated");
		$sql = run_query("update `sia-options` set `option_name` = 'slack_token',`option_value` ='".serialize($slack_value)."' where id = '".validate_input($id)."'");
	}

	/***** Email Notification Functions********/
	function get_email_notifications(){
		$sql = run_query("select * from `sia-options` where `option_name` = 'notification-emails'");
		return($sql);
	}
	function update_notfication_email_status($id,$status){
		$get_sql = run_query("select * from `sia-options` where `option_name` = 'notification-emails'");
		$res_sql = fetch_data($get_sql);
		$res_sql = unserialize($res_sql['option_value']);
		$res_sql['user'.$id][2] = validate_input($status);
		$sql = run_query("UPDATE `sia-options` SET `option_value`='".serialize($res_sql)."' WHERE `option_name`='notification-emails'");
	}
	function add_new_notfication_email($name,$email){
		$notification_data = array(validate_input($name),validate_input($email));
		$get_noti = $this->get_email_notifications();
		if(chk_result_if_empty($get_noti)>0){
			$res_noti = fetch_data($get_noti);
			$old_data = unserialize($res_noti['option_value']);
			$old_data['user' . count($old_data)] = $notification_data;

			$notification_data = serialize($old_data);
			$sql=run_query("update `sia-options` set `option_value` = '".$notification_data."' where id='".$res_noti['id']."'");
		}else{
			$notification_data1['user0'] = $notification_data;
			$notification_data = serialize($notification_data1);
			$sql=run_query("INSERT INTO `sia-options` ( `option_name`, `option_value`) VALUES ('notification-emails','".$notification_data."')");
		}
		
	}
	function remove_notfication_email($e_id){
		$get_noti = $this->get_email_notifications();
		if(chk_result_if_empty($get_noti)>0){
			$res_noti = fetch_data($get_noti);
			$old_data = unserialize($res_noti['option_value']);
			$old_data['user'.$e_id] = "";
			$sql=run_query("update `sia-options` set `option_value` = '".serialize($old_data)."' where id='".$res_noti['id']."'");
		}
		return("Deleted");
	}


	/***** Invitess Functions********/
	function get_invities(){
		$sql = run_query('SELECT * FROM `sia-members`');
		return($sql);
	}
	function accept_invitation($id){
		$sql = run_query("update `sia-members` set status = 'invited' where member_id ='".validate_input($id)."'");
	}
	function decline_invitation($id){
		$sql = run_query("update `sia-members` set status = 'declined' where member_id ='".validate_input($id)."'");
	}
	function add_new_request($name,$email,$about,$contact){
		$sql = run_query("insert into `sia-members` (name,email,about,contact)values('".validate_input($name)."','".validate_input($email)."','".validate_input($about)."','".validate_input($contact)."')");
		$this -> send_email();
	}

	
	/***** Send Email Function ********/
	function send_email(){
		$mail = new PHPMailer;
		$body = "Congratulation! <br> You have a new request to add him in your slack team. Please login to Slack Invitation App to respond on new request.";

		$mail->isSMTP();
		$mail->Host = 'email-smtp.us-east-1.amazonaws.com';
		$mail->SMTPAuth = true;
		$mail->SMTPKeepAlive = true; // SMTP connection will not close after each email sent, reduces SMTP overhead
		$mail->Port = 587;
		$mail->Username = 'AKIAJSGXEMDO7XF263NA';
		$mail->Password = 'ApRz3QVxkWwaEAKvBZnhEkBS6S9HGZXEylwp5SyHizW4';
		$mail->setFrom('do-not-reply@bsf.io', 'Brainstorm Force');

		$mail->Subject = "Slack Invitation Request";
		$mail->msgHTML($body);
		$mail->AltBody = 'To view the message, please use an HTML compatible email viewer!';
		$count=0;
		$sql=run_query("select * from `sia-options` where `option_name` = 'notification-emails'");
		$result = fetch_data($sql);
		$result = unserialize($result['option_value']);
		for ($i=0; $i < count($result); $i++)
		{
			if (!empty($result['user'. $i])) {
				if ($result['user'. $i][2] == 'on') {
					$mail->addAddress($result['user'. $i][1], $result['user'. $i][0]);
					if (!$mail->send()) {
			        	echo "Mailer Error " . $mail->ErrorInfo . '<br />';
			        	break; //Abandon sending
			   		 } else {
			        	$count++;
					}
				}
	 		
			    // Clear all addresses and attachments for next loop
			    $mail->clearAddresses();
			    $mail->clearAttachments();
			}
		}
		echo "Message sent to ".$count." member(s)";
	}
}
?> 
