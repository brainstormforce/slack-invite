<?php
echo "<div class='settings'>

</div>";
?>
<html>
<head>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class="container" >
		<h2 style="text-align:center;">Settings</h2>
		<div class="header"><h4>Notification</h4></div>
		<div class="admin_notification">Notifications:<span><button class="btnon">on</button>
			<button class="btnoff">off</button></span>
		</div>

		<div class="header"><h4>Notification Emails:</h4></div>
			<p class="available_Notification_emails"></p>
			<div class="email_settings">
			<form class="form-inline" role="form" action="" method="post">
				<div class="form-group">
				<label class="">Name:</label>
				<input type="text" class="form-control " id="exampleinput2" name="name" placeholder="Enter Name" required>
				<label class="">Add email:</label>
				<input type="email" class="form-control " id="exampleinput2" name="notification_email" placeholder="Add another email" required>
				<input type="submit" class="btn btn-default add_notification_email" id="exampleinput2" name="submit" value="Add Email">
				</div>
			</form>
		</div>

			<div class="header"><h4>Slack Settings</h4></div>
				<p class="Available_Tokenid"></p>
				<div class="slack_settings">
				<form class="form-horizontal" role="form" action="" method="post">
				<div class="form-group">
					<label class=""> URL:</label>
					<input type="email" class="form-control slack_url" id="exampleinput2" name="token_id" placeholder="Add Url">
					<label class="">Add Token:</label>
					<input type="email" class="form-control add_token_id" id="exampleinput2" name="token_id" placeholder="Add Token">
					<input type="submit" class="btn btn-default add_tokenid" id="exampleinput2" name="submit" value="Add">
				</div>
			</form>
		</div>
	</div>
</body>
</html>