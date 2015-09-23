<html>
<head>
	<!--<link rel="stylesheet" href="../../assets/css/style.css" >-->
</head>
<body>
<?php
//session_start();
require_once ( '../functions/connections.php' );

if(isset($_SESSION['login_user'])){
echo "<div class='menu'>
	<ul>
	<li><a href='/admin/adminfunctions/logout.php'>Logout</a></li>";
	echo"</ul></div>";
}

?>
</body>
</html>
