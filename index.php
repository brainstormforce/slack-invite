<?php
if(file_exists("sia-config.php")){//about_yourself
	require("sia-config.php");
	require("sia-admin/classes/db.php");
	require("sia-admin/classes/sia-db-queries.php");
	$sia_obj = new db_queries();
	if(isset($_POST['fname']) && !empty($_POST['fname']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['contact']) && !empty($_POST['contact'])){
		$sia_obj ->add_new_request($_POST['fname'],$_POST['email'],$_POST['about_yourself'],$_POST['contact']);
		header("Location: index.php?done=yes");
	}
?>
<html>
	<head>
		<title>Register With Slack</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="sia-admin/assets/bootstrap/css/bootstrap.min.css"></link>
		<link rel="stylesheet" href="sia-admin/assets/css/style.css" ></link>
	</head>

	<body>
		<div class="container " style="">
			<?php if(!isset($_GET['done']) && empty($_GET['done'])){ ?>
			<div class="row">
				<div class="col-md-12" style="text-align:center;">
					<img class="logo" src="sia-admin/assets/img/logo.png" />
				</div>
			</div>
			<div class="row subcontainerindex">
				<h2>Register Here</h2>
				<form  role="form" action="" class="registerform" method="post">
					<div class="form-group">
						<input type="text" class="form-control member_name" name="fname" id="name" placeholder="Name" required>	
					</div>
					<div class="form-group">
						<input type="email" class="form-control email" name="email" id="email" placeholder="Email" required>
					</div>
					<div class="form-group">
						<textarea  class="form-control about_yourself"  name="about_yourself" id="about_yourself" rows="3" placeholder="Tell Us More About yourself" ></textarea>
					</div>
					<div class="form-group">
						<input type="number" class="form-control contact" name="contact" id="contact_no" placeholder="Your contact" required>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-default">submit</button>
					</div>		
				</form>
			</div>	
			<?php } else if(isset($_GET['done']) && !empty($_GET['done']) && $_GET['done']=="yes"){ ?>
			<div class="alert alert-info" role="alert" style="display:block;">
				<h3>your entry submitted</h3>
				<h6><a href="index.php">Another Regitration ?..</a></h6>
			</div>
			<?php } ?>
			<div class="alert alert-danger" role="alert">
				<h3>your entry could not be submitted please try again later</h3>
			</div>
			<div class="mailcontent" style="display:none;"></div>
		</div>	

	</body>
</html>

<?php
}else{
	header("Location: sia-admin/install.php");
}
?>