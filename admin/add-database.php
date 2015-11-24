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
    <h3>Please Create Database</h3>
    <table widh="200">
        
        <form action='' method="post" class="form-control   ">
         <tr>   <div class="form-group">
        
            <td>    <label class="control-label">Host</label></td>
             <td>       <input class="form-control" placeholder="Host name" type="text" name="servername"></td>
            </div>
        </tr>
        <tr>
            <td><div class="form-group">
                <label class="control-label">Enter User Name</label></td>
                <td>   <input class="form-control" placeholder="User Name" type="text" name="username"></td>
            </div>
        </tr>
        <tr> 
            <td><label class="control-label">enter Password</label></td>
            <td>    <input class="form-control" placeholder="password" type="text" name="password"></td>
        </tr>
        <tr>    
            <td><label class="control-label">Enter database Name</label></td>
            <td>    <input class="form-control" type="text" placeholder="Database Name" name="dbname"></td>
        </tr>
        <tr style="text-align:center;">
            <div class="form-group">
               <td colspan="2" style="padding-top:15px;"><input class="form-control" type="submit" name="save"></td>
            </div>
        </tr>
            
        </form>
    </table>
</body>
</html>