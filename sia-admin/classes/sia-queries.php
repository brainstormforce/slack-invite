<?php

if(strpos($_SERVER['REQUEST_URI'],"sia-admin")){
	require 'PHPMailer/PHPMailerAutoload.php';
}else{
	require 'sia-admin/PHPMailer/PHPMailerAutoload.php';
}
class db_queries
{
	function cretae_database($dbname){
		$sql = "CREATE DATABASE IF NOT EXISTS  $dbname";
		if(run_query($sql)){
			
		}
	}
	function create_basic_set_up(){
		$result ="";
		//creating members Table
		$sqlmember = "CREATE TABLE IF NOT EXISTS members (
			member_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
			name VARCHAR(50) NOT NULL,
			email VARCHAR(50) NOT NULL,
			about VARCHAR(1000) ,
			contact VARCHAR(12),
			status  CHAR(25)
		)";
		if(run_query($sqlmember)){
			$result = "success";
		}else{
			$result = "fail";
		}
		
		//creating table for Notification emails
		$sqlnotification="CREATE TABLE IF NOT EXISTS notification_emails(
			e_id int(3) AUTO_INCREMENT PRIMARY KEY,
			name VARCHAR(50) NOT NULL,
			email VARCHAR(50) NOT NULL,
			status  CHAR(5)
			)";
		if(run_query($sqlnotification)){
			$result = "success";
		}else{
			$result = "fail";
		}
            
		//creating table for Slack setting
		$sqlsettings="CREATE TABLE IF NOT EXISTS slack_settings(
		id int(3) AUTO_INCREMENT PRIMARY KEY,
		name VARCHAR(50) NOT NULL,
		url VARCHAR(150) NOT NULL,
		token  CHAR(100),
		status CHAR(10)
		)";
		if(run_query($sqlsettings)){
			$result = "success";
		}else{
			$result = "fail";
		}
            
		//creating table for user admin
		$sqladmin="CREATE TABLE IF NOT EXISTS user_admin(
			user_id int(3) AUTO_INCREMENT PRIMARY KEY,
			user_name VARCHAR(50) NOT NULL,
			passwd VARCHAR(255) NOT NULL,
			email varchar(30) NOT NULL
		)";		
		if(run_query($sqladmin)){
			$result = "success";
		}else{
			$result = "fail";
		}
		/*$data = file("../.htaccess");
		$out = array();
		foreach($data as $line) {
			$out[] = $line;
		}
		$res_url ="";
		$get_url = explode("/",$_SERVER['REQUEST_URI']);
		for($k=1;$k<count($get_url) - 2 ;$k++){
			$res_url = $res_url . "/".$get_url[$k];
		}
		$out[1] = "RewriteBase ". $res_url ."/\n";
		$fp = fopen("../.htaccess", "w+");
		flock($fp, LOCK_EX);
		foreach($out as $line) {
			fwrite($fp, $line);
		}
		flock($fp, LOCK_UN);
		fclose($fp);*/
		return($result);
	}
	function create_new_administrator($userpname,$username,$pass,$useremail){
		$result ="";
		$sql = run_query("INSERT INTO `user_admin`(`user_name`, `passwd`, `email`) VALUES ( '".validate_input($username)."','".SHA1(validate_input($pass))."','".validate_input($useremail)."')");
		$sql = run_query("INSERT INTO `notification_emails`(`name`, `email`) VALUES ( '".validate_input($userpname)."','".validate_input($useremail)."')");
	}
	function chk_tables(){
		$result = run_query("SHOW TABLES");
		if (chk_result_if_empty($result) > 0) {
			$r = fetch_data($result);
			$result_u = run_query("select count(*) from user_admin");
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
	function chk_login($username,$pwd){
		$result = "";
		$stmt = "SELECT `user_id`, `user_name`, `passwd`, `email` FROM `user_admin` WHERE user_name = '".validate_input($username)."' AND passwd ='".SHA1(validate_input($pwd))."'";
		$rs = run_query($stmt);
		if($rs){
			foreach ($rs as $key) {
				$_SESSION['login_user'] = $key['user_name'];
				$_SESSION['uid'] = $key['user_id'];
				$_SESSION['email'] = $key['email'];
				$result = "done";
			}
		}else{
			$result = "err";
		}
		return($result);
	}
	function get_slack_token_url(){
		$sql = run_query('SELECT * FROM slack_settings');
		$slc = fetch_data($sql);
		return($slc);
	}
	function get_active_slack_token_url(){
		$sql = run_query('SELECT * FROM slack_settings ');
		$slc = fetch_data($sql);
		return($slc);
	}
	function get_all_slack_token_url(){
		$sql = run_query('SELECT * FROM slack_settings');
		return($sql);
	}
	function get_invities(){
		$sql = run_query('SELECT * FROM members');
		return($sql);
	}
	function get_email_notifications(){
		$sql = run_query('select * from notification_emails');
		return($sql);
	}
	function add_new_slack_token($name,$url,$token){
		$sql = run_query("insert into slack_settings(name,url,token,status)values('".validate_input($name)."','".validate_input($url)."','".validate_input($token)."','activated')");
	}
	function accept_invitation($id){
		$sql = run_query("update members set status = 'invited' where member_id ='".validate_input($id)."'");
	}
	function decline_invitation($id){
		$sql = run_query("update members set status = 'declined' where member_id ='".validate_input($id)."'");
	}
	function update_notfication_email_status($id,$status){
		$sql = run_query("UPDATE `notification_emails` SET `status`='".validate_input($status)."' WHERE `e_id`='".validate_input($id)."'");
	}
	function remove_notfication_email($e_id){
		$sql = run_query("DELETE FROM `notification_emails` WHERE `e_id`='".validate_input($e_id)."'");
		return("Deleted");
	}
	function add_new_notfication_email($name,$email){
		$sql=run_query("INSERT INTO `notification_emails` ( `name`, `email`) VALUES ('".validate_input($name)."','".validate_input($email)."')");
	}
	function activate_token($id){
		$sql = run_query("update slack_settings set status = 'activated' where id ='".validate_input($id)."'");
	}
	function deactivate_token($id){
		$sql = run_query("update slack_settings set status = 'deactivated' where id ='".validate_input($id)."'");
	}
	function add_new_request($name,$email,$about,$contact){
		$sql = run_query("insert into members (name,email,about,contact)values('".validate_input($name)."','".validate_input($email)."','".validate_input($about)."','".validate_input($contact)."')");
		$this -> send_email();
	}
	function get_slack_token_url_by_id($id){
		$sql = run_query("SELECT * FROM slack_settings where id='".validate_input($id)."'");
		$slc = fetch_data($sql);
		return($slc);
	}
	function edit_new_slack_token($id,$name,$url,$token){
		$sql = run_query("update slack_settings set name ='".validate_input($name)."',url = '".validate_input($url)."',token = '".validate_input($token)."' ,status = 'activated' where id='".validate_input($id)."'");
	}
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
		$sql=run_query("select * from notification_emails where status='on'");
		
		while($result = fetch_data($sql)) {

			$mail->addAddress($result['email'], $result['name']);
	 		if (!$mail->send()) {
	        	echo "Mailer Error " . $mail->ErrorInfo . '<br />';
	        	break; //Abandon sending
	   		 } else {	
	        $count++;
    //Mark it as sent in the DB
			}
		    // Clear all addresses and attachments for next loop
		    $mail->clearAddresses();
		    $mail->clearAttachments();
		}
		echo "Message sent to ".$count." member(s)";
	}
}
?> 
