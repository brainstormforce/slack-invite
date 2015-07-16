<html>
<head>
	<link rel="stylesheet" href="css/style.css" >
</head>
<body>
<?php
if(isset($_SESSION['login_user'])){
echo "<div class='menu'>
	<ul><a href='/settings.php'><li>Settings</li></a>
	<a href='http://localhost/slack-invite-integration/admin/showDb.php'><li>Database</li></a>;
	<a href='http://localhost/slack-invite-integration/admin/logout.php'><li>Logout</li></a>";
	echo"</ul></div>";
}

?>
</body>
</html>
