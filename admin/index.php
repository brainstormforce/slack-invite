<?php
session_start();
	$filepath = "../functions/connections.php";
	if(file_exists($filepath)){
		if(isset($_SESSION['login_user']) ) {
		echo $_SESSION['login_user'];
		header("location:base_tables_datatables.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login For Admin</title>
	  <meta charset="UTF-8">
	<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/style.css" >
	<link rel="stylesheet" href="assets/css/font-awesome/css/font-awesome.min.css" />
</head>
<body class="login-index">
	<div class="full-width">
		<div class=".col-md-3 .col-md-offset-3 container index">
			<div class="overlay"></div>
				<div class="login-heading"><h1>Login</h1></div>
					
					<form class="form-horizontal" action="adminfunctions/profile.php" method="post">
						<hr />
						<div class="form-group">
							<label class="control-label">UserName </label>
							<div class="full-contain">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
									<input class="form-control" name="username" placeholder="username" type="text">
							</div>
						</div>
						</div>
						<div class="form-group">
							<label class="control-label">Password </label>
							<div class="full-contain">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock"></i></span>
									<input class="form-control" name="password" placeholder="**********" type="password">
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<div class="submitbutton">
								<input class="btn btn-default custom-submitbtn" name="submit" type="submit" value=" Login ">
							</div>
						</div>
						
					</form>
			
		</div>
	</div>
</body>
<?php }else{
	header('Location:../admin/createDb.php');
} ?>
</html>