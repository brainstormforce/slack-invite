<html>
<head>
	<script src="assets/js/jquery-1.11.3.min.js" ></script>
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
				<tr>
						<td><label class="control-label">Enter Email :</label></td>
						<td><input class="form-control" type="text" name="email"></td>
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
	$useremail = $_POST['email'];
	$sql='';
	try{
		$conn = new PDO("mysql:host=$db_server;dbname=$db_nm", "$db_user", "$db_pass");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = $conn->prepare('INSERT INTO `user_admin`(`user_name`, `passwd`, `email`) VALUES ( :username, :passwd, :email)');
		if($username !=''||$pass != ''|| $email !=''){
		if($sql->execute( array(':username'=> $username, ':passwd'=> $pass, ':email'=>$useremail) )){
			echo "User admin added successfully";
			?>
			<script>
			
				var username ='<?php echo $username;?>';
				var pass = '<?php echo $pass; ?>';
				var email = '<?php echo $useremail; ?>';
				jQuery('.save').load('../functions/MailToadmin.php', {user:username,pass:pass,email:email});
				window.location.href = "index.php";
			
			</script>
			<?php }
			else{
					echo "User could not be added";
				} 
			}
		else{
			echo "Please enter all fields";
		}
	}
	catch(PDOException $e)
    {
    	echo  "<br>" . $e->getMessage();
    }

}
?>