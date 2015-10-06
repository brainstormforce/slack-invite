<?php
session_start();
//include 'header.php';
if(isset($_SESSION['login_user'])){
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
</head>
<body>
	<div class="container" style="text-align:center;width:50%;">
		<h1>Enter Login Credentials</h1>
		<div class="row">
			<form class="form-horizontal" action="adminfunctions/profile.php" method="post">
				<div class="form-group">
					<label class="col-sm-2 control-label">UserName :</label>
					<div class="col-sm-10">
						<input class="form-control" name="username" placeholder="username" type="text">
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label">Password:</label>
					<div class="col-sm-10">
						<input class="form-control" name="password" placeholder="**********" type="password">
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<input class="btn btn-default" name="submit" type="submit" value=" Login ">
					</div>
				</div>
				
			</form>
		</div>
	</div>
</body>
</html>