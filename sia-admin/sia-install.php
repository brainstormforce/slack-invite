<?php
require("sia-constants.php");
if(isset($_POST['servername']) && !empty($_POST['servername']) && isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['dbname']) && !empty($_POST['dbname'])){
	$set_up = $sia_obj->database_connection_setup($_POST['dbname'],$_POST['username'],$_POST['password'],$_POST['servername']);
	//header("Location: sia-install-result.php");
}else{
	//header("Location: sia-install.php?conerr=yes");
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
	<?php
	if(check_install_complete() == false && !isset($_GET['conerr'])){
	?>
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
					<input class="form-control" type="text" placeholder="Database Name" name="dbname" required>
				</div>
				
				<div class="form-group">
					<input class="form-control" placeholder="Database Username" type="text" name="username" required>
				</div>
				<div class="form-group">
					<input class="form-control" placeholder="Database Password" type="text" name="password">
				</div>
				<div class="form-group">
					<input class="form-control" placeholder="Database Hostname" type="text" name="servername" required>
				</div>
				<div class="form-group">
					<input id="login-button" class="form-control" type="submit" name="save">
				</div>
			</form>
		</div>
	<?php
	}else if(isset($_GET['conerr']) && !empty($_GET['conerr'])){
	?>
	<div class="add-data-basefull-width-error">
		<div class="error_image">
			<img src="assets/img/avatars/connecting-cables.jpg"/>
		</div>
		<h1>Error establishing a database connection</h1>
		<hr></hr>
		<p>This either means that the username and password information in your <code>sia-config.php</code> file is incorrect or we can't contact the database server at <code>localhost</code>. This could mean your host's database server is down.</p>
		<ul style="color:#646464;list-style: outside none none;margin-bottom: 33px;">
			<li>Are you sure you have the correct username and password?</li>
			<li>Are you sure that you have typed the correct hostname?</li>
			<li>Are you sure that the database server is running?</li>
		</ul>
		<p>If you're unsure what these terms mean you should probably contact your host. If you still need help you can always visit the <a href="https://www.brainstormforce.com/contacts/" target="_blank">Brainstorm Force Support</a>.</p>
		<p></p>
		<p class="step"><a href="sia-install.php" class="button button-large">Try again</a></p>
	</div>
	<?php
	}else{
	?>
		<div class="add-data-basefull-width-error">
			<h1>Already Installed</h1>
			<hr></hr>
			<p>You appear to have already installed Stackinvite Application. To reinstall please clear your old database tables first.</p>
			<p class="step"><a href="index.php" class="button button-large">Log in</a></p>
		</div>
	<?php
	}
	?>
</body>
</html>