<?php
session_start();
	$data;

include '../functions/connections.php';
try {
	//myconn();
	$sql = 'SELECT *   FROM members'; 
	$q = $conn->query($sql); //select rows
	$q->setFetchMode(PDO::FETCH_ASSOC); //retrieve in resultset $q
	// for notification status
	/*$sqlntf='select notifications from user_admin';
	$ntf = $conn->query($sqlntf);
	$ntf->setFetchMode(PDO::FETCH_ASSOC);
	*/
}
catch(PDOException $e) {
	echo $e->getMessage();
}
?>
<html>
<head>
	<link rel="stylesheet" href="../css/style.css" >
	<link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/tablestyle.css" >
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<script src="../js/jquery-1.11.3.min.js"></script>
	<script src="../js/showDbjs.js"></script>
</head>
<body class="maincontainer">
	<div class="container" style="text-align:center;">
			<?php 
				if(isset($_SESSION['login_user'])){
				include 'header.php'
			?><h1>Available users</h1>
		<div class="adminnotification">Notifications:<span><button class="btnon">on</button><button class="btnoff">off</button></span></div>
		<form method="post" name="invite" class="invite_form">

			<table class="tablemain">
				<thead>
					<tr class="column-provider">
						<th ><span><i class="fa fa-user"></i></span>First Name</th>
						<th><span><i class="fa fa-envelope-o"></i></span>Email</th>
						<th><span><i class="fa fa-user-secret"></i></span>About Member</th>
						<th><span><i class="fa fa-phone"></i></span>Contact</th>
						<th><span><i class="fa fa-check"></i></span>Status</th>
					</tr>
				</thead>
				<tbody class="smile-style-data">
					<?php while ($r = $q->fetch()):?>
						<tr>
							<td class="manage-column convert-plug"><?php echo htmlspecialchars($r['name']);?></td>
							<td><?php echo htmlspecialchars($r['email']); ?></td>
							<td><?php echo htmlspecialchars($r['about']); ?></td>
							<td><?php echo htmlspecialchars($r['contact']); ?></td>
							<td>
								<?php 
								$status=htmlspecialchars($r['status']);
								if($status == 'already_in_team' ){
									echo"<i class='sa fa-users'></i>";
								}
								else if($status == 'already_invited' ){
									echo"<i class='sa fa-check-square-o'></i>";
								}
								else if($status == 'declined' ){
									echo "<i class='sa fa-ban'></i>";
									//echo "<button type='submit' class='btn btn-default send_invitation' name='invitebtn' value=".htmlspecialchars($r['email'])."> Invite</button>";
								}
								else{
									echo "<button type='submit' class='btn btn-default send_invitation' name='invitebtn' value=".htmlspecialchars($r['email'])."> <i class='sa fa-check-circle'></i></button>";
									echo "<button type='button' class='btn btn-default decline' name='declinebtn' value=". htmlspecialchars($r['email'])." > <i class='sa fa-ban'></i></button>";
								}
								?>
							</td>
						</tr>
						<?php endwhile; ?>
				</tbody>
			</table>
		
		  
		</form>
	</div>
	<?php 
		$conn=null; }  //session if condition closes here
		else {
				echo "<div><h2>Please Login to view this page!!!!!!!!!!</h2>
					please go to login page!!<br>
					<div><a href='index.php'><input type='button' class='btn btn-default login' name='login' value='Login'></a></div>
				</div>";
			}
	?><!--############ Session consdition closes here ##########-->

	<!---######## Error section ##########-->
	
	<div class="row col-md-6 col-md-offset-3 aready_invited">
		<div class="alert alert-danger" role="alert">
			<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
			<span class="sr-only">Error:</span>
			Sorry you are already invited!
		</div>
	</div>
	<div class="row col-md-6 col-md-offset-3 already_in_team">
		<div class="alert alert-danger" role="alert">
			<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
			<span class="sr-only">Error:</span>
			Sorry you are already in Team!
		</div>
	</div>
	<div class="row col-md-6 col-md-offset-3 invited">
		<div class="alert alert-success" role="alert">
			All Ok Good to go >>
		</div>
	</div>
	<!--##########Error section ends here #########-->
	
</body>
</html>
