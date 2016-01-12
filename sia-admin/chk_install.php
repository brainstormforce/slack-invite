<html>
<head>
    <title>SIA > Error</title>
    <link rel="stylesheet" type="text/css" href="assets/css/formcss.css">
    <link rel="stylesheet" href="assets/css/style.css" >
    <link rel="stylesheet" href="assets/css/font-awesome/css/font-awesome.min.css" />
</head>
<body class="login-index">
<?php
require("constants.php");
if(mysqli_connect_errno() >0){
	unlink("../sia-config.php");
?>



<div class="add-data-basefull-width-error">
	<h1>Error establishing a database connection</h1>
	<p>This either means that the username and password information in your <code>sia-config.php</code> file is incorrect or we can't contact the database server at <code>localhost</code>. This could mean your host's database server is down.</p>
	<ul>
		<li>Are you sure you have the correct username and password?</li>
		<li>Are you sure that you have typed the correct hostname?</li>
		<li>Are you sure that the database server is running?</li>
	</ul>
	<p>If you're unsure what these terms mean you should probably contact your host. If you still need help you can always visit the <a href="https://www.brainstormforce.com/">Brainstorm Force Support</a>.</p>
	<p></p>
		<p class="step"><a href="install.php" class="button button-large">Try again</a></p>
	
</div>
<?php
}else{
	$run = $sia_obj->create_basic_set_up();
?>
<div class="add-data-basefull-width-error">
	<h1 class="screen-reader-text">Successful database connection</h1>
	<p>All right, sparky! You've made it through this part of the installation. Slack Invite can now communicate with your database. If you are ready, time now to...</p>
	<p class="step"><a href="create_admin.php" class="button button-large">Run the install</a></p>
</div>
<?php
}
?>
</body>
</html>