<?php
	include 'functions/connections.php';
	$email=$_POST['email'];
	$sql="SELECT * FROM `members` ";
	$rs=$conn->query($sql);
	$rs->setFetchMode(PDO::FETCH_ASSOC);
	while ($result = $rs->fetch()) {
		
		if($email === $result['email'])
		{
			echo json_encode(array('msg' => 'already_available'));
			//	echo "already_available ";
			exit();
		}
	}
?>