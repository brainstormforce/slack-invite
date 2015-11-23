<?php
include 'connections.php';
 error_reporting(E_ALL);


/*function test_input($data) {
						  $data = trim($data);
						  $data = stripslashes($data);
						  $data = htmlspecialchars($data);
						  return $data;

						}*/
if( $_GET ) {
	$action = isset ($_GET['action']) ? $_GET['action'] : '' ;
	if( $action != '' ) {
		switch ($action) {
			case 'check_email':	$email=$_POST['email'];
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
				break;

			case 'add_entry':	//echo "hurray";
							
									$name= $_POST['fname'];
									$email= $_POST['email'];
									$about= $_POST['about_yourself'];
									$contact= $_POST['contact'];
									
										
											$pdo =$conn;
											$sql="INSERT INTO `members`(`name`, `email`, `about`, `contact`) VALUES ('$name', '$email', '$about',  '$contact')";

											if($pdo->exec( $sql )){	
												
												$pdo=null;
											    //include 'newmail.php';
											    echo json_encode(array('msg' => 'noerror'));
												die();
												}
											else{
												//echo json_encode(array('msg' => 'errors'));
												}
												
				break;
		}
	}
}

?>

