<?php
require("../functions/connections.php");
class dbfunctions{
	
	function cretae_database($dbname){
		$sql = "CREATE DATABASE IF NOT EXISTS  $dbname";
		if($conn->exec($sql)){
			
		}
	}
	function create_basic_set_up(){
		global $conn;
		if($conn == Null){
			unlink("../functions/connections.php");
			header("Location: add-database.php?conerr=yes");
		}
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
		if($conn->query($sqlmember)){
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
		if($conn->query($sqlnotification)){
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
		if($conn->query($sqlsettings)){
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
		if($conn->query($sqladmin)){
			$result = "success";
		}else{
			$result = "fail";
		}
		$data = file("../.htaccess");
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
		fclose($fp);
		return($result);
	}
	function create_new_administrator($username,$pass,$useremail){
		global $conn;
		$result ="";
		$sql = $conn->prepare('INSERT INTO `user_admin`(`user_name`, `passwd`, `email`) VALUES ( :username, :passwd, :email)');
		if($sql->execute( array(':username'=> $username, ':passwd'=> SHA1($pass), ':email'=>$useremail) )){
			$result ="success";
		}
		return($result);
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
}
?>