<?php
require("sia-header.php");
?>
<link rel="stylesheet" type="text/css" href="assets/css/buttonstyle.css" />
<script src="<?php echo BASE_PATH; ?>assets/js/core/jquery.min.js" ></script>
<script type="text/javascript" src="<?php echo BASE_PATH; ?>assets/js/settings.js"></script>

<div class="content bg-gray-lighter">
    <div class="row items-push" style="padding-left:0;">
        <div class="col-sm-7">
            <h1 class="page-heading">
                Email Notifications <small>Get notifications on each new invite application.</small>
            </h1>
        </div>
    </div>
</div>
<div class="content">
    <div class="block">
		<div class="block-content">
			<form method='post' name='notificationform' style='padding-bottom:1px'>
				<p>
					<h3>What Is Email Notification</h3>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br><br>
				</p>
				
				<table class='table table-bordered table-striped js-dataTable-full'>
					<thead>
						<tr class='column-provider'>
							<th>Name</th>
							<th>Email</th>
							<th>status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$rs = $sia_obj ->get_email_notifications();
						if(chk_result_if_empty($rs)>0)
						{
							while($result = fetch_data($rs)){
								$notification_id = $result['id'];
								$notification_details = unserialize($result['option_value']);
								if(isset($notification_details[0])){ $name = $notification_details[0]; }else{ $name = "";}
								if(isset($notification_details[1])){ $email = $notification_details[1]; }else{ $email = "";}
								if(isset($notification_details[2])){ $status = $notification_details[2]; }else{ $status = "";}
							?>
								<tr>	
									<td><?php echo $name;?></td>
									<td><?php echo $email; ?></td>
									<td>
									<?php
									if($status=='on'){
									?>
										<div class='switch_options'>
											<span class='switch_enable'> ON </span>
											<span class='switch_disable'> OFF </span>
											<input type='hidden' class='switch_val' value='1'/>
											<input type='hidden' class='email_val' value="<?php echo $notification_id; ?>"/>
										</div>
									<?php
									}
									// Display emails with off status 
									else{
									?>
										<div class='switch_options'>
											<span class='switch_enable'> ON </span>
											<span class='switch_disable'> OFF </span>
											<input type='hidden' class='switch_val' value='0'/>
											<input type='hidden' class='email_val' value="<?php echo $notification_id; ?>"/>
										</div>
									<?php
									}
									?>
									</td>
									<td>
										<a href="javascript:void(0)" class="delete_email" data-file="<?php echo $notification_id;?>">
											<i class='fa fa-trash-o '></i>&nbsp;Delete
										</a>
									</td>
								</tr>
							<?php
							}
							}else{
							?>
								<tr class="odd">
									<td class="dataTables_empty" valign="top" colspan="5">No data available in table</td>
								</tr>
							<?php
							}
							?>
					</tbody>
				</table>
				<a href="sia-add-notification-email.php"><input class="btn btn-default" type="button" value="Add New Email" style="margin-bottom:10px;"/></a>
			</form> 
		</div>
	</div>
</div>
<?php
require("sia-footer.php");
?>