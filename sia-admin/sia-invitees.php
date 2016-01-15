<?php require('sia-header.php');
if(isset($_GET['invite']) && !empty($_GET['invite']) ){
	$accept = $sia_obj ->accept_invitation($_GET['invite']);
	header("Location: sia-invitees.php");
}
if(isset($_GET['decline']) && !empty($_GET['decline']) ){
	$decline = $sia_obj ->decline_invitation($_GET['decline']);
	header("Location: sia-invitees.php");
}
?>
<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">
                Invitees Table <small>Table Shows Users Who have requested to join slack</small>
            </h1>
        </div>
    </div>
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content">
    <!-- Dynamic Table Full -->
    <div class="block">
        <form method="post" name="invite" class="invite_form" style="width:100%;">
			<?php $get_result = $sia_obj ->get_slack_token_url(); ?>
            <input type="hidden" name="url" class="slc_url" value="<?php if(isset($get_result['url']) && !empty($get_result['url'])){ echo $get_result['url']; } ?>">
            <input type="hidden" name="token" class="slc_token" value="<?php if(isset($get_result['token']) && !empty($get_result['token'])){ echo $get_result['token']; } ?>">
			
			
			<div class="block-content">
				<!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
				<table class="table table-bordered table-striped js-dataTable-full">
					<thead>
						<tr>
							<th class="text-center"></th>
							<th>Name</th>
							<th class="hidden-xs">Email</th>
							<th class="hidden-xs">Contact</th>
							<th class="text-center">Status</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$get_invitees_result = $sia_obj ->get_invities(); 
						while ($r = fetch_data($get_invitees_result)):
							$member_id=  htmlspecialchars($r['member_id']); 
							$email=htmlspecialchars($r['email']);
						?>
							<tr id="<?php echo $member_id; ?>">
							<td class="text-center">
								<?php
									$size = 40;
									$grav_url = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=mm&s=" . $size;
								?>
								<img src="<?php echo $grav_url; ?>" alt="" />
							</td>
							<td class="font-w600 manage-column convert-plug"><?php echo htmlspecialchars($r['name']);?></td>
							<td class="hidden-xs"><?php echo htmlspecialchars($r['email']); ?></td>
							<td class="hidden-xs">
								<?php echo htmlspecialchars($r['contact']); ?>
							</td>
							<td class="text-center">
								<div class="btn-group">
									<?php 
									$get_tokens = $sia_obj->get_active_slack_token_url();
									$status=htmlspecialchars($r['status']);
									if($status=='invited'){
									?>
										<a href="sia-invitees.php?decline=<?php echo $r['member_id']?>">
											<i class='fa fa-check-square-o'></i> Invited
										</a>
									<?php
									}
									else if($status == 'already_in_team' ){
									?>
										<a href="sia-invitees.php?decline=<?php echo $r['member_id']?>">
											<i class='fa fa-check-square-o'></i> Invited
										</a>
									<?php
									}
									else if($status == 'already_invited' ){
									?>
										<a href="sia-invitees.php?decline=<?php echo $r['member_id']?>">
											<i class='fa fa-check-square-o'></i> Invited
										</a>
									<?php
									}
									else if($status == 'declined' ){
									?>
										<a href="javascript:void(0)" onclick="accept_slack_request('<?php echo $r['member_id']?>','<?php echo $get_tokens['url']?>','<?php echo $r['email']?>','<?php echo $get_tokens['token']?>')">
											<i class='fa fa-ban'></i> Declined
										</a>
									<?php
									}
									else{
										// echo "<div class='".$member_id." status '>
                                    //<button type='submit' class='btn btn-default send_invitation' data-toggle='tooltip' title='Send Invitation' name='invitebtn' value=".$email."> <i class='fa fa-check-circle'></i></button>";
                                    //echo "<button type='button' class='btn btn-default decline' data-toggle='tooltip' title='Decline Member' name='declinebtn' value=".$email." > <i class='fa fa-ban'></i></button></div>";
										
										//sia-invitees.php?invite=<?php echo $r['member_id']
									?>
										<div class="<?php echo $member_id;?> status ">
											<a href="javascript:void(0)" onclick="accept_slack_request('<?php echo $r['member_id']?>','<?php echo $get_tokens['url']?>','<?php echo $r['email']?>','<?php echo $get_tokens['token']?>')">
											<button type='button' class='btn btn-default send_invitation' data-toggle='tooltip' title='Send Invitation' name='invitebtn'> 
												<i class='fa fa-check-circle'></i>
											</button>
											</a>
											<a href="sia-invitees.php?decline=<?php echo $r['member_id']?>">
											<button type='button' class='btn btn-default decline' data-toggle='tooltip' title='Decline Member' name='declinebtn' value="<?php echo $email; ?>" > 
												<i class='fa fa-ban'></i>
											</button>
											</a>
										</div>
									<?php
									}
									?>
								</div>
							</td>
						</tr>
						<?php endwhile;  ?>
					</tbody>
				</table>
			</div>
        </form>
    </div>
</div>
<!-- END Page Content -->
<script src="<?php echo BASE_PATH; ?>assets/js/core/jquery.min.js" ></script>
<script type="text/javascript">
function accept_slack_request(id,slc_url,email,slc_token){
	if(slc_token == ""){
		alert("Please add a slack token first, If you have added one check whether it is activated or not.");
	}
	$.ajax({ //sending invitation to slack
		url: slc_url, //'https://slackinvite.slack.com/api/users.admin.invite',  
		type: 'POST',
		data: {
			email: email,
			token: slc_token,//'xoxp-7491394935-7491752069-7491000672-c6311f',//slc_token,
			set_active: 'false',
		},
		success:function(data){
			if(data.ok == true || data.error =="already_invited"){
				window.location.href = "sia-invitees.php?invite="+id;
			}
		}
	});
}
</script>

<?php require("sia-footer.php"); ?>
<script src="<?php echo BASE_PATH; ?>assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo BASE_PATH; ?>assets/js/pages/base_tables_datatables.js"></script>