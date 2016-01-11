<?php require('header.php'); ?>
<link rel="stylesheet" href="assets/css/tablestyle.css" />
<link rel="stylesheet" type="text/css" href="assets/css/buttonstyle.css" />
<script src="assets/js/jquery-1.11.3.min.js" ></script>
<script type="text/javascript" src="assets/js/settings.js" ></script>
<link rel="stylesheet" href="assets/css/style.css" />
<link rel="stylesheet" href="assets/css/font-awesome/css/font-awesome.min.css" />
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
			<div class="block-content">
				<div class="row">
					<form method='post' name='notificationform' style='padding-bottom:1px'>
						<table class='tablemain table table-striped table-vcenter table-header-bg'>
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
							$rs = $slack_obj ->get_email_notifications();
							while($result=$rs->fetch()){
								$name=$result['name'];
								$email=$result['email'];
								$status=$result['status'];
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
											<input type='hidden' class='email_val' value="<?php echo $email; ?>"/>
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
											<input type='hidden' class='email_val' value="<?php echo $email; ?>"/>
										</div>
									<?php
									}
									?>
									</td>
									<td>
										<i class='fa fa-trash-o delete_email' data-file="<?php echo $result['e_id'];?>"></i>
										&nbsp;&nbsp;&nbsp;Delete
									</td>
								</tr>
							<?php
							}
							?>
							</tbody>
						</table>
					</form> 
				</div>
			</div>
		</div>
	</div>
</div>
<?php require ("footer.php")?>