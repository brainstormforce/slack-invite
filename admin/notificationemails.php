<?php session_start();
if(isset($_SESSION['login_user'])){ 
		include 'adminfunctions/header.php';
		include 'includeRequired.php';
	?>

<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/datatables/jquery.dataTables.min.css">
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">
                Email Notifications <small>Get notifications on each new invite application.</small>
            </h1>
        </div>
        
    </div>
</div>
<div class="content">
    <!-- Dynamic Table Full -->
    <div class="block">
		<div class="block-content">
			<div class="row">
				<!---##### Notification emails Setting starts here #####-->
			  
			        <div class="col-sm-7" style="margin-bottom:0">
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
	<div class="block-content"><div class="row">
			<?php 
			// This file will be called from settings.php
			//display notification email ids with status
			
			try{		
					echo"<form method='post' name='notificationform' style='padding-bottom:1px'>
					<table class='tablemain table table-striped table-vcenter table-header-bg'><thead>
					<tr class='column-provider'><th>Name</th><th>Email</th><th>status</th><th>Action</th></tr>
					</thead><tbody>";
					
					$sqlon="select * from `notification_emails` ";
					$rs=$conn->query($sqlon);
					$rs->setFetchMode(PDO::FETCH_ASSOC);
					while($result=$rs->fetch()){
						$name=$result['name'];
						$email=$result['email'];
						$status=$result['status'];
						echo "
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
						echo"</td><td><i class='fa fa-trash-o delete_email' data-file=".$email."> </i>&nbsp&nbsp&nbspDelete</td>
					</tr>";
					/*<input class='fa fa-trash-o delete_email' type='checkbox' value='".$email."'> Delete*/
					}
					
					echo "</tbody></table></form> </div>";
				}catch(PDOException $e){echo $e;}
		?><!-- notification emails and status will be displayed -->
	</div>

</div>
</div>
<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>
<?php require 'inc/views/template_footer_end.php'; ?>
	<?php  
	}else
	{ 
		header("Location: index.php");
		exit();
	} ?>