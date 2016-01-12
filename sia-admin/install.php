<?php
require("constants.php");
if(isset($_POST['servername']) && !empty($_POST['servername']) && isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['dbname']) && !empty($_POST['dbname'])){
	$set_up = $sia_obj->database_connection_setup($_POST['dbname'],$_POST['username'],$_POST['password'],$_POST['servername']);
	header("Location: chk_install.php");
}else{
	//header("Location: install.php?conerr=yes");
}
?>
<html>
<head>
    <title>Add Database</title>
      <link rel="stylesheet" type="text/css" href="assets/css/formcss.css">
      <link rel="stylesheet" href="assets/css/style.css" >
     <link rel="stylesheet" href="assets/css/font-awesome/css/font-awesome.min.css" />
</head>

<body class="login-index">
	<div class="add-data-basefull-width">
		<div class="bg-primary1">
			<i class="fa fa-database"></i><h3 class="block-title-db">Please Add Database Details</h3> 
		</div>
		<br>
		<form action='' method="post" class="form-control ">
			<?php if(isset($_GET['conerr']) && !empty($_GET['conerr']) && $_GET['conerr'] == "yes"){
				?>
				<p style="color:red">Unable to install, Please provide correct credentials.</p>
				<?php
			}
			?>
			<div class="form-group">
				<input class="form-control" placeholder="Host name" type="text" name="servername" required>
			</div>
			<div class="form-group">
				<input class="form-control" placeholder="User Name" type="text" name="username" required>
			</div>
			<div class="form-group">
				<input class="form-control" placeholder="password" type="text" name="password">
			</div>
			<div class="form-group">
				<input class="form-control" type="text" placeholder="Database Name" name="dbname" required>
			</div>
			<div class="form-group">
				<input id="login-button" class="form-control" type="submit" name="save">
			</div>
		</form>
	</div>
</body>
</html>