<html>
<head>
	<title>
	</title>
	<link rel="stylesheet" type="text/css" href="assets/css/formcss.css">
</head>
<body>
	<div class="container">
		<div class="heading">
			<h3>Please enter the user name and password to create admin login</h3>
		</div>
		<table widh="200">
			<div class="form">
				<tbody>
				<tr>
					 <form action='' method="post" class="form-control   ">
				    
				       	<div class="form-group">
				        <td><label class="control-label">User Name :</label></td>
				        <td><input class="form-control" type="text" name="username"></td>
				        </div>
				</tr>
				<tr>
					    <td><label class="control-label">Enter Password :</label></td>
					    <td><input class="form-control" type="text" name="password"></td>
				</tr>
				<tr style="text-align:center;">
					    <div>
						       <td colspan="2" style="padding-top:15px;"><input class="form-control" type="submit" name="save"></td>
					    </div>
					</form>
				</tr>
				</tbody>
			</div>
	</table>
	</div>
</body>
</html>
<?php 

$db_server = $_GET['servername'];
$db_nm = $_GET['dbname'];
$db_pass = $_GET['pass'];
$db_user=$_GET['user'];

$fp=fopen('../functions/connections.php','w');
fwrite($fp, '<?php
$conn = new PDO("mysql:host=localhost;dbname='.$db_nm.'", "'.$db_user.'", "'.$db_pass.'");
$host = $_SERVER["HTTP_HOST"];
if ($host == "localhost") {
	$URL = $_SERVER["HTTP_HOST"];
}?>
');
fclose($fp);

if(isset($_POST['save'])){
	$username = $_POST['username'];
	$pass = $_POST['password'];
	$sql='';
	try{
		$conn = new PDO("mysql:host=$db_server;dbname=$db_nm", "$db_user", "$db_pass");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = $conn->prepare('INSERT INTO `user_admin`(`user_name`, `passwd`) VALUES ( :username, :passwd)');

		if($sql->execute( array(':username'=> $username, ':passwd'=> $pass) )){
			echo "User admin added successfully";

		}
		else{
			echo "User could not be added";?>
			<script>
			window.href='oneui/admin/index.php';
			</script>
		<?php }
	}
	catch(PDOException $e)
    {
    	echo $sql . "<br>" . $e->getMessage();
    }

}
?>