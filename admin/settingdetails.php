<?php 
include '../functions/connections.php';
try{
	if(isset($_POST['add_notification_email'])){
		echo $name=$_POST['name'];
		echo $email=$_POST['notification_email'];
		 $sql="INSERT INTO `notification_email`( `Name`, `email`) VALUES ('".$name."', '".$email."')";
		 $r=$conn->exec($sql);
		 if($r){echo "successful";}
		 else{
		 	echo"failed";
		 }
	}

}catch(PDOException $e) {
		echo $e->getMessage();
	}
?>