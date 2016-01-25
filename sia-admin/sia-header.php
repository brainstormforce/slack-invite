<?php
require 'sia-constants.php'; 
if(check_install_complete() == false){
	header("Location: sia-install.php");
}
if($sia_obj->chk_tables() == false){
	header("Location: sia-install-result.php");
}
if($sia_obj->chk_tables() == "nou"){ header("Location: sia-user.php"); }
if(!isset($_SESSION['login_user'])){ header("Location: index.php"); }

/*if(mysqli_connect_errno() >0){
?>
<div class="add-data-basefull-width-error">
	<h1>Error establishing a database connection</h1>
	<hr></hr>
	<p>This either means that the username and password information in your <code>sia-config.php</code> file is incorrect or we can't contact the database server at <code>localhost</code>. This could mean your host's database server is down.</p>
	<ul>
		<li>Are you sure you have the correct username and password?</li>
		<li>Are you sure that you have typed the correct hostname?</li>
		<li>Are you sure that the database server is running?</li>
	</ul>
	<p>If you're unsure what these terms mean you should probably contact your host. If you still need help you can always visit the <a href="https://www.brainstormforce.com/contacts/" target="_blank">Brainstorm Force Support</a>.</p>
	<p></p>
</div>
<?php
die;
}*/
require 'inc/config.php';
require 'inc/views/sia-template-head-start.php';
require 'inc/views/sia-template-head-end.php'; 
require 'inc/views/sia-base-head.php'; 

?>
<head>
    <title>Add Database</title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_PATH; ?>assets/css/formcss.css"></link>
    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>assets/css/style.css"></link>
    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>assets/css/font-awesome/css/font-awesome.min.css"></link>
</head>