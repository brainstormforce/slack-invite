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
		header("location: setadmin.php");
	}
	else{
		header("location: index.php");
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

//require("../functions/main_functions.php");
//$si_db_obj = new dbfunctions();
$set_up = $si_db_obj->create_basic_set_up();
if($set_up == "success"){
	header("Location: add-database.php");
}else{
	echo "Wrong Details provided";
}
//$sql = '';
/*try {
    $conn = new PDO("mysql:host=$servername", $username, $password);   

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "CREATE DATABASE IF NOT EXISTS  $dbname";
            
            // use exec() because no results are returned
            if($conn->exec($sql)){
                echo "Database created/available<br>";
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                
                //creating members Table
                $sqlmember = "CREATE TABLE members (
                    member_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
                    name VARCHAR(30) NOT NULL,
                    email VARCHAR(50) NOT NULL,
                    about VARCHAR(100) ,
                    contact VARCHAR(12),
                    status  CHAR(25)
                )";
            
                if ($conn->query($sqlmember) ) {
                    //echo "Table  created for members successfully<br>";
                } else {
                    //echo "Error creating table members<br>" ;
                }

                //creating table for Notification emails
                $sqlnotification="CREATE TABLE IF NOT EXISTS notification_emails(
                    e_id int(3) AUTO_INCREMENT PRIMARY KEY,
                    name VARCHAR(30) NOT NULL,
                    email VARCHAR(50) NOT NULL,
                    status  CHAR(5)
                    )";
            
                 if ($conn->query($sqlnotification)) {
                   // echo "Table created for notification emails created successfully<br>";
                } else {
                   // echo "Error creating table notifications<br>" ;
                }
            
                //creating table for Slack setting
                    $sqlsettings="CREATE TABLE IF NOT EXISTS slack_settings(
                    id int(3) AUTO_INCREMENT PRIMARY KEY,
                    name VARCHAR(30) NOT NULL,
                    url VARCHAR(150) NOT NULL,
                    token  CHAR(100),
                    status CHAR(10)
                    )";
            
                 if ($conn->query($sqlsettings) ) {
                    //echo "Table created for settings successfully<br>";
                } else {
                   // echo "Error creating table for Settings<br> " ;
                }
            
                //creating table for user admin
                 $sqladmin="CREATE TABLE IF NOT EXISTS user_admin(
                    user_id int(3) AUTO_INCREMENT PRIMARY KEY,
                    user_name VARCHAR(30) NOT NULL,
                    passwd VARCHAR(10) NOT NULL,
                    email varchar(30) NOT NULL
                    )";
            
                 if ($conn->query($sqladmin) ) {
                   // echo "Table created for Admin successfully<br>";?>
                    <form action="create_connection.php" method="POST" style="display:none;" id="post_admin_details">
                        <input type="hidden" name="dbname" id="dbname" value="<?php echo $dbname; ?>"/>
                        <input type="hidden" name="pass" id="pass" value="<?php echo $password; ?>"/>
                        <input type="hidden" name="user" id="user" value="<?php echo $username; ?>"/>
                        <input type="hidden" name="servername" id="servername" value="<?php echo $servername; ?>"/>
                    </form>
                    <script>
                        document.getElementById("post_admin_details").submit();
                        //window.location.href = "setadmin.php?dbname="+dbname+"&pass="+pass+"&user="+usr+"&servername="+servername;
                    </script>
               <?php } else {
                    echo "Error creating table for admin <br>" ;
                }
                }

    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;*/
}

?>
	<div class="add-data-basefull-width">
		<div class="bg-primary1">
			<i class="fa fa-database"></i><h3 class="block-title-db">Please Add Database Details</h3> 
		</div>
		<br>
		<form action='' method="post" class="form-control ">
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