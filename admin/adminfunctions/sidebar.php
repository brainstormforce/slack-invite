<?php
//session_start();
require_once ( '../functions/connections.php' );

if(isset($_SESSION['login_user'])){ ?>

<div class='sidebar'>
	<span class="sidebarhead">Slack Invite</span><div class="closebtn">X</div>
			<ul>
				<li ><a href='/admin/settings.php'><b id="settingspage">Settings</b></a>
					<ul class="subuli">	
						<li class=" display_slack_settings" >Slack Settings</li><!-- ### Display Button for slack ####-->
						<li class="display_emails" >Notification Emails</li><!-- ###  Display button for emails ####-->	
					</ul>	
				</li>
				<li><a href='/admin/invitees.php'>Database</a></li>
			</ul>
</div>
<?php } ?>