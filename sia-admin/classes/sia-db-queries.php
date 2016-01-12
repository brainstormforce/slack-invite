<?php
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
		$sql = run_query("INSERT INTO `user_admin`(`user_name`, `passwd`, `email`) VALUES ( '".validate_input($username)."','".validate_input($pass)."','".validate_input($useremail)."')");
		$sql = run_query("INSERT INTO `notification_emails`(`name`, `email`) VALUES ( '".validate_input($userpname)."','".validate_input($useremail)."')");
	}
	function chk_tables(){
		global $conn;
		if($conn == Null){
			unlink("../functions/connections.php");
			header("Location: add-database.php?conerr=yes");
		}
		$result = $conn->query("SHOW TABLES");
		if ($result->rowCount() > 0) {
			$r = $result->fetchAll(PDO::FETCH_ASSOC);
			$result_u = $conn->query("select count(*) from user_admin");
			$r_u = $result_u->fetchAll(PDO::FETCH_ASSOC);
			if ($r_u[0]['count(*)'] > 0) {
			}else{
				$r = "nou";
			}
		}else{
			$r = false;
		}
		
		return $r;
	}

	function database_connection_setup($dbname,$dbuser,$dbpwd,$dbhost){
		$fp=fopen('../sia-config.php','w');
		fwrite($fp, "<?php \n
			define('DB_NAME', '".$dbname."');
			define('DB_USER', '".$dbuser."');
			define('DB_PASSWORD', '".$dbpwd."');
			define('DB_HOST', '".$dbhost."'); \n?>");
		fclose($fp);
	}
	function chk_login($username,$pwd){
		$result = "";
		$stmt = "SELECT `user_id`, `user_name`, `passwd`, `email` FROM `user_admin` WHERE user_name = '".validate_input($username)."' AND passwd ='".validate_input($pwd)."'";
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
	function get_invities(){
		$sql = run_query('SELECT * FROM members');
		return($sql);
	}
	function get_email_notifications(){
		$sql = run_query('select * from notification_emails');
		return($sql);
	}
}
?> 
