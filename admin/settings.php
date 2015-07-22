<?php
session_start();
echo "<div class='settings'>
</div>";
?>
<html>
<head><title>Settings</title>
	<link rel="stylesheet" href="../css/style.css" />
	<script src="../js/jquery-1.11.3.min.js" /></script>
	<script type="text/javascript" src="../js/settings.js"></script>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
	<script type="text/javascript">
		jQuery(document).ready(function(){
				jQuery(".slack_settings").hide();

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
		});
	</script>
</head>
<body class="maincontainer">

	<div class="container" >
	<div class="row">
		<?php if(isset($_SESSION['login_user'])){ 
		include 'header.php';
		?>
		<div style="margin-left:30px;"><h2>Settings</h2>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo.
		</div>
	</div>
	
	
	<div class="col-md-3 .col-md-pull-9 btn-group-vertical" style="margin-top:50px;"> 
		
		<button class="btn btn-default display_slack_settings" >Slack Settings</button><!-- ### display Button ####-->
		<button class="btn btn-default display_emails" >Notification Emails</button>
	</div>		
	<div class="col-md-9 .col-md-push-3">

		<div class="available_Notification_emails">
			<?php include 'notificationemails.php' ?>
		</div>
		
		
		<div class="email_settings" style="margin-top:20px;"><!-- ### Hidden Block one display on display button click ####-->
			<div class="subcontainer">
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
	

		<div class="slack_settings " style="margin-top:20px;"><!-- ### Hidden Block one display on display button click ####-->
			<div class="subcontainer">
				<form class="form-horizontal slack_settings_form" role="form"  method="post">
				
					<div class="form-group">
						<label class=""> Name:</label>
						<input type="text" class="form-control user_name"  name="user_name" placeholder="User Name">
					</div>
					
					<div class="form-group">
						<label class=""> URL:</label>
						<input type="text" class="form-control slack_url"  name="slack_url" placeholder="Add Url">
					</div>
					
					<div class="form-group">
						<label class="">Add Token:</label>
						<input type="Text" class="form-control add_token_id"  name="token" placeholder="Add Token">
					</div>
					
					<div class="form-group">
						<input type="submit" class="btn btn-default add slack_settings_btn" value="Add">
					</div>
				
				</form>
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