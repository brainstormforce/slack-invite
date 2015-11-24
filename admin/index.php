<?php
   session_start();
   //include 'header.php';

   $filepath = "../functions/connections.php";
   if(file_exists($filepath)){
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
   <body class="login-index">
      <div class="full-width">
         <div class="bg-primary">
            <ul class="block-options">Forgot Password?</ul>
            <h3 class="block-title">Login</h3>
         </div>
         <div class="block-content block-content-full block-content-narrow">
            <h1 class="form-heading">OneUI</h1>
            <p>Welcome, please login.</p>
            <div class="form-material form-material-primary floating">
               <form class="form-horizontal" action="adminfunctions/profile.php" method="post">
                  <div class="form-group">
                     <input class="form-control" name="username" type="text">  
                     <label class="control-label">UserName </label> 
                  </div>
                  <div class="form-group">
                     <input class="form-control" name="password" type="password">
                     <label class="control-label">Password</label>
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
   </body>
   <?php }else{
   header('Location:add-database.php');
} ?>
</html>