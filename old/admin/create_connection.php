<?php
$db_server = $_POST['servername'];
$db_nm = $_POST['dbname'];
$db_pass = $_POST['pass'];
$db_user=$_POST['user'];

if(!empty($db_server) && !empty($db_nm) && !empty($db_user) ){
$fp=fopen('../functions/connections.php','w');
fwrite($fp, '<?php
$conn = new PDO("mysql:host=localhost;dbname='.$db_nm.'", "'.$db_user.'", "'.$db_pass.'");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$host = $_SERVER["HTTP_HOST"];
if ($host == "localhost") {
	$URL = $_SERVER["HTTP_HOST"];
}?>
');
fclose($fp);	
header("Location: add_user");
}

?>
