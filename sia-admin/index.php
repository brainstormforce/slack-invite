<?php
require("constants.php");
if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])){
	$chk = $sia_obj->chk_login($_POST['username'],$_POST['password']);
	if($chk == "done" ){
		header("Location: dashboard.php");
	}else{
		header("Location: index.php?err=err");
	}
}

if(check_install_complete() == false){
	header("Location: install.php");
	die;
}
if(mysqli_connect_errno() >0 || check_install_complete() == false){
	header("Location: chk_install.php");
}
if($sia_obj->chk_tables() == "nou"){ header("Location: create_admin.php"); }
if($sia_obj->chk_tables() == false){ header("Location: chk_install.php"); }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login For Admin</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="<?php echo BASE_PATH;?>assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo BASE_PATH;?>assets/css/style.css" >
		<link rel="stylesheet" href="<?php echo BASE_PATH;?>assets/css/font-awesome/css/font-awesome.min.css" />
	</head>
	<body class="login-index-add-db-data">
		<div class="full-width">
			<div class="bg-primary">
				<ul class="block-options">Forgot Password?<a href="#"><i class="fa fa-user-plus"></i></a></ul>
				<h3 class="block-title">Login</h3>
			</div>
			<div class="block-content block-content-full block-content-narrow">
				<?php
				if(isset($_GET['err']) && !empty($_GET['err']) && $_GET['err'] =="err"){
				?>
				<p style="color:red;padding:0 6px;">Credentials are wrong.</p>
				<?php
				}
				?>
				<h1 class="form-heading" style="padding:0 6px;">OneUI</h1>
				<p style="padding:0 6px;">Welcome, please login.</p>
				<div class="form-material form-material-primary floating">
					<form class="form-horizontal" action="" method="post">
						<div class="form-group">
							<input class="form-control" name="username" type="text" placeholder="User Name" style="float:left;position:relative;margin:0;" required/>
							<!--<label class="control-label">UserName </label>-->
						</div>
						<div class="form-group">
							<input class="form-control" name="password" type="password" placeholder="Password" style="float:left;position:relative;margin:0;" required/>
							<!--<label class="control-label">Password</label>-->
						</div>
						<div class="switch" style="bottom:0;margin-left:7px;">
							<span style="margin-left:70px;float:left;">Remember Me?</span>
							<input id="cmn-toggle-1" class="cmn-toggle cmn-toggle-round" type="checkbox" />
							<label for="cmn-toggle-1"></label>
						</div>
						
						<div class="form-group">
							<div class="loginbutton">
								<input class="login-button" name="submit" type="submit" value=" Login " style="margin:0;"/>
								<i class="fa fa-sign-in"></i>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>