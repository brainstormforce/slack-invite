<html>
<head>
	<link rel="stylesheet" href="css/style.css" >
</head>
<body>
<?php
echo "<div class='menu'><ul><a href='http://slackinvite.dev/admin/index.php'><li>Home</li></a><a href='http://slackinvite.dev/admin/showDb.php'><li>Database</li></a>";
if(isset($_SESSION['login_user'])){
	echo"<a href='admin/logout.php'><li>Logout</li></a>";
}
echo"</ul></div>";
?>
</body>
</html>
