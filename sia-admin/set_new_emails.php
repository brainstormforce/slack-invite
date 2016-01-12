<?php
require("header.php");
?>
<link rel="stylesheet" type="text/css" href="assets/css/buttonstyle.css" />
<script src="<?php echo BASE_PATH; ?>assets/js/jquery-1.11.3.min.js" ></script>
<script type="text/javascript" src="<?php echo BASE_PATH; ?>assets/js/settings.js"></script>
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
    <div class="block">
		<div class="block-content">
			<form method='post' name='notificationform' style='padding-bottom:1px'>
				<?php
				$rs = $sia_obj ->get_email_notifications();
				if(chk_result_if_empty($rs)>0)
				{
					?>
					<a href="add_new_email.php"><input class="btn btn-default" type="button" value="Add New Email" style="margin-bottom:10px;"/></a>
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
							while($result = fetch_data($rs)){
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
											<input type='hidden' class='email_val' value="<?php echo $result['e_id']; ?>"/>
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
											<input type='hidden' class='email_val' value="<?php echo $result['e_id']; ?>"/>
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
				<?php
				}else{
				?>
					<a href="add_new_email.php"><input class="btn btn-default" type="button" value="Add New Email" /></a>
					<div class="message">
						There are no users available.
					</div>
				<?php
				}
				?>
			</form> 
		</div>
	</div>
</div>






<?php
require("footer.php");
?>