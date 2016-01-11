<?php
class data_queries{
	function get_invities(){
		global $conn;
		$sql = $conn->query('SELECT *   FROM members');
		$sql->setFetchMode(PDO::FETCH_ASSOC); //retrieve in resultset $q_slack
		return($sql);
	}
	function get_slack_token_url(){
		global $conn;
		$sql = $conn->query('SELECT * FROM slack_settings');
		$sql->setFetchMode(PDO::FETCH_ASSOC); //retrieve in resultset $q_slack
		$slc = $sql->fetch();
		return($slc);
	}
	function get_all_slack_token_url(){
		global $conn;
		$sql = $conn->query('SELECT * FROM slack_settings');
		$sql->setFetchMode(PDO::FETCH_ASSOC); //retrieve in resultset $q_slack
		return($sql);
	}
	function get_email_notifications(){
		global $conn;
		$sql = $conn->query('select * from notification_emails');
		$sql->setFetchMode(PDO::FETCH_ASSOC); //retrieve in resultset $q_slack
		return($sql);
	}
	function chk_login($username,$pwd){
		global $conn;
		$result = "";
		$stmt = "SELECT `user_id`, `user_name`, `passwd` FROM `user_admin` WHERE user_name = '".$username."' AND passwd ='".$pwd."'"; //query
		$rs= $conn->query($stmt);
		if($rs){
			foreach ($rs as $key) {
				$username=$key['user_name'];
				$passwd= $key['passwd'];
				$_SESSION['login_user']=$username;
				$result = "done";
			}
		}else{
			$result = "err";
		}
		return($result);
	}
	function add_new_notfication_email($name,$email){
		global $conn;
		$result = "";
		$sql="INSERT INTO `notification_emails` ( `name`, `email`) VALUES (:name,:email)";
		$stmt = $conn->prepare($sql);
		$var = $stmt->execute( array( ":name" => $name,":email" => $email ));
		if($var){
			$result = "successful";
		}else{
			$result = "failed";
		}
		return($result);
	}
	function remove_notfication_email($e_id){
		global $conn;
		$result = "";
		$sql = "DELETE FROM `notification_emails` WHERE `e_id`=:ID";
		$stmt = $conn->prepare($sql);
		$var = $stmt->execute( array( ":ID" => $e_id ));
		if($var){
			$result = "Deleted";
		}else{
			$result = "failed";
		}
		return($result);
	}
	function edit_tokens($url,$token){
		global $conn;
		$result = "";
		$sql = "UPDATE `slack_settings` SET `url`=:geturl, `token`=:gettoken WHERE `name`='Raju'";
		$stmt = $conn->prepare($sql);
		$var = $stmt->execute( array( ':geturl'=>$url, ':gettoken'=>$token  ) );
		if($var){
			$result = "successful";
		}else{
			$result = "failed";
		}
		return($result);
	}
	function update_notfication_email($url,$token){
		global $conn;
		$result = "";
		$sql = "UPDATE `notification_emails` SET `status`=:getstatus WHERE `email`=:getemail";
		$stmt = $conn->prepare($sql);
		$var = $stmt->execute( array( ':geturl'=>$url, ':gettoken'=>$token  ) );
		if($var){
			$result = "successful";
		}else{
			$result = "failed";
		}
		return($result);
	}
}
?>