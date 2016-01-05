<html>
<head>
	<script src="assets/js/jquery-1.11.3.min.js" ></script>
	<title>
	</title>
	<link rel="stylesheet" type="text/css" href="assets/css/formcss.css">
	    <link rel="stylesheet" href="../assets/css/style.css" >
     <link rel="stylesheet" href="assets/css/font-awesome/css/font-awesome.min.css" />
</head>
<body class="login-index">
	<div class="add-data-basefull-width">
	<div class="container">
		<div class="bg-primary1">
			<i class="fa fa-user-plus"></i><h3 class="block-title-user" >Create User</h3>
		</div>
		<p><b>Note :</b> Please enter the user name and password to create admin login</p>
			<div class="form">
					 <form action='' method="post" class="form-control ">			   
				       	<div class="form-group">
				        	<input class="form-control" type="text" name="username" placeholder="Enter User Name ">
				        </div>
				        <div class="form-group">
					  	   <input class="form-control" type="text" name="password" placeholder="Enter Password ">
					  	</div>
					  	<div class="form-group">
							<input class="form-control" type="text" name="email" placeholder="Enter Email">
					    <div><br>
					      <input id="login-button" class="form-control" type="submit" name="save">
					    </div>
					</form>
			</div>
	</table>
	</div>
	<div>
</body>
</html>
<?php 



if(isset($_POST['save'])){
	require("../functions/connections.php");
	$username = $_POST['username'];
	$pass = $_POST['password'];
	$useremail = $_POST['email'];
	$sql='';
	try{
		$sql = $conn->prepare('INSERT INTO `user_admin`(`user_name`, `passwd`, `email`) VALUES ( :username, :passwd, :email)');
		if($username !=''||$pass != ''|| $email !=''){
		if($sql->execute( array(':username'=> $username, ':passwd'=> $pass, ':email'=>$useremail) )){
			echo "User admin added successfully";
			?>
			<script>
			
				var username ='<?php echo $username;?>';
				var pass = '<?php echo $pass; ?>';
				var email = '<?php echo $useremail; ?>';
				jQuery('.save').load('../functions/MailToadmin.php', {user:username,pass:pass,email:email});
				window.location.href = "index.php";
			
			</script>
			<?php }
			else{
					echo "User could not be added";
				} 
			}
		else{
			echo "Please enter all fields";
		}
	}
	catch(PDOException $e)
    {
    	echo  "<br>" . $e->getMessage();
    }

}
?>