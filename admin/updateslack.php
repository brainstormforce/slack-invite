<?php
include '../functions/connections.php';
$name=$_POST['user_name'];
$slackurl=$_POST['slack_url'];
$token=$_POST['token'];
$sql="INSERT INTO `slack_settings` (`name`, `url`, `token`) VALUES ('$name', '$slackurl', '$token')";
if($rs=$conn->exec($sql)){
	echo "success";
}
?>