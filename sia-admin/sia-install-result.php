<html>
<head>
    <title>SIA > Error</title>
    <link rel="stylesheet" type="text/css" href="assets/css/formcss.css">
    <link rel="stylesheet" href="assets/css/style.css" >
    <link rel="stylesheet" href="assets/css/font-awesome/css/font-awesome.min.css" />
</head>
<body class="login-index">
<?php
require("sia-constants.php");
if(mysqli_connect_errno() >0 || check_install_complete() == false){
	//if(check_install_complete()){ //unlink("../sia-config.php"); }
	
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
		<!--<p class="step"><a href="sia-install.php" class="button button-large">Try again</a></p>-->
	
</div>
<?php
}else{
	if($sia_obj->chk_tables() == "send_to_login"){
		header("Location: index.php");
	}else{
		$run = $sia_obj->create_basic_set_up();
		header("Location: sia-user.php");
	}
	
?>
<div class="add-data-basefull-width-error">
	<h1 class="screen-reader-text">Successful database connection</h1>
	<hr></hr>
	<p>All right, sparky! You've made it through this part of the installation. Slack Invite can now communicate with your database. If you are ready, time now to...</p>
	<p class="step"><a href="sia-user.php" class="button button-large">Run the install</a></p>
</div>
<?php
}
?>
</body>
</html>