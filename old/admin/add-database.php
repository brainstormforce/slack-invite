<html>
<head>
    <title>Add Database</title>
      <link rel="stylesheet" type="text/css" href="assets/css/formcss.css">
      <link rel="stylesheet" href="../assets/css/style.css" >
     <link rel="stylesheet" href="assets/css/font-awesome/css/font-awesome.min.css" />
</head>
<body class="login-index">
<?php

$filepath = "../functions/connections.php";

if(file_exists($filepath)){
require("../functions/main_functions.php");
$si_db_obj = new dbfunctions();	
	$tbl_count = $si_db_obj->chk_tables();
	if($tbl_count == false){
	}else if($tbl_count == "nou"){
		header("location: add_user");
	}
	else{
		header("location: login");
	}
}

if(isset($_POST['save']) && isset($_POST['servername']) && !empty($_POST['servername']) && isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['dbname']) && !empty($_POST['dbname'])){
	$fp=fopen('../functions/connections.php','w');
	fwrite($fp, '<?php
	try {
		$conn = new PDO("mysql:host='.$_POST['servername'].';dbname='.$_POST['dbname'].'", "'.$_POST['username'].'", "'.$_POST['password'].'");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$host = $_SERVER["HTTP_HOST"];
		if ($host == "localhost") {
			$URL = $_SERVER["HTTP_HOST"];
		}
	}
	catch(PDOException $e) {
		echo $e->getMessage();
	}
	?>
	');
	fclose($fp);
	if(!isset($si_db_obj)){
		require("../functions/main_functions.php");
		$si_db_obj = new dbfunctions();
	}

	$set_up = $si_db_obj->create_basic_set_up();
	if($set_up == "success"){
		header("Location: add-database.php");
	}else{
		echo "Wrong Details provided";
	}
}

?>
	<div class="add-data-basefull-width">
		<div class="bg-primary1">
			<i class="fa fa-database"></i><h3 class="block-title-db">Please Add Database Details</h3> 
		</div>
		<br>
		<form action='' method="post" class="form-control ">
			<?php if(isset($_GET['conerr']) && !empty($_GET['conerr']) && $_GET['conerr'] == "yes"){
				?>
				<p style="color:red">Unable to install, Please provide correct credentials.</p>
				<?php
			}
			?>
			<div class="form-group">
				<input class="form-control" placeholder="Host name" type="text" name="servername" required>
			</div>
			<div class="form-group">
				<input class="form-control" placeholder="User Name" type="text" name="username" required>
			</div>
			<div class="form-group">
				<input class="form-control" placeholder="password" type="text" name="password">
			</div>
			<div class="form-group">
				<input class="form-control" type="text" placeholder="Database Name" name="dbname" required>
			</div>
			<div class="form-group">
				<input id="login-button" class="form-control" type="submit" name="save">
			</div>
		</form>
	</div>
</body>
</html>