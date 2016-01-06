<?php
$filepath = "../functions/connections.php";
if(file_exists($filepath)){
	require("../functions/main_functions.php");
	$si_db_obj = new dbfunctions();
	$tbl_count = $si_db_obj->chk_tables();
	if($tbl_count == false){
		header("location: add-database.php");
	}else if($tbl_count == "nou"){
		
	}else{
		header("location: index.php");
	}
}
?>
<html>
<head>
	<script src="assets/js/jquery-1.11.3.min.js" ></script>
	<title></title>
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
						<input class="form-control" type="text" name="username" placeholder="Enter User Name " required>
					</div>
					<div class="form-group">
						<input class="form-control" type="text" name="password" placeholder="Enter Password " required>
					</div>
					<div class="form-group">
						<input class="form-control" type="email" name="email" placeholder="Enter Email" required>
					</div>
					<div>
						<input id="login-button" class="form-control" type="submit" name="save" value="Create User"/>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
<?php 



if(isset($_POST['save']) && isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['email']) && !empty($_POST['email'])){
	//require("../functions/main_functions.php");
	$username = $_POST['username'];
	$pass = $_POST['password'];
	$useremail = $_POST['email'];
	//$si_db_obj = new dbfunctions();
	$create_admin = $si_db_obj->create_new_administrator($username,$pass,$useremail);
	if($create_admin == "success"){
		?>
		<script>
		
			var username ='<?php echo $username;?>';
			var pass = '<?php echo $pass; ?>';
			var email = '<?php echo $useremail; ?>';
			jQuery('.save').load('../functions/MailToadmin.php', {user:username,pass:pass,email:email});
			window.location.href = "index.php";
		
		</script>
		<?php
	}
}
?>