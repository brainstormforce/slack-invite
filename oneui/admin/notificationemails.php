<?php include 'includeRequired.php';?>
	<?php if(isset($_SESSION['login_user'])){ 
		include 'adminfunctions/header.php';
	?>
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/datatables/jquery.dataTables.min.css">
	<div class="wrapper">
	<div class="subcontainer" >
	<div class="table-form-content">

<!---##### Notification emails Setting starts here #####-->
	<div class="content bg-gray-lighter available_Notification_emails">
    <div class="row items-push">
        <div class="col-sm-7">
			<h2 class="page-heading">Email Notifications</h2>
			<medium>Get notifications on each new invite application.</medium>
        </div>
			<div class="block-content">
				<div class="email_settings" ><!-- ### Hidden Block one display on display button click ####-->
		<div >
		<form class="email_form form-inline" role="form"  method="post">
		<table >
			<tr>
				<td>
				<div class="form-group">
					<input type="text" class="form-control name"  name="name" placeholder="Add Name" required>
				</div>
				</td>
			<td>
				<div class="form-group">
					<input type="email" class="form-control email"  name="notification_email" placeholder="Add another email" required>
				</div>
			</td>
			<td>
				<div class="form-group">
					<input type="submit" class="btn btn-default " id="exampleinput2" name="add_notification_email" value="Add Email">
				</div>
			</td>	
			</tr>
		</table>
		</form>
		</div>
	</div>
			<?php 
			// This file will be called from settings.php
			//display notification email ids with status
			
			try{		
					echo"<form method='post' name='notificationform'>
					<table class='tablemain table table-striped table-vcenter table-header-bg'><thead><tr class='column-provider'><th>Name</th><th>Email</th><th>status</th><th>Action</th></tr></thead>
					";
					
					$sqlon="select * from `notification_emails` ";
					$rs=$conn->query($sqlon);
					$rs->setFetchMode(PDO::FETCH_ASSOC);
					while($result=$rs->fetch()){
						$name=$result['name'];
						$email=$result['email'];
						$status=$result['status'];
						echo "<tbody>
						<tr>	
						<td>".$name."</td>
						<td >".$email."</td>
						<td>";
						// Display emails with  on status
						if($status=='on'){
							echo"<div class='switch_options'>
								<span class='switch_enable'> ON </span>
								<span class='switch_disable'> OFF </span>
								<input type='hidden' class='switch_val' value='1'/>
								<input type='hidden' class='email_val' value=".$email."/>
							</div>";
						}
						// Display emails with off status 
						else{
							echo "<div class='switch_options'>
								<span class='switch_enable'> ON </span>
								<span class='switch_disable'> OFF </span>
								<input type='hidden' class='switch_val' value='0'/>
								<input type='hidden' class='email_val' value=".$email."/>
							</div>";					
						}
						echo"</td><td><input class='delete_email' type='checkbox' value='".$email."'> Delete</td>
					</tr></tbody>";
					/*<td><div class='delete_email' value='".$email."'><i class='fa fa-trash-o '> </i>Delete</td>*/
					}
					
					echo "</table></form> </div>";
				}catch(PDOException $e){echo $e;}
		?><!-- notification emails and status will be displayed -->
	</div>
	<?php  
	}else
	{
		echo "<div><h2>Please Login to view this page!!!!!!!!!!</h2>
			please go to login page!!<br>
			<div><a href='index.php'><input type='button' class='btn btn-default login' name='login' value='Login'></a></div>
		</div>";
	}?>
</div>
<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>
<?php require 'inc/views/template_footer_end.php'; ?>