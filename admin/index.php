<?php
session_start();
//include 'header.php';

$filepath = "../functions/connections.php";
if(file_exists($filepath)){
	require("../functions/main_functions.php");
	$si_db_obj = new dbfunctions();
	$tbl_count = $si_db_obj->chk_tables();
	if($tbl_count == false){
		header("location: add-database.php");
	}else if($tbl_count == "nou"){
		header("location: setadmin.php");
	}else{
		
	}
	if(isset($_SESSION['login_user'])){
		echo $_SESSION['login_user'];
		header("location:base_tables_datatables.php");
	}
?>
<!DOCTYPE html>
<html>
   <head>
      <title>Login For Admin</title>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="../assets/css/style.css" >
      <link rel="stylesheet" href="assets/css/font-awesome/css/font-awesome.min.css" />
   </head>
   <body class="login-index-add-db-data">
      <div class="full-width">
         <div class="bg-primary">
            <ul class="block-options">Forgot Password?<a href="#"><i class="fa fa-user-plus"></i></a></ul>
            <h3 class="block-title">Login</h3>
         </div>
         <div class="block-content block-content-full block-content-narrow">
            <h1 class="form-heading">OneUI</h1>
            <p>Welcome, please login.</p>
            <div class="form-material form-material-primary floating">
               <form class="form-horizontal" action="adminfunctions/profile.php" method="post">
                  <div class="form-group">
                     <input class="form-control" name="username" type="text" placeholder="User Name" required/>
                     <!--<label class="control-label">UserName </label>-->
                  </div>
                  <div class="switch">
                     <span>Remember Me?</span>
                     <input id="cmn-toggle-1" class="cmn-toggle cmn-toggle-round" type="checkbox" />
                     <label for="cmn-toggle-1"></label>
                  </div>
                  <div class="form-group">
                     <input class="form-control" name="password" type="password" placeholder="Password" required/>
                     <!--<label class="control-label">Password</label>-->
                  </div>
                  <div class="form-group">
                     <div class="loginbutton">
                        <input class="login-button" name="submit" type="submit" value=" Login ">
                        <i class="fa fa-sign-in"></i>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   <script>
   jQuery('.form-horizontal .form-control').on('input', function() {
      jQuery('.form-horizontal').toggleClass('open');    
   });
   </script>
   </body>

   <?php }else{
   header('Location:add-database.php');
} ?>
</html>