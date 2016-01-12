<?php require ("header.php"); 
if(isset($_GET['activate']) && !empty($_GET['activate'])){
	$sia_obj ->activate_token($_GET['activate']);
	header("Location: slack_token.php");
}
if(isset($_GET['deactivate']) && !empty($_GET['deactivate'])){
	$sia_obj ->deactivate_token($_GET['deactivate']);
	header("Location: slack_token.php");
}
?>
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">
                Slack Tokens <small>Table Shows slack tokens</small>
            </h1>
        </div>
    </div>
</div>
<!-- Page Content -->
<div class="content">
    <!-- Dynamic Table Full -->
    <div class="block">
        <form method="post" name="invite" class="invite_form" style="width:100%;">
			<div class="block-content">
				<?php 
				$get_result = $sia_obj ->get_all_slack_token_url();
				if(chk_result_if_empty($get_result)>0)
				{
				?>
					<a href="add_new_token.php" ><input class="btn btn-default" type="button" value="Add New Token" style="margin-bottom:10px;"/></a>
					<table class="table table-bordered table-striped js-dataTable-full">
						<thead>
							<tr>
								<th>Name</th>
								<th class="hidden-xs">URL</th>
								<th class="hidden-xs" style="width: 15%;">Token</th>
								<th class="text-center" style="width: 10%;">Status</th>
							</tr>
						</thead>
						<tbody>
							<?php
							while ($r = fetch_data($get_result)):
							?>
								<tr id="<?php echo $r['id']; ?>">
									<td class="font-w600 manage-column convert-plug"><?php echo htmlspecialchars($r['name']);?></td>
									<td class="hidden-xs"><?php echo htmlspecialchars($r['url']); ?></td>
									<td class="hidden-xs"><?php echo htmlspecialchars($r['token']); ?></td>
									<td class="text-center">
										<div class="btn-group">
											<?php 
											$status=htmlspecialchars($r['status']);
											if($status=='activated'){
											?>
												<a href="slack_token.php?deactivate=<?php echo $r['id'];?>">
													<i class='fa fa-check-square-o'></i> Activated
												</a>
											<?php
											}
											else if($status == 'deactivated' ){
											?>
												<a href="slack_token.php?activate=<?php echo $r['id'];?>">
													<i class='fa fa-ban'></i> Deactivated
												</a>
											<?php
											}
											else{
											?>
												<div class="<?php echo $r['id'];?> status ">
													<a href="slack_token.php?activate=<?php echo $r['id'];?>">
														<button type='button' class='btn btn-default send_invitation' data-toggle='tooltip' title='Activate Token'> 
															<i class='fa fa-check-circle'></i>
														</button>
													</a>
													<a href="slack_token.php?deactivate=<?php echo $r['id'];?>">
														<button type='button' class='btn btn-default decline' data-toggle='tooltip' title='Deactivate Token'>
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
				<?php
				}else{
				?>
				<a href="add_new_token.php"><input class="btn btn-default" type="button" value="Add New Token" /></a>
				<div class="message">
					There are no tokens available.
				</div>
				<?php
				}
				?>
			</div>
        </form>
    </div>
</div>
<!-- END Page Content -->

<?php require ("footer.php"); ?>