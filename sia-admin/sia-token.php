<?php require ("sia-header.php"); ?>
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
				<p>
					<h3>What Is Slack Token</h3>
					The Slack Token allows you to communicate with Slack using your application to avoid more complex ways.<br><br>
					<h3>How you can get Slack Token</h3>
					Login to your slack account in browser as administrator than open the following URL in your browser. <a href="https://api.slack.com/web" target="_blank">https://api.slack.com/web</a>. Scroll down in bottom of the page there is a authentication section there you can find your token.<br>
					Note: You must be login as administrator only than that token will work properly.
				</p>
				

				<?php
				$get_result = $sia_obj ->get_slack_token();
				if(!empty($get_result)>0)
				{
				?>
				<table class="table table-bordered table-striped js-dataTable-full">
					<thead>
						<tr>
							<th class="hidden-xs">URL</th>
							<th class="hidden-xs">Token</th>
							<th class="text-center">Status</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$token_id = $get_result['id'];
							$token_result = unserialize($get_result['option_value']);
						?>
							<tr id="<?php echo $token_id; ?>">
								<td class="hidden-xs"><?php echo htmlspecialchars($token_result[1]) . ".slack.com"; ?></td>
								<td class="hidden-xs"><?php echo htmlspecialchars($token_result[2]); ?></td>
								<td class="text-center">
									<div class="btn-group">
										<?php 
										$status=htmlspecialchars($token_result[3]);
										if($status=='activated'){
										?>
											<i class='fa fa-check-square-o'></i> Activated
										<?php
										}
										else if($status == 'deactivated' ){
										?>
											<i class='fa fa-ban'></i> Deactivated
										<?php
										}
										else{
										?>
											<div class="<?php echo $token_id;?> status ">
												<a href="sia-token.php?activate=<?php echo $token_id;?>">
													<button type='button' class='btn btn-default send_invitation' data-toggle='tooltip' title='Activate Token'> 
														<i class='fa fa-check-circle'></i>
													</button>
												</a>
												<a href="sia-token.php?deactivate=<?php echo $token_id;?>">
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
					</tbody>
				</table>
				<a href="sia-add-token.php?id=<?php echo $token_id;?>" ><input class="btn btn-default" type="button" value="Edit Token" style="margin-bottom:10px;"/></a>
				<?php
				}else{
				?>
					<a href="sia-add-token.php" ><input class="btn btn-default" type="button" value="Add New Token" style="margin-bottom:10px;"/></a>
				<?php
				}
				?>
			</div>
        </form>
    </div>
</div>
<!-- END Page Content -->

<?php require ("sia-footer.php"); ?>
