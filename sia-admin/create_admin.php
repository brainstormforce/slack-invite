<?php
require("constants.php");
if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['userpname']) && !empty($_POST['userpname'])){
	$create_admin = $sia_obj->create_new_administrator($_POST['userpname'],$_POST['username'],$_POST['password'],$_POST['email']);
	header("Location: index.php");
}
?>
<html>
<head>
    <title>Add Database</title>
      <link rel="stylesheet" type="text/css" href="assets/css/formcss.css">
      <link rel="stylesheet" href="assets/css/style.css" >
     <link rel="stylesheet" href="assets/css/font-awesome/css/font-awesome.min.css" />
</head>

<body class="login-index">
	<div class="add-data-basefull-width">
		<div class="container">
			<div class="bg-primary1">
				<i class="fa fa-user-plus"></i><h3 class="block-title-user" >Create User</h3>
			</div>
			<p><b>Note :</b> Please enter the user name and password to create admin login</p>
			<div class="form">
				<form action='' method="post" class="form-control ">			   
					<div class="form-group">
						<input class="form-control" type="text" name="userpname" placeholder="Enter User Name " required/>
					</div>
					<div class="form-group">
						<input class="form-control" type="email" name="email" placeholder="Enter Email" required/>
					</div>
					<div class="form-group">
						<input class="form-control" type="text" name="username" placeholder="Enter Login Name " required/>
					</div>
					<div class="form-group">
						<input class="form-control" type="text" name="password" placeholder="Enter Password " required/>
					</div>
					
					<div>
						<input id="login-button" class="form-control" type="submit" name="save" value="Create User"/>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>