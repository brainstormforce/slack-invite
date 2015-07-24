<?php
session_start();
?>
<html>
<head><title>Settings</title>
	<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="../assets/css/style.css" />
	<link rel="stylesheet" href="../assets/css/font-awesome/css/font-awesome.min.css" />
	<script src="../assets/js/jquery-1.11.3.min.js" ></script>
	<script type="text/javascript" src="../assets/js/settings.js" ></script>
	<script type="text/javascript">
		jQuery(document).ready(function(){
				jQuery(".slack_settings").hide();
				jQuery(".display_token_edit").css('display', 'none');

				jQuery(".display_slack_settings").on("click", function(){
						jQuery(".email_settings").hide();
			    		jQuery(".slack_settings").show();
			    		jQuery(".available_Notification_emails").hide();
			    	});
				jQuery(".display_emails").on("click", function(){
						jQuery(".email_settings").show();
			    		jQuery(".slack_settings").hide();
			    		jQuery(".available_Notification_emails").show();
			    	});

			jQuery('#display_button').click(function(event) {
						jQuery(".display_token_edit").css('display', 'block');
						jQuery(".display_token").css('display', 'none');
						jQuery(this).css('display', 'none');
					});	
		});
	</script>
</head>
<body>

	<div class="container" >
	<div class="row">
		<?php if(isset($_SESSION['login_user'])){ 
		include 'adminfunctions/header.php';
		?>
		<div style="margin-left:30px;margin-bottom:50px;"><h2><i class="fa fa-wrench fa-2"></i>  Settings</h2>
			<h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo.</h5>
		</div>
	</div>
	
	
	<div class="col-md-3 .col-md-pull-9 btn-group-vertical" > 	
		<button class="btn btn-default display_slack_settings" >Slack Settings</button><!-- ### Display Button for slack ####-->
		<button class="btn btn-default display_emails" >Notification Emails</button><!-- ###  Display button for emails ####-->	
	</div>		
	<div class="col-md-9 .col-md-push-3">

<!---##### Notification emails Setting starts here #####-->

		<div class="available_Notification_emails">
		<div class="settings_headings">
			<h2>Email Notifications</h2>
			<h5>Get notifications on each new invite application.</h5>
		</div>
			<?php include 'adminfunctions/notificationemails.php' ?> <!-- notification emails and status will be displayed -->
		</div>
		
		
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
	
	<!-- ##### Slack Settings start here ######-->

		<div class="slack_settings " style="margin-top:20px;">		
			<div class="subcontainer">
				<div class="settings_headings">
				<h2>Slack Integration Settings</h2>
				<h4>Update your Slack API details here</h4>
			</div>
				<?php include 'adminfunctions/slacktokens.php'; ?> 
			</div>
		</div>
		</div>


		<?php }else{
			echo "<div><h2>Please Login to view this page!!!!!!!!!!</h2>
					please go to login page!!<br>
					<div><a href='index.php'><input type='button' class='btn btn-default login' name='login' value='Login'></a></div>
				</div>";
			}?>
	</div>
</body>
</html>