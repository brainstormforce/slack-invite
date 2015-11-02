<html>
<head>
    <title>Create Database</title>
    <link rel="stylesheet" type="text/css" href="assets/css/formcss.css">
</head>
<body>
<?php
if(isset($_POST['save'])){    
$servername = $_POST['servername'];
$username = $_POST['username'];
$password = $_POST['password'];
$sql = '';
try {
    $conn = new PDO("mysql:host=$servername", $username, $password);   
    // set the PDO error mode to exception
    $dbname = 'slack_invite2';
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "CREATE DATABASE $dbname";
            // use exec() because no results are returned
            if($conn->exec($sql)){
                echo "Database created successfully<br>";
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
                    echo "Table  created for members successfully<br>";
                } else {
                    echo "Error creating table members<br>" ;
                }

                //creating table for Notification emails
                $sqlnotification="CREATE TABLE notification_emails(
                    e_id int(3) AUTO_INCREMENT PRIMARY KEY,
                    name VARCHAR(30) NOT NULL,
                    email VARCHAR(50) NOT NULL,
                    status  CHAR(5)
                    )";
                 if ($conn->query($sqlnotification)) {
                    echo "Table created for notification emails created successfully<br>";
                } else {
                    echo "Error creating table notifications<br>" ;
                }
                //creating table for Slack setting
                    $sqlsettings="CREATE TABLE slack_settings(
                    id int(3) AUTO_INCREMENT PRIMARY KEY,
                    name VARCHAR(30) NOT NULL,
                    url VARCHAR(150) NOT NULL,
                    token  CHAR(100),
                    status CHAR(10)
                    )";
                 if ($conn->query($sqlsettings) ) {
                    echo "Table created for settings successfully<br>";
                } else {
                    echo "Error creating table for Settings<br> " ;
                }
                //creating table for user admin
                 $sqladmin="CREATE TABLE user_admin(
                    user_id int(3) AUTO_INCREMENT PRIMARY KEY,
                    user_name VARCHAR(30) NOT NULL,
                    passwd VARCHAR(10) NOT NULL
                    )";
                 if ($conn->query($sqladmin) ) {
                    echo "Table created for Admin successfully<br>";?>
                    <script>
                        window.location.href = "setadmin.php";
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

$conn = null;
}
?>
    <h3>Please Create Database</h3>
    <form action='' method="post" class="form-control   ">
        <div class="form-group">
        <label class="control-label">Enter server Name</label>
            <input class="form-control" type="text" name="servername">
        </div>
        <div class="form-group">
        <label class="control-label">Enter User Name</label>
            <input class="form-control" type="text" name="username">
        </div>
        <label class="control-label">enter Password</label>
            <input class="form-control" type="text" name="password">
        <div>
            <input class="form-control" type="submit" name="save">
        </div>
    </form>
</body>
</html>