<html>
<head>
	<!--<link rel="stylesheet" href="../../assets/css/style.css" >-->
</head>
<body>
<?php
session_start();
require_once ( '../functions/connections.php' );

if(isset($_SESSION['login_user'])){
echo "<div class='menu'>
	<ul><a href='".$URL."/admin/settings.php'><li>Settings</li></a>
	<a href='".$URL."/admin/invitees.php'><li>Database</li></a>
	<a href='".$URL."/admin/adminfunctions/logout.php'><li>Logout</li></a>";
	echo"</ul></div>";
}

?>
</body>
</html>