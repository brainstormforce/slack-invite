<html>
<head>
	<title>
	</title>
	<link rel="stylesheet" type="text/css" href="assets/css/formcss.css">
</head>
<body>
	<div class="container">
		<div class="heading">
			<h3>Please enter the user name and password to create admin login</h3>
		</div>
		<div class="form">
			 <form action='' method="post" class="form-control   ">
		        <div class="form-group">
		        <label class="control-label">User Name :</label>
		            <input class="form-control" type="text" name="username">
		        </div>
		        <label class="control-label">Enter Password</label>
		            <input class="form-control" type="text" name="password">
		        <div>
		            <input class="form-control" type="submit" name="save">
		        </div>
		    </form>
		</div>
	</div>
</body>
</html>
<?php 
if(isset($_POST['save'])){
	$username = $_POST['username'];
	$pass = $_POST['password'];
	$sql='';
	try{
		$conn = new PDO("mysql:host=localhost;dbname=slack_invite2", 'root', 'aftermath7');
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = $conn->prepare('INSERT INTO `user_admin`(`user_name`, `passwd`) VALUES ( :username, :passwd)');
		// $sql->bindParam(  );

		if($sql->execute( array(':username'=> $username, ':passwd'=> $pass) )){
			echo "User admin added successfully";
		}
		else{
			echo "User could not be added";
		}
	}
	catch(PDOException $e)
    {
    	echo $sql . "<br>" . $e->getMessage();
    }

}
?>