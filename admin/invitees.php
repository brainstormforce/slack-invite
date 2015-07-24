<?php
session_start();
	$data;

//	include '../functions/connections.php';
	include 'adminfunctions/header.php';
	try {
		//myconn();
		$sql = 'SELECT *   FROM members';
		$sql_slack = 'SELECT *   FROM  slack_settings';
		$q = $conn->query($sql); //select rows
		$q_slack = $conn->query($sql_slack);
		$q_slack->setFetchMode(PDO::FETCH_ASSOC); //retrieve in resultset $q_slack
		$q->setFetchMode(PDO::FETCH_ASSOC); //retrieve in resultset $q
		
	}
	catch(PDOException $e) {
		echo $e->getMessage();
	}
?>
<html>
<head><title>Available Users</title>
	<link rel="stylesheet" href="../assets/css/style.css" >
	<link rel="stylesheet" href="../assets/css/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/css/tablestyle.css" >
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
	<script src="../assets/js/jquery-1.11.3.min.js"></script>
	<script src="../assets/js/invitees.js"></script>
</head>
<body class="maincontainer">
	<div class="container" >
			<?php 
			$slc=$q_slack->fetch();
			 $url=$slc['url'];
			 $token=$slc['token'];
			
				if(isset($_SESSION['login_user'])){
				
			?>
			<div class="headings">
				<h1>Available users</h1>
				<h5>List of invitees is shown below and you can send invitation or delcine a member</h5>
			</div>
		<form method="post" name="invite" class="invite_form">
			<input type="hidden" name="url" class="slc_url" value="<?php echo $url; ?>">
			<input type="hidden" name="token" class="slc_token" value="<?php echo $token; ?>">
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
					<?php $member_id=  htmlspecialchars($r['member_id']);?>
						<tr id="<?php echo $member_id; ?>" class="rowp">
							<td class="manage-column convert-plug"><?php echo htmlspecialchars($r['name']);?></td>
							<td><?php echo htmlspecialchars($r['email']); ?></td>
							<td><?php echo htmlspecialchars($r['about']); ?></td>
							<td><?php echo htmlspecialchars($r['contact']); ?></td>
							
							<td>
								<?php 
								$status=htmlspecialchars($r['status']);
								$email=htmlspecialchars($r['email']);
								if($status=='invited'){
									echo"<i class='fa fa-check-square-o'></i> Invited";
								}
								else if($status == 'already_in_team' ){
							
									echo"<i class='fa fa-check-square-o'></i> Invited";
								}
								else if($status == 'already_invited' ){
									
									echo"<i class='fa fa-check-square-o'></i> Invited";
								}
								else if($status == 'declined' ){
									
									echo "<i class='fa fa-ban'></i> Declined";
									//echo "<button type='submit' class='btn btn-default send_invitation' name='invitebtn' value=".htmlspecialchars($r['email'])."> Invite</button>";
								}
								else{
									echo "<div class='".$member_id." status '>
									<button type='submit' class='btn btn-default send_invitation' name='invitebtn' value=".$email."> <i class='fa fa-check-circle'></i></button>";
									echo "<button type='button' class='btn btn-default decline' name='declinebtn' value=".$email." > <i class='fa fa-ban'></i></button></div>";
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
