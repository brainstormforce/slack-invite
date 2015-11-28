<html>
<head>
    <title>Add Database</title>
      <link rel="stylesheet" type="text/css" href="assets/css/formcss.css">
      <link rel="stylesheet" href="../assets/css/style.css" >
     <link rel="stylesheet" href="assets/css/font-awesome/css/font-awesome.min.css" />
</head>
<body class="login-index">
<?php
if(isset($_POST['save'])){    
$servername = $_POST['servername'];
$username = $_POST['username'];
$password = $_POST['password'];
$dbname = $_POST['dbname'];
$sql = '';
if($servername == ''){?>
    <script>
    window.location.href = "setadmin.php";
    </script>
<?php }
function storevariables($servername,$username,$password,$dbname){
    $staticDbServer = $servername;
    $staticDbUsername = $username;
    $staticDbPassword = $password;
    $staticDbName = $dbname;
}
storevariables($servername,$username,$password,$dbname);

try {
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
                    passwd VARCHAR(10) NOT NULL,
                    email varchar(30) NOT NULL
                    )";
            
                 if ($conn->query($sqladmin) ) {
                    echo "Table created for Admin successfully<br>";?>
                    <script>
                    var servername = "<?php echo $servername; ?>"
                    var dbname = "<?php echo $dbname; ?>";
                    var pass = "<?php echo $password; ?>";
                    var usr = "<?php echo $username; ?>";
                        window.location.href = "setadmin.php?dbname="+dbname+"&pass="+pass+"&user="+usr+"&servername="+servername;
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