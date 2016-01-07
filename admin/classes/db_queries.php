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
}
?>