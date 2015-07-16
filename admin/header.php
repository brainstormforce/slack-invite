<html>
<head>
	<link rel="stylesheet" href="css/style.css" >
</head>
<body>
<?php

require_once ( '../functions/connections.php' );

echo $URL;

if(isset($_SESSION['login_user'])){
echo "<div class='menu'>
	<ul><a href='/settings.php'><li>Settings</li></a>
	<a href='".$URL."/admin/showDb.php'><li>Database</li></a>;
	<a href='".$URL."/admin/logout.php'><li>Logout</li></a>";
	echo"</ul></div>";
}

?>
</body>
</html>
